<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
  protected $primaryKey = 'id';
  protected $fillable = [
    'id',
    'cont'
  ];
}
