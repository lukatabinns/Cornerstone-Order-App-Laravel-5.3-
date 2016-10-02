@include('partials.master-header')

<div class="container">
   <div class="col-md-6">
    <h3>Edit Order</h3>
   
        {{ Form::model($order,array('method'=>'post','route'=>array('order_update',$order->id))) }}
        @if($errors->any())
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <li class="error">{{ implode('',$errors->all(':message')) }}</li>
            </div>

        @endif

        <div class="form-group">
            {{ Form::label('first name','Name of order:') }}
            {{Form::text('first_name', old('order_firstname'),array('class'=>'form-control','placeholder'=>'first name', 'required'=>'required'))}}
        </div>
		
		<div class="form-group">
            {{ Form::label('last name') }}
            {{Form::text('last_name', old('last_name'),array('class'=>'form-control','placeholder'=>'last name', 'required'=>'required'))}}
        </div>
		
		<div class="form-group">
            {{ Form::label('email') }}
            {{Form::text('email', old('email'),array('class'=>'form-control','placeholder'=>'email', 'required'=>'required'))}}
        </div>
		
		<div class="form-group">
            {{ Form::label('address line1') }}
            {{Form::text('address_line1', old('address_line1'),array('class'=>'form-control','placeholder'=>'address line 1', 'required'=>'required'))}}
        </div>
		
        <div class="form-group">
            {{ Form::label('city') }}
            {{Form::text('city', old('city'),array('class'=>'form-control','placeholder'=>'city', 'required'=>'required'))}}
        </div>
		
		<div class="form-group">
            {{ Form::label('postcode') }}
            {{Form::text('post_code', old('post_code'),array('class'=>'form-control','placeholder'=>'postcode', 'required'=>'required'))}}
        </div>

        {{ Form::submit('Update Order',array('class'=>'btn btn-success')) }}
        {{ Form::close() }}
               
    </div>
</div>

@include('partials.master-footer')
