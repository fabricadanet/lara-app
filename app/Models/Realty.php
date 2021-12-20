<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realty extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'area',
        'rooms',
        'bathrooms',
        'garage',
        'address_id',
        'status',
    ];
        public function address(){
            return $this->belongsTo('App\Models\Address');
        }
        public function user(){
            return $this->belongsTo('App\Models\User');
        }
        public function franchise(){
            return $this->belongsTo('App\Models\Franchise');
        }
}
