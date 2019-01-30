<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Textarea extends Model
{
    public function page()
    {
        return $this->belongsTo('amlok\Page');
    }
}
