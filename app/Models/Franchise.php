<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'address_id',
        'user_id',
        'logo',
        'phone',
        'email',
        'website',
        'status',
        'whatsapp',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'linkedin',
        'telegram',
    ];
    protected $searchableFields = ['*'];

    public function address()
    {
        return $this->belongsTo('App\Models\Address');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function realty()
    {
        return $this->hasMany('App\Models\Realty');
    }
}
