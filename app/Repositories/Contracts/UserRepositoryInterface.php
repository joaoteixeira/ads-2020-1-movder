<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface UserRepositoryInterface
{
    public function all():Collection;
    public function paginate(int $paginate = 10):LengthAwarePaginator;
    public function findWhereLike(array $columns, string $search, string $column='id', string $ordem ='ASC'):Collection;
}