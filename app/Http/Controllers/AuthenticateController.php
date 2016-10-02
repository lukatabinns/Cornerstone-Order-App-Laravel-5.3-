<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\OrderLine;
use DateTime;
use DB;


class AuthenticateController extends Controller
{
    //
			
		public function getDash()
		{
	  		
			$orderNames = DB::table('orders')
				->select('orders.first_name','orders.last_name','line_id','qty')
				->join('order_lines', 'order_lines.order_id', '=', 'orders.id')
				->get();
		
			return view('admin/admin-dash')->with('orderNames', $orderNames);
			
		}
}
