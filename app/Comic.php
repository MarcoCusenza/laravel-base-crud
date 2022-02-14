<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  // protected $fillable = ['name', 'type', 'cooking_time', 'weight', 'description', 'image'];
  protected $guarded = [];
}
