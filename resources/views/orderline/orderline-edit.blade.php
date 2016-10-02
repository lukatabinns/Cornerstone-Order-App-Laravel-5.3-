@include('partials.master-header')

<div class="container">
   <div class="col-md-6">
    <h3>Edit Orderline</h3>
   
        {{ Form::model($orderLine,array('method'=>'post','route'=>array('orderline_update',$orderLine->id))) }}
        @if($errors->any())
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <li class="error">{{ implode('',$errors->all(':message')) }}</li>
            </div>

        @endif

        <div class="form-group">
            {{ Form::label('line_id','') }}
            {{Form::text('line_id', old('line_id'),array('class'=>'form-control','placeholder'=>'line id', 'required'=>'required'))}}
        </div>
		
		<div class="form-group">
            {{ Form::label('sku') }}
            {{Form::text('sku', old('sku'),array('class'=>'form-control','placeholder'=>'sku', 'required'=>'required'))}}
        </div>
		
		<div class="form-group">
            {{ Form::label('qty') }}
            {{Form::text('qty', old('qty'),array('class'=>'form-control','placeholder'=>'qty', 'required'=>'required'))}}
        </div>
		

        {{ Form::submit('Update Orderline',array('class'=>'btn btn-success')) }}
        {{ Form::close() }}
               
    </div>
</div>

@include('partials.master-footer')