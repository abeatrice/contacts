<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'first_name', 'email', 'phone'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
