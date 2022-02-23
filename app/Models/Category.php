<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;
     protected $table = 'categories';
    protected $fillable = [
        'name',
        'user_id',
    ];


    public function product()
    {
        return $this->hasMany(Product::class, 'category_id','id');
    }

    public function permissioncat()
    {
        return $this->hasMany(PermissionCat::class, 'category_id','id');
    }
}
