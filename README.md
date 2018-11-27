# Mongo nested set
[![Latest Stable Version](https://poser.pugx.org/nerio/mongo-nestedset/v/stable)](https://packagist.org/packages/nerio/mongo-nestedset)
[![Latest Unstable Version](https://poser.pugx.org/nerio/mongo-nestedset/v/unstable)](https://packagist.org/packages/nerio/mongo-nestedset)

A mongo nested set library for laravel based on [kalnoy/nestedset](https://github.com/lazychaser/laravel-nestedset).
Depends on [jenssegers/mongodb](https://github.com/jenssegers/laravel-mongodb).
QueryBuilder code base on [beyondlex/mongotree](https://github.com/beyondlex/mongotree).
# Installation
```composer require nerio/mongo-nestedset```

```php
<?php

use Jenssegers\Mongodb\Eloquent\Model;
use Nerio\MongoNestedset\MongoNodeTrait;

class Node extends Model {
    use MongoNodeTrait;
}
```

# Usage

For usage please refer to original library https://github.com/lazychaser/laravel-nestedset
