<?php

namespace Nerio\MongoNestedset;

use Kalnoy\Nestedset\NodeTrait;
use Nerio\MongoNestedset\Builder\QueryBuilder;

trait MongoNodeTrait
{
    use NodeTrait;

    public function newEloquentBuilder($query)
    {
        return new QueryBuilder($query);
    }
}
