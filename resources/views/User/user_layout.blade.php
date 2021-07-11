<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Panel</title>

	<link href="{{asset('user_backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('user_backend/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('user_backend/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('user_backend/css/styles.css')}}" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


</head>
<body>


<!-- Header -->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="{{url('#')}}"><span>User Panel</span></a>
                
            </div>
            
        </div>
    </nav>



<!-- Slider -->

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                
                <div class="profile-usertitle-name">{{Auth::user()->name}}</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
           
            <li class=""><a href="{{url('user-compose-mail')}}"><em class="fa fa-dashboard">&nbsp;</em> Compose</a></li>

            <li><a href="{{url('user-inbox')}}"><em class="fa fa-dashboard">&nbsp;</em> Inbox</a></li>
            
            <li><a href="{{url('user-sent')}}"><em class="fa fa-dashboard">&nbsp;</em> Sent</a></li>
            
            <li><a href="{{url('user-bin')}}"><em class="fa fa-dashboard">&nbsp;</em> Bin</a></li>
            
            <li><a href="{{url('user-profile')}}"><em class="fa fa-dashboard">&nbsp;</em> Profile</a></li>

			<li>
                <form action="{{URL::to('logout')}}" method="post">
                    @csrf
                    <button type="submit"><a href="{{url('#')}}"><em class="fa fa-power-off">&nbsp;</em></a>Logout</button>
                </form>
            </li>
           

        </ul>
    </div>


    @yield('content')



    <div class="col-sm-12">
				<p class="back-link">Admin Panel <a href="#">Zahid AKbar Jakhar</a></p>
			</div>



	<script src="{{asset('user_backend/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('user_backend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('user_backend/js/chart.min.js')}}"></script>
	<script src="{{asset('user_backend/js/chart-data.js')}}"></script>
	<script src="{{asset('user_backend/js/easypiechart.js')}}"></script>
	<script src="{{asset('user_backend/js/easypiechart-data.js')}}"></script>
	<script src="{{asset('user_backend/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('user_backend/js/custom.js')}}"></script>


</body>
</html>