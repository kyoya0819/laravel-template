<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Collection;

/**
 * @method static Eloquent|EloquentCollection|static[]|static|null find(int $value)
 * @method static $this create(array $attributes = []): $this
 * @method static $this where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Collection pluck($column, $key = null)
 * @method static EloquentCollection|static[] get($columns = ['*'])
 * @method static Eloquent|object|static|null first($columns = ['*'])
 * @method static boolean exists()
 * @method static boolean doesntExist()
 */
class Model extends Eloquent {

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];
}
