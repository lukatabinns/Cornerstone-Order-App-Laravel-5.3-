@extends('layouts.master')

@section('content')
    @if (! Auth::check())
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
      <style>
         body{
                background-color: #00FFFF;
        }

        .title {
            font-size: 96px;
            font-weight: 100;
            font-family: 'Lato';  
            margin-top:150px;
            color:#808080;
        }

        .container{
            margin:0 auto;
            width: 900px;
            text-align: center;

            }
        </style>   
       <div class="container">
         <div class="content">
            <div class="title">CornerStone</div>
         </div>
        </div>
       
    @endif

    @if ( Auth::check())
        <div class="container-fluid">
          <div class="row">
            @include('layouts.partials.sidebar')
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              <h1 class="page-header">Dashboard</h1>
              <p><b>Projects created:</b> 0</p>
              <p><b>Tasks created:</b> 0</p>
              <p><b>Comments created:</b> 0</p>
              <p><b>Attachments created:</b> 0</p>
              <h2 class="sub-header">Projects</h2>
              <a class="btn btn-info" href="{{ route('projects.create') }}">New Project</a>
            </div>
          </div>
        </div>
    @endif
    @include('layouts.partials.footer')
@stop
