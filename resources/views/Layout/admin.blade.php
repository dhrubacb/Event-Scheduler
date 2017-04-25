
<!DOCTYPE html>
<head>
  <title>Event Scheduler</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );

</script>
</head>

<body>
<?php $na= "http://localhost:8000/" ?>
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

    @if (Auth::check()) 
    <ul class="nav navbar-nav navbar-right">
     
      <?php $username = Auth::user();?>
      <li><div class="dropdown">
    
  <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="font-size:14px;color:#fff; font-style: italic; background-color:#0FE0BA;margin-top:7px;">
    {{$username->name}}
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="min-width:30px;background:#ffe;">
   
     
    <li><a href="logout">Sign out</a></li>
  </ul>
</div></li>
    </ul>
    @else
    <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign in</a></li>
          
        </ul>
    @endif
  </div>
</nav>

<div class="col-md-3">
  <aside class="main-sidebar" style="background-color: #1A2226;height: 1000px;margin-top: 0px;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="color: #dfdfdf"> {{$username->name}}</p>
           <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="color: #eee;">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#" style="color:#97C7C4;">
            <i class="fa fa-dashboard"></i> <span>Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li style="color: #dfdfdf;"><a href="{{$na}}event/create"><i class="fa fa-circle-o"></i>Create Event</a></li>
            <li class="active" style="color: #dfdfdf;"><a href="{{$na}}event/list"><i class="fa fa-circle-o"></i>Event List</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#" style="color:#97C7C4;">
            <i class="fa fa-dashboard"></i> <span>Event Type</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li style="color: #dfdfdf;"><a href="index.html"><i class="fa fa-circle-o"></i>Create Event Type</a></li>
            <li class="active" style="color: #dfdfdf;"><a href="index2.html"><i class="fa fa-circle-o"></i>Event Types</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>
      </div>
      @yield('header')



<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js
"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
</body>
</html>
@yield('footer')