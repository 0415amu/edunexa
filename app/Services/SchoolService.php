<?php
namespace App\Services;

use App\Models\School;

class SchoolService
{
    public function createSchool(array $data): School
    {
        return School::create($data);
    }

    public function getSchools(): \Illuminate\Database\Eloquent\Collection
    {
        return School::all();
    }

    public function getTotalSchools(): int
    {
        return School::count();
    }

    public function getSchoolsByStatus(bool $status): int
    {
        return School::where('status', $status)->count();
    }

    public function getRecentSchools(int $limit = 5): \Illuminate\Database\Eloquent\Collection
    {
        return School::orderByDesc('id')
            ->limit($limit)
            ->get();
    }
}
