<?php

namespace App\Models;

/**
 * Class UserTenant
 * @package App\Models
 */
class UserTenant extends BaseUser
{
    /**
     * @var string
     */
    protected $connection = 'tenant';
    /**
     * @var string
     */
    protected $table = 'tenant_users';
}
