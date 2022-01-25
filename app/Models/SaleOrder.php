<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleOrder extends Model
{
    use HasFactory;
    protected $fillable = ['buy_intention_id', 'user_id', 'status'];
    protected $table = 'sale_orders';

    public function buyIntention()
    {
        return $this->belongsTo(BuyIntention::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}