<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function user()
    {
        return $this->belongsTo('App/User');
    }

    protected $filable = [
        'Name',
        'Phonenumber',
        'Email',
        'Requirement',
        'WayToContact',
        'TimeZone',
        'Other',
        'user_id',
    ];
}
