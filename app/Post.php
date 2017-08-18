<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;

class Post extends Model
{
  public function user()
  {
      return $this->belongsTo(User::class);
  }
  public function teams()
  {
      return $this->belongsToMany(Team::class);
  }
}
