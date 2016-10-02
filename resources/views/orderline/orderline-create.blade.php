@include('partials.master-header')
  <div class="col-md-6 col-md-offset-1">
        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Add Orderline</h3>
            </div>
            <div class="box-body">
                {{ Form::open(array('route'=>'orderline_store')) }}
                @if($errors->any())
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <li class="error">{{ implode('',$errors->all(':message')) }}</li>
                    </div>
                @endif

                <div class="control-group">
                    {{ Form::label('line_id','Line_id:') }}
                    {{Form::select('line_id',array('Shave Cream and Razor Box' => 'Shave Cream and Razor Box', 'Shave Gel and Razor Box' => 'Shave Gel and Razor Box', 'Shave Balm and Razor Box' => 'Shave Balm and Razor Box', 'default' => 'Please Select',) , ['default','line_1', 'line_2', 'line_3'])}}
                </div>
                <br/>

                <div class="control-group">
                    {{ Form::label('sku','Sku') }}
                    {{ Form::text('sku','',array('class'=>'form-control','placeholder'=>'sku')) }}
                </div>
                <br/>

                <div class="control-group">
                    {{ Form::label('qty','Qty') }}
                    {{ Form::number('qty','',array('class'=>'form-control','placeholder'=>'qty')) }}
                </div>
                <br/>
                {{ Form::submit('Add Orderline',array('class'=>'btn btn-success')) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>

@include('partials.master-footer')