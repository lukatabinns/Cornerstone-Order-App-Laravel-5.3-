@if(Auth::check())
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ URL('auth/dash') }}">CornerStone</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Orders
            <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('order_index') }}">Orders</a></li>
            <li><a href="{{ route('order_create') }}">Create Order</a></li>
        </ul>
       </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">OrderLine
            <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('orderline_index') }}">OrderLine</a></li>
            <li><a href="{{ route('orderline_create') }}">Create Orderline</a></li>
        </ul>
       </li>
	   <li class="dropdown">
			<a class="dropdown-toggle" href="{{ route('placeorder_create') }}">Place Order</a>
	   </li>	
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a></li>-->
      <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
    </ul>
  </div>
</nav>
@endif