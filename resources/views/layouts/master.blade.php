<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Globis</title>

	<!-- Bootstrap v3.3.7  -->
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
  <!-- Bootstrap v3.3.7  -->
  <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css') }}">

  <!-- Font Awesome v4.7.0 -->
  <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">

  <!-- FAVICON -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

</head>

<body>

	<div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" >
                        Globis
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="{{route('product.index')}}">Products</a></li>
                        <li class="dropdown" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >PO Status 
                            @if ($pocount != 0)
                            <span class="badge">{{$pocount}}</span>
                            @endif
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @forelse($podrop as $podrop)
                                <li class="list-group-item">
                                    
                                <a href="{{route('po.edit',$podrop->poid)}}">{{$podrop->code}} - {{$podrop->client}} <span class="label label-info">{{$podrop->status}}</span><br/>   <small><cite title="Source Title">{{$podrop->dateadded}}</cite></small></a>
                                
                                
                                

                                </li>
                                @empty

                                <li class="list-group-item"><a href="#">No PO available</a></li>
                                @endforelse
                                
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header"></li>
                                <li ><a href="{{route('po.index')}}">See all PO</a></li>

                            </ul>
                        </li>


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container">
  <div class="row">
     @yield('content')
 </div>
</div>

<hr/>
<!--/#footer-->
<footer class="footer">

</footer>

<!-- jQuery v2.1.4 -->
<script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
<!-- jQuery v3.1.1 -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<!-- jQuery v2.1.4 -->
<script src="{{ asset('/js/jquery2.1.4.min.js') }}"></script>
<!-- Bootstrap v3.3.7 -->
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<!-- DataTables v1.10.13 -->
<script type="text/javascript" charset="utf8" src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="{{ asset('/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript" charset="utf8" >

  $(document).ready(function () {
     var table = $('#productTable').DataTable({
				// "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		        //stateSave: true,
		        "lengthChange": false,
		        "paginate": false,
		        "columnDefs": [
		        {"orderable": false, "targets": [0, 5]}
		        ],
		        "pagingType": "full_numbers",
		        "order": [],
		        "scrollX": true,

          });
 });
</script>
<script type="text/javascript" charset="utf8" >

  $(document).ready(function () {
     var table = $('#poTable').DataTable({
                // "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                //stateSave: true,
                "lengthChange": false,
                "paginate": false,
                "columnDefs": [
                {"orderable": false,}
                ],
                "pagingType": "full_numbers",
                "order": [],
                "scrollX": true,

          });
 });
</script>
<script type="text/javascript">
	$(".deleteProduct").click(function(){
        var id = $(this).data("id");
        var token = $(this).data("token");
        $.ajax(
        {
            url: "product/"+id,
            type: 'DELETE',
            dataType: "JSON",
            data: {
                "id": id,
                "_method": 'DELETE',
                "_token": token,
            },
            success: function ()
            {
                console.log("it Work");
            }
        });

        console.log("It failed");
    });
</script>

</body>
</html>