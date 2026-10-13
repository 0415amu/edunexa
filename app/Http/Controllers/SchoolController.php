<?php

namespace App\Http\Controllers;
use App\Services\SchoolService;
use Illuminate\Http\Request;
use App\Http\Resources\SchoolResource;
use Illuminate\Support\Facades\Validator;
class SchoolController extends Controller
{
     public function __construct(
        protected SchoolService $schoolService
    ) {}

   
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'code' => ['required', 'string', 'max:50', 'unique:schools,code'],
        'email' => ['nullable', 'email', 'max:255'],
        'phone' => ['nullable', 'string', 'regex:/^[6-9][0-9]{9}$/'],
        'address' => ['nullable', 'string'],
        'city' => ['nullable', 'string', 'max:100'],
        'state' => ['nullable', 'string', 'max:100'],
        'pincode' => ['nullable', 'string', 'max:10'],
        'logo' => ['nullable', 'string', 'max:255'],
        'status' => ['nullable', 'boolean'],
    ]);

    if ($validator->fails()) {
        return response()->json([
            'message' => 'Validation failed',
            'errors' => $validator->errors(),
        ], 422);
    }

    $school = $this->schoolService->createSchool(
        $validator->validated()
    );

    return response()->json([
        'message' => 'School created successfully',
        'data' => new SchoolResource($school),
    ], 201);
}


    public function index()
    {
        $schools = $this->schoolService->getSchools();

        return response()->json([
            'message' => 'Schools fetched successfully',
            'data' => SchoolResource::collection($schools),
        ]);
    }

    

public function storeFromDashboard(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'code' => ['required', 'string', 'max:50', 'unique:schools,code'],
        'email' => ['nullable', 'email', 'max:255'],
        'phone' => ['nullable', 'string', 'regex:/^[6-9][0-9]{9}$/'],
        'address' => ['nullable', 'string'],
        'city' => ['nullable', 'string', 'max:100'],
        'state' => ['nullable', 'string', 'max:100'],
        'pincode' => ['nullable', 'string', 'max:10'],
        'logo' => ['nullable', 'string', 'max:255'],
        'status' => ['nullable', 'boolean'],
    ]);

    if ($validator->fails()) {
        return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
    }

    $this->schoolService->createSchool(
        $validator->validated()
    );

    return redirect('/company/dashboard')
        ->with('success', 'School created successfully.');
}


}
