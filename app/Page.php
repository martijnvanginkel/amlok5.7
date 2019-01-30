<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function strings()
    {
        return $this->hasMany('App\Word');
    }

    public function textareas()
    {
        return $this->hasMany('App\Textarea');
    }

    public function files()
    {
        return $this->hasMany('App\File');
    }
}
