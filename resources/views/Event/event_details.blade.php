<?php 
use App\Event_type;
use App\Department;
 ?>
@extends('Layout.header')
@section('header')
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
<style type="text/css">
  .backdiv {
    position: absolute;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('/Image/{{$event_detail->imagelink}}');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 1500px 750px;
    
    opacity: .3;

  }

  
  
</style>
<div class="backdiv"></div>
  <div class="overlay"></div>
<div class="container">
      
     <div class="contains">
     
    <div class="head-part">
      <h3>Details About Event</h3>      
    </div>
   
      <h2 class="text-center" style="color: #000;">{{$event_detail->title}}</h2>
    
     <div class="desc-part">
      <h4 class="textleft">Description: </h4><h4 class="textright">{{$event_detail->description}}</h4> 
     </div> 
     <div class="desc-part">
     <h4>Start Time: </h4><h4>{{$event_detail->start_time}}</h4></div>
       
         <h4>End Time: </h4><h4 >{{$event_detail->end_time}}</h4> 
      
       
     </div> 
     <?php  
                   $event_type = Event_Type::find($event_detail->event_type);
                    $department = Department::find($event_detail->accepting_dept);
                 ?>
 <div class="desc-part">
    <h4>Event Type: </h4><h4>{{$event_type->event_type}}</h4>
         <h4>Department: </h4><h4 >{{$department->dept_name}}</h4> 
     
       
     </div> 


      </div>
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

  @section('footer')
   @endsection
     @endsection 