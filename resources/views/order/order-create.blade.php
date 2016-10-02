@include('partials.master-header')

<div class="container">
   <div class="col-md-6">
   <h3>Create An Order</h3>
     
        {{ Form::open(array('route'=>'order_store')) }}
        @if($errors->any())
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <li class="error">{{ implode('',$errors->all(':message')) }}</li>
            </div>

        @endif
        <div class="form-group">
            {{ Form::label('firstname','Name of person ordering:') }}
            {{Form::text('first_name','',array('class'=>'form-control','placeholder'=>'first name', 'required'=>'required'))}}
        </div>
		
		  <div class="form-group">
            {{ Form::label('lastname','') }}
            {{Form::text('last_name','',array('class'=>'form-control','placeholder'=>'last name', 'required'=>'required'))}}
        </div>
		
		  <div class="form-group">
            {{ Form::label('email','') }}
            {{Form::email('email','',array('class'=>'form-control','placeholder'=>'email', 'required'=>'required'))}}
        </div>
		
		<div class="form-group">
            {{ Form::label('address_line1','') }}
            {{Form::text('address_line1','',array('class'=>'form-control','placeholder'=>'address line1', 'required'=>'required'))}}
        </div>
		
		<div class="form-group">
            {{ Form::label('city','') }}
            {{Form::text('city','',array('class'=>'form-control','placeholder'=>'city', 'required'=>'required'))}}
        </div>
		
		<div class="form-group">
            {{ Form::label('postcode','') }}
            {{Form::text('post_code','',array('class'=>'form-control','placeholder'=>' postcode', 'required'=>'required'))}}
        </div>
  
     
        {{ Form::submit('Create Order',array('class'=>'btn btn-success')) }}
        {{ Form::close() }}
    </div>
</div>
@include('partials.master-footer')