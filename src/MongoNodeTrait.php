<?php

namespace Nerio\MongoNestedset;

use Kalnoy\Nestedset\NodeTrait;
use Nerio\MongoNestedset\Builder\QueryBuilder;

/**
 * Trait MongoNodeTrait
 * @package Nerio\MongoNestedset
 * @method static \Kalnoy\Nestedset\Collection|\Illuminate\Database\Eloquent\Collection|static[] get($columns = []);
 */
trait MongoNodeTrait
{
    use NodeTrait;

    public function newEloquentBuilder($query)
    {
        return new QueryBuilder($query);
    }
}
