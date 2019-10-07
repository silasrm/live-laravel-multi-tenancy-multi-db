<?php

namespace App\Models;

use Alsofronie\Uuid\UuidBinaryModelTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models
 */
class Category extends Model
{
    use UuidBinaryModelTrait;

    /**
     * @var bool
     */
    protected static $uuidOptimization = true;

    /**
     * @var array
     */
    protected $fillable = ['name'];
    /**
     * @var string
     */
    protected $connection = 'tenant';
}
