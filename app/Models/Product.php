<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name_product',
        'count',
        'product_inclusions',
        'serial_number',
        'category_id',
        'customers_id',
        'user_id',
        'damage',
        'status',
        'status_role'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function history_products()
    {
        return $this->hasMany(HistoryProduct::class, 'product_id','id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'product_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function point()
    {
        return $this->hasMany(Point::class, 'product_id','id');
    }
}
