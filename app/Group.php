<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  public function passwords() {
    return $this->HasMany('App\Password');
  }
  public function users() {
    return $this->HasMany('App\Users');
  }

}
