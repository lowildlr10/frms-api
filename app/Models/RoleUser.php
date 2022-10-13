<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasUuids, HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles_users';

    protected $fillable = [
        'id',
        'user_id',
        'role_id'
    ];
}
