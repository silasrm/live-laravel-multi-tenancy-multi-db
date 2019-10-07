<?php

namespace App\Models;

/**
 * Class UserSystem
 * @package App\Models
 */
class UserSystem extends BaseUser
{
    /**
     * @var string
     */
    protected $connection = 'system';
    /**
     * @var string
     */
    protected $table = 'system_users';
}
