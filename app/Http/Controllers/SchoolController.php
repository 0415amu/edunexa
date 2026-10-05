<?php

namespace App\Http\Controllers;
use App\Services\SchoolService;
use Illuminate\Http\Request;
use App\Http\Resources\SchoolResource;
use App\Http\Requests\StoreSchoolRequest;
class SchoolController extends Controller
{
     public function __construct(
        protected SchoolService $schoolService
    ) {}

    public function store(StoreSchoolRequest $request){
        $school = $this->schoolService->createSchool(
            $request->validated()
        );

        return response()->json([
    'message' => 'School created successfully',
    'data' => new SchoolResource($school),
], 201);
    }
}
