<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function page()
    {
        return $this->belongsTo('amlok\Page');
    }
}
