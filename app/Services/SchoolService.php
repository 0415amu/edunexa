<?php

namespace App\Services;

use App\Models\School;
use App\Repositories\SchoolRepositoryInterface;

class SchoolService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected SchoolRepositoryInterface $schoolRepository
    ) {}

    public function createSchool(array $data): School
    {
        return $this->schoolRepository->create($data);
    }
}
