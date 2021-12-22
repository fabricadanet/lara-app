<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'user_id','address_id', 'type_client','name', 'email', 'phone', 'whatsapp', 'facebook', 'instagram', 'description', 'created_at', 'updated_at'];

    protected $searchableFields = ['*'];


        public function address(){
            return $this->belongsTo('App\Models\Address');
        }
        public function user(){
            return $this->belongsTo('App\Models\User');
        }

}
