<?php

namespace App\Models;

use Alsofronie\Uuid\UuidBinaryModelTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class BaseUser
 * @package App\Models
 */
class BaseUser extends Authenticatable
{
    use Notifiable, UuidBinaryModelTrait;

    /**
     * @var bool
     */
    protected static $uuidOptimization = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
