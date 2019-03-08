<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class parfum extends Model
{
   protected $primaryKey = 'id';
   protected $fillable = [
     'id',
     'name',
     'price',
     'type',
     'path',
     'content'
   ];
}
