<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AditionalServices extends Model
{
  protected $fillable = [
    'service_name', 'price'
  ];
}
