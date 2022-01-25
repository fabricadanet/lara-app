<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title','start', 'end', 'user_id', 'realty_id', 'client_id'];
    protected $dates = ['start', 'end'];
    protected $table = 'events';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function realty()
    {
        return $this->belongsTo('App\Models\Realty');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
}