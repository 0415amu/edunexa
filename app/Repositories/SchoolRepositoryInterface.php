<?php

namespace App\Repositories;

use App\Models\School;

interface SchoolRepositoryInterface
{
    public function create(array $data):school;
}
