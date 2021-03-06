@include('partials.master-header')
 
    <div class="row top-buffer">

        <div class="col-md-6 col-md-offset-3">
            <div class="box box-primary">
                <div class="box-header">
			
                    <h3 class="box-title">Orders Made</h3>
                </div>
            @if($orderNames->count())
                <div class="box-body">
                    <table class="table table-bordered">
                     @foreach($orderNames as $o )

                        <tbody>
                        <tr>
                            <th>order name</th>
                            <th>line id</th>
                            <th class="text-right">qty</th>
                        </tr>
                            <tr>
                                <td>{{$o->first_name}} {{$o->last_name}}</td>
								<td>{{$o->line_id}}</td>
                                <td class="text-right"><span>{{$o->qty}}</span></td>
                            </tr>

                        </tbody>
					@endforeach	
                    </table>

                </div>
				@else
                <div class="alert alert-info col-md-4" style="margin-top: 15px;">
                    No accounts found. Please create an account.
                </div>
	        @endif
            </div>
        </div>
        <!-- Widget-1 end-->

    </div>
@include('partials.master-footer')
