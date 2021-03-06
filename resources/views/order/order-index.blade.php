
@include('partials.master-header')

<div class="col-md-12">

    <div class="row">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Manage Orders</h3>
            </div><br>
            <div class="col-md-2">
                <a class="btn btn-primary form-control" href="{{ route('order_create') }}">Create Orders</a>
            </div><br><br>

            @if($order->count())

                <br/>
                <div class="box-body">

                    <table class="table table-bordered table-striped">
                       @foreach($order as $o )
                        <thead>
                        <tr>
							<th>order #</th>
                            <th>first name</th>
                            <th>last name</th>
                            <th style="width: 12%;">email</th>
                            <th style="width: 12%;">address line 1</th>
                            <th style="width: 14%;">city</th>
                            <th style="width: 14%;">post code</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>

						<tr>
								<td>{{$o->id}}</td>
                                <td>{{ $o->first_name }}</td>
                                <td>{{ $o->last_name }}</td>
                                <td>{{ $o->email }}</td>
                                <td>{{ $o->address_line1 }}</td>
								<td>{{ $o->city }}</td>
                                <td>{{ $o->post_code }}</td>
                                <td>
									{{ link_to_route('order_edit','Edit',array($o->id),array('class'=>'btn btn-warning')) }}
								
								</td>
                           
                        </tr>

                        </tbody>
                      @endforeach
                    </table>
                </div>
	            @else
                <div class="alert alert-info col-md-4" style="margin-top: 15px;">
                    No orders found. Please create an order.
                </div>
        </div>
           @endif
    </div>
</div>
@include('partials.master-footer')

