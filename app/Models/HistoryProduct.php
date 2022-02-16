<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class HistoryProduct extends Model
{
    use SoftDeletes;
    protected $table = 'history_products';
    protected $fillable = [
        'status',
        'user_id',
        'product_id',
        'end_at',
        'serial_number',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
