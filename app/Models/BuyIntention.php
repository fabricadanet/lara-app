<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyIntention extends Model
{
    use HasFactory;

    protected $table = 'buy_intentions';

    protected $fillable = [
        'client_id',
        'realty_id',
        'user_id',
        'status',
        'marital status',
        'children',
        'pets',
        'suite',
        'decision maker',
        'location',
        'sale_deadline',
        'financing',
        'construction',
        'property_type',
        'swap_type',
        'sale_type',
        'furniture',
        'parking',
        'fumante',
        'work_out',
        'job_type',
        'proximity_beach'
       ];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function realty(){
        return $this->belongsTo(Realty::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}