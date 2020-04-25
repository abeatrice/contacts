<?php

/**
 * Author: Andrew Beatrice
 * Site: http://andrewbeatrice.com/
 * Email: abeatrice.mail@gmail.com
 * Date: 4/25/20
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
