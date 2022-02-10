<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionCat extends Model
{
    protected $table = 'permission_cat';
    protected $fillable = [
        'category_id',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
