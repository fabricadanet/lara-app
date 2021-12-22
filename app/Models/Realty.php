<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realty extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'area', 'bathrooms', 'garage','address_id','user_id','franchise_id','status','marital status','children','pets','suite','decision maker','location','sale_deadline','financing','construction','property_type','swap_type','sale_type','furniture','parking','fumante','work_out','job_type','proximity_beach'] ;
    protected $searchableFields = ['*'];
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
