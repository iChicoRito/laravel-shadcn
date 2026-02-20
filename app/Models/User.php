<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     */
    protected $table = 'tbl_users';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'phone',
        'status',
        'verification_token',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'verification_token',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'password'          => 'hashed',
        'email_verified_at' => 'datetime',
    ];
}