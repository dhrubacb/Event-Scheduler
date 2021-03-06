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
<div class="container">
      <h4 class="text-center"><b>List of Events</b></h4>
      <div style="margin-top: 30px;margin-left: 50px;">
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Details</th>
                <th>Start time</th>
                <th>End Time</th>
                @if(Auth::check())
                <th>Subscription</th>
                @endif
            </tr>
        </thead>
       
        <tbody>
        @foreach($events as $event)
            <tr>
            <td><a href="{{ route('event.details',['id' => $event->id ]) }}">{{$event->id}}</a></td>
                <td>{{$event->title}}</td>
                <td>{{$event->description}}</td>
                <td>{{$event->start_time}}</td>
                <td>{{$event->end_time}}</td>
                <?php $i=0; ?>
                 @if(Auth::check())
                  @foreach($sub as $subscription)
                  @if($event->id == $subscription->event_id)
                <th><button class="btn btn-danger btn-large" onclick="location.href='{{ route('unsubs',['id' => $subscription->id ]) }}'">Subscribed</button></th><?php $i=1; break;?>
                @endif
                @endforeach
                @if($i==0)
                <td><button class="btn btn-info btn-lrg" onclick="location.href='{{ route('event.subs',['id' => $event->id ]) }}'">Subscribe</button></td>
                @endif

                @endif
            </tr>
           
            @endforeach
          </tbody>
    </table>
      <div>
        
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