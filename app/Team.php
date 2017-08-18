<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Team extends Model
{
  protected $fillable = ['name', 'email', 'city', 'address'];

  public function players()
  {
      return $this->hasMany(Player::class);
  }

  public function comments(){
    return $this->hasMany(Comment::class);
  }

  public function posts()
  {
      return $this->belongsToMany(Post::class);
  }

  public function getRouteKeyName(){
    return 'name';
  }
}
