<html>
<head>
	<title>Event Schedule</title>

	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>
<body>

	<section>
		
<nav class="navbar navbar-inverse  navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand event-title" href="{{url('index')}}"><span class="glyphicon glyphicon-book"></span> Event Scheduler
        </a>
        </div>

     

    @if (Auth::check()) 
    <ul class="nav navbar-nav navbar-right">
     
      <?php $username = Auth::user();?>
      
<li><a href="{{url('event/list')}}">DashBoard</a></li>
      <li><div class="dropdown">
    
  <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="font-size:14px;color:#fff; font-style: italic; background-color:#0FE0BA;margin-top:7px; ">
    {{$username->name}}
    <span class="caret"></span>
  </button>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="min-width:30px;background:#ffe;">
   
    <li style=""><a href="{{url('logout')}}" style="">Sign out</a></li>
  </ul>
</div></li>
    </ul>
    @else
    <ul class="nav navbar-nav navbar-right">
     <li><a href="{{url('event/feed')}}"><span class="glyphicons glyphicons-book-open"></span> List of Events</a></li>
          <li><a href="{{url('login')}}"><span class="glyphicon glyphicon-user"></span> Sign in</a></li>
          
        </ul>
    @endif
    <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form ">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
        </div>
      </form>
        </ul>
  </div>

</nav>
	</section>




 @yield('header')


</body>
</html>
@yield('footer')