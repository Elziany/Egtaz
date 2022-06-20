@extends('basics.sturoom')
@section('content')
<div class="container">
<table class="table table-bordered border-danger">
  <thead>
      <tr>
     
       
           <td>
             <b>{{__('room.roomName')}}</b>
          </td>
          <td>
              <b>{{__('room.exam_name')}}</b>
          </td>
          <td>
             <b> {{__('room.stud_degree')}}</b>
          </td>
          <td>
             <b> {{__('room.exam_degree')}}</b>
          </td>
          <td>
            <b> {{__('room.submitting_time')}}</b>
          </td>
      </tr>
      @foreach($student->studentResults as $result)
      <tr>
    
  
          <td>{{$result->exam->room->name}}</td>
          <td>{{$result->exam->exam_name}}</td>
          <td>{{$result->total_degree}}</td>
          <td>{{$result->exam_degree}}</td>
          <td>{{$result->created_at->diffForHumans()}}</td>
         
      </tr>
      @endforeach
  </thead>
</table>
</div>
      
@endsection