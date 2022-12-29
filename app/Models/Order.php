<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamp=false;
    public $primaryKey='id';
    protected $table = 'orders';
    protected $fillable = [
        'email', 'product_id', 'user_id', 'status', 'payment_method', 'payment_status', 'address', 'city'
    ];
    
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
