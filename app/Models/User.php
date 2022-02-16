<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'status',
        'roles_name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'roles_name' => 'array',
    ];


    public function product()
    {
        return $this->hasMany(Product::class, 'customers_id','id');
    }

    public function history()
    {
        return $this->hasMany(HistoryProduct::class, 'user_id','id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'user_id','id');
    }

    public function permission_cat()
    {
        return $this->hasMany(PermissionCat::class, 'user_id','id');
    }

    public function point()
    {
        return $this->hasMany(Point::class, 'user_id','id');
    }
}
