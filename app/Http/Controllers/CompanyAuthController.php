<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompanyLoginRequest;
use App\Services\SchoolService; 

class CompanyAuthController extends Controller
{
    public function login(CompanyLoginRequest $request)
    {
        $credentials = $request->validated();

        if (!auth()->attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Invalid email or password.',
            ])->withInput();
        }

        $user = auth()->user();

        if ($user->user_type !== 'company_admin') {
            auth()->logout();

            return back()->withErrors([
                'email' => 'You are not authorized to access company panel.',
            ])->withInput();
        }

        $request->session()->regenerate();

        return redirect('/company/dashboard');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/company/login');
    }

    
public function dashboard(SchoolService $schoolService)
{
    $schools = $schoolService->getSchools();
    return view('company.dashboard', [
        'schools' => $schools,
        'totalSchools' => $schools->count(),
        'activeSchools' => $schools->where('status', true)->count(),
        'inactiveSchools' => $schools->where('status', false)->count(),
        'recentSchools' => $schools->sortByDesc('id')->take(5),
    ]);
}

}
