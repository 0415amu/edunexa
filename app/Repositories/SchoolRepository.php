<?php

namespace App\Repositories;

use App\Models\School;

class SchoolRepository implements SchoolRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
     public function create(array $data): School
    {
        return School::create($data);
    }
}
