<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //tabla contacts
    protected $fillable = [
        'name', 'email', 'subject', 'content'
    ];

    
}
