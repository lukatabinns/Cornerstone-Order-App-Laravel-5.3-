@include('partials.master-header')

    <div class="col-md-12">

       <a href="{{ route('order_create') }}">Create a new Order</a>
    </div>

    <div class="col-md-12">
        <div class="row">
            <br/>
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Orderline Records</h3>
                </div>

            @if($orderLine->count())

                    <div class="box-body">
                        <table class="table table-bordered table-striped">
                       @foreach($orderLine as $o )
                            <thead>
                            <tr class="center-text">
                                <th style="width: 9%;">Date</th>
                                <th>line_id</th>
                                <th>sku</th>
                                <th>qty</th>
								<th>edit</th>
                            </tr>
                            </thead>
                            <tbody class="center-text">
                                <tr>
                                    <td>{{ $o->created_at }}</td>
                                    <td>{{ $o->line_id }}</td>
                                    <td>{{ $o->sku }}</td>
                                    <td>{{ $o->qty }}</td>
	                                <td>{{ link_to_route('orderline_edit','Edit',array($o->id),array('class'=>'btn btn-warning')) }}</td>
                                </tr>

                            </tbody>
    		            @endforeach
                        </table>
                    </div>
            </div>
            <div class="col-md-12">
            </div>
            @else
                <div class="alert alert-info col-md-4" style="margin-top: 15px;">
                    No orderline  found.
                </div>
        </div>
        @endif
    </div>
@include('partials.master-footer')