<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaceOrder extends Model
{
    //
  protected $table = 'order_lines';
  protected $fillable = array('line_id','sku','qty');
}
