<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    public function Group()
    {
      return $this->belongsTo('App\Group');
    }
}
