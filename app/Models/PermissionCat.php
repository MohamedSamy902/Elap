<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PermissionCat extends Model
{
    use SoftDeletes;
    protected $table = 'permission_cat';
    protected $fillable = [
        'category_id',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }
}
