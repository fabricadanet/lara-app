<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'number',
        'complement',
        'district',
        'zip_code',
        'city',
        'state',
        'country',
    ];
    protected $searchableFields = ['*'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function franchise()
    {
        return $this->belongsTo('App\Models\Franchise');
    }
    public function realty()
    {
        return $this->belongsTo('App\Models\Realty');
    }
}
