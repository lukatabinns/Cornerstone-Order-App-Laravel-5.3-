<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Keeper\Repositories\OrderRepositoryInterface;
use App\Order;
use DB;
class OrderController extends Controller
{
   
	protected $order;
	
    public function __construct(OrderRepositoryInterface $order)
    {
        //parent::__construct();
        $this->order = $order;

    }
    //
	 /**
     * Display a listing of the resource.
     * GET /order
     *
     * @return Response
     */
	 public function index()
    {
        $order = Order::orderBy('created_at', 'asc')->paginate(5);
        return view('order.order-index')->with('order', $order);
    }
	
	 /**
     * Show the form for creating a new resource.
     * GET /order/create
     *
     * @return Response
     */
	
	public function create()
    {
        return view('order.order-create');
    }
	
	/**
     * Show the form for editing the specified resource.
     * GET /order/{id}/edit
     *
     * @param  int $id
     * @return Response
    */
    public function edit($id)
    {
        $order = $this->order->findById($id);
        return view('order/order-edit')->with('order', $order);
    }
	
	    /**
     * Store a newly created resource in storage.
     * POST /order
     *
     * @return Response
     */
    public function store()
    {
		$stockCount = DB::table('stocks')
				->select('qty')
				
				->get();
				
        $form = $this->order->getForm();
        if (!$form->isValid()) {
            return redirect('order/create')->withErrors($form->getErrors())->withInput();
        }
        $this->order->create($form->getInputData());
        return redirect('order/index')->with('success',['Order successfully created']);
    }
	
	 /**
     * Update the specified resource in storage.
     * PUT /account/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $form = $this->order->getForm();
        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        $this->order->update($id, $form->getInputData());
        return redirect('order/index')->with('success',['Order successfully created']);
    }
	
	    /**
     * Remove the specified resource from storage.
     * DELETE /order/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->order->delete($id);
        return redirect('order/index');
    }
}
