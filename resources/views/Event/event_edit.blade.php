
<!DOCTYPE html>
<html>
<head>
  <title>Add event</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
</head>

<body><nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-book"></span> Event Scheduler
</a>
    </div>
    <ul class="nav navbar-nav">
     <form class="navbar-form navbar-left" role="search">

      <li> <input type="text" class="form-control" placeholder="search..."> </li> 
      </form>
      
   <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
         <span class="icon-bar"></span>
    </ul>
    @if (Auth::check()) 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="notification"><span class="glyphicon glyphicon-globe"></span> </a></li>
      <?php $username = Auth::user();?>
      <li><div class="dropdown">
    
  <button class="btn  dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="font-size:14px;color:#aaa;background:#222;margin-top:7px;">
    {{$username->name}}
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="min-width:30px;background:#ffe;">
    <li><a href="profile">Profile</a></li>
    <li><a href="#">Activity</a></li>
     <li role="separator" class="divider"></li>
    <li><a href="logout">Sign out</a></li>
  </ul>
</div></li>
    </ul>
    @else
     <ul class="nav navbar-nav navbar-right">
      <li><a href="register"><span class="glyphicon glyphicon-user"></span> নিবন্ধন করুন</a></li>
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> লগ ইন </a></li>
    </ul>
    @endif
  </div>
</nav>

<div class="col-md-3">
  <aside class="main-sidebar" style="background-color: #1A2226;height: 1000px;margin-top: -18px;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="color: #dfdfdf"> {{$username->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#" style="color:#97C7C4;">
            <i class="fa fa-dashboard"></i> <span>Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li style="color: #dfdfdf;"><a href="index.html"><i class="fa fa-circle-o"></i>Create Event</a></li>
            <li class="active" style="color: #dfdfdf;"><a href="index2.html"><i class="fa fa-circle-o"></i>Event List</a></li>
          </ul>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>
      </div>
      <div class="col-md-9">
  <div class="add_ques">
          {!! Form::model($events, array('route' => array('event.update.save', $events->id),    'files' => true ,'method' => 'PUT')) !!}

        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <div class="row">
      <div class="col-md-5">
      <div class="ques_title">
      <h3>Title</h3>
     </div>
     </div>
     </div>
       <div class="title_form">
        <div class="row">
      <div class="col-md-8">
       <input type="text" class="form-control" name="title" maxlength="80"  placeholder="Title of event..."  value="{{$events->title}}" >
       </div>
       </div>
       </div>
       
       <br><hr>      
       <div class="form-group"">
        <div class="row">
      <div class="col-md-8">
       <textarea class="form-control" name="event_detail" rows="7" cols="1" placeholder="Details about event..." id="comment">{{$events->description}} </textarea>
       </div>
       </div></div>
  
      </div><br/>
   <br>
   <hr>
   <label>Start Time: </label>
   <input type="datetime-local"" name="start_time" value="{{$events->start_time}}">

   <label>End Time: </label>
   <input type="datetime-local"" name="end_time" value="{{$events->end_time}}">
   <hr><hr>
      <div class="csc">
      <div class="row">
      
      <div class="col-md-3">
        <div class="tag_class">
             <h4>Couter Type:<br></h4>
     <select name="countertype">
  <option value="1">Upcounter</option>
  <option value="2">Count Down</option>  
  </select>
        </div>
        </div>
       
  <div class="col-md-3">
               <div class="tag_class">
             <h4>Event Type:<br></h4>
     <select name="event_type">
     @foreach($event_type as $event_types)
  <option value="{{$event_types->id}}">{{$event_types->event_type}}</option>
 @endforeach
  </select>
        </div>   
      </div>
      <div class="col-md-3">
               <div class="tag_class">
             <h4>Accepting Department:<br></h4>
     <select name="department">
   @foreach($depts as $dept)
  <option value="{{$dept->id}}">{{$dept->dept_name}}</option>
 @endforeach
  </select>
        </div>   
      </div>
      <div class="col-md-3">
               <div class="tag_class">
             <h4>Priority:<br></h4>
     <select name="priority">
  <option value="1">Higher</option>
  <option value="2">Medium</option>  
  <option value="3">Lower</option>  
  </select>
        </div>   
      </div>
</div>
<hr><hr>

  <div class="form-group">
    {!! Form::label('Event Image') !!}
    {!! Form::file('image') !!}
</div>
</div>
<br><hr>
<br>
     <br><br>
     <?php
     $userId = Auth::id();
     
     ?>
      <input type="hidden" name="id" value="<?php
    echo $userId;
     ?>">
       <button class="btn btn-info" type="submit">Update Event</button>
     
   
    {!! Form::close() !!}
 
</div>


  </div>
  <br><br><br><br>
  </div>
  

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