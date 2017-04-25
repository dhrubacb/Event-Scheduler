@extends('Layout.admin')
@section('header')
      <div class="col-md-9">
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Details</th>
                <th>Start time</th>
                <th>End Time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
       
        <tbody>
        @foreach($events as $event)
            <tr>
                <td>{{$event->title}}</td>
                <td>{{$event->description}}</td>
                <td>{{$event->start_time}}</td>
                <td>{{$event->end_time}}</td>
                <td><button class="btn btn-warning" onclick="location.href='{{ route('event.update',['id' => $event->id ]) }}'">Edit</button></td>
                <td><button class="btn btn-danger" onclick="location.href='{{ route('event.delete',['id' => $event->id ]) }}'">Delete</button></td>
            </tr>
            @endforeach
          </tbody>
    </table>
      <div>
        
      </div>
 
</div>
</div>
  </div>
  <br><br><br><br>
  </div>
  
  @section('footer')
   @endsection
     @endsection