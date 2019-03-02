<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
  protected $primaryKey = 'id';
  protected $fillable = [
    'id',
    'path',
    'imagHeader',
    'imagContant'
  ];
}
