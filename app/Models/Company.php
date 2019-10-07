<?php

namespace App\Models;

use Alsofronie\Uuid\UuidBinaryModelTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * @package App\Models
 */
class Company extends Model
{
    use UuidBinaryModelTrait;

    /**
     * @var bool
     */
    protected static $uuidOptimization = true;

    /**
     * @var string
     */
    protected $connection = 'system';
    /**
     * @var array
     */
    protected $fillable = ['name', 'connection', 'prefix'];

    /**
     * @var array
     */
    public $casts = [
        'id' => 'string'
    ];
}
