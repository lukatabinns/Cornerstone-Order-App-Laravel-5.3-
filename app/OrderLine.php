<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLine extends Model
{
    //
	
    protected $table = 'stocks';
	protected $fillable = array('line_id','sku','qty');
}
