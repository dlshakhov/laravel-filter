<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

interface FilterInterface
{
    public function setBuilder(Builder $builder);
    public function makeFilter();
}
