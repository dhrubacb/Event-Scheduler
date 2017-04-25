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
		    	<a class="navbar-brand event-title" href="#"><span class="glyphicon glyphicon-book"></span> Event Scheduler
				</a>
		    </div>
		    
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
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign in</a></li>
		      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sign up </a></li>
		    </ul>
		  </div>
		</nav>
	</section>





	<section class="header_slide">
		<div class="container-fluid">
			<div class="row">
				<div class="">
					<div class="owl-carousel" id="header_slide">
					@foreach($top_events as $top_event)
						<div class="slide1 bg notice" data-endtime="{{$top_event->end_time}}" style="background-image: url(Image/{{$top_event->imagelink}});">
							<div class="overlay"></div>
							
							<div class="head-text">
								<div class="col-md-6 col-md-offset-3">
									<div class="counter">
										<ul>
									        <li><span class="days timenumbers">01</span>
									          <p class="timeRefDays timedescription">days</p>
									        </li>
									        <li><span class="hours timenumbers">00</span>
									          <p class="timeRefHours timedescription">hours</p>
									        </li>
									        <li><span class="minutes timenumbers">00</span>
									          <p class="timeRefMinutes timedescription">minutes</p>
									        </li>
									        <li><span class="seconds timenumbers yellow-text">00</span>
									          <p class="timeRefSeconds timedescription">seconds</p>
									        </li>
								     	</ul>
									</div>
								</div>
							</div>
						</div>
@endforeach

						<!-- <div class="slide3 bg">
							<div class="overlay"></div>
							<div class="head-text">
								<div class="col-md-6 col-md-offset-3">
									<p>asd</p>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
				<p class="aa">Past Notice</p>
					<div class="scroll-gen">

						<div class="obo">
							<h4>one fsd sg</h4>
						</div>
						<div class="obo">
							<h4>one fsd sg</h4>
						</div>
<div class="obo">
							<h4>one fsd sg</h4>
						</div>
<div class="obo">
							<h4>one fsd sg</h4>
						</div>
<div class="obo">
							<h4>one fsd sg</h4>
						</div>
<div class="obo">
							<h4>one fsd sg</h4>
						</div>
<div class="obo">
							<h4>one fsd sg</h4>
						</div>

					</div>
				</div>
				<div class="col-md-6">
					<p class="aa">Past Notice</p>
					<div class="scroll-down">
						<p>Expaire Notice... </p>
						<p>asdfsf</p>
					</div>
				</div>

			</div>

		</div>
	</section>



	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	
	<script src="js/script.js"></script>

</body>
</html>