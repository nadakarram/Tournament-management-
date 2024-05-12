@extends('layout.nav')
@section('title')
    events
@endsection

@section("competions")
<h2 class="text-center">  Events </h2>
<span style="background-color:#6f42c1; width:600px ;height:4px; display: block;border-radius: 5%;margin:auto;margin-top:20px;"></span>
<div class="container ">
<div class="row justify-content-center align-content-center gap-2 ">  
@foreach ($events as $event)
<a class="col-4 w-25 shadow p-0 mt-4" href="/showoneevent/{{$event->event_id}}" style="height: 250px">
    <img src="{{$event->event_photo}}" alt="" class="w-100 p-0 h-75">
    <div class="text p-2 d-flex flex-row justify-content-between align-content-center align-items-center">
      <h6>{{$event->event_name}}</h6>
      <h6>{{$event->event_time}}</h6>

    </div>


</a>
@endforeach  
</div>
</div>
@endsection