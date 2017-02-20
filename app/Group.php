<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  public function Passwords()
  {
      return $this->hasMany('App\Password');
  }
}
