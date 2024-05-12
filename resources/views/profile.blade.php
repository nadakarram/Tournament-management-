@extends('layout.nav')
@section('title')
your profile
    
@endsection

@section('text')

<div class="container-fliud mb-5 bg-body-tertiary d-flex justify-content-center flex-column align-items-center align-content-center" style="height:500px ">
    <div style="height:200px" class="p-0 me-5  d-flex flex-column justify-content-center  align-items-center">
       <div class="img h-100 w-50 p-0 me-4"><img src="https://a.storyblok.com/f/191576/1200x800/faa88c639f/round_profil_picture_before_.webp" class="h-100 rounded-circle border-4 shadow" style="width: 200px;" ></div>
    </div>
    
    <div class="d-flex justify-content-center align-items-center flex-column mt-3" style="height:200px">
            <span class="fs-4 mt-3" style="color:#000000">{{$user->user_name}} </span> 
            
            <span class="fs-4 mt-3"style="color: black">your email : {{$user->email;}}</span> 
            <span class="fs-4 mt-3"style="color: black">your phone number :{{$user->user_phone_number}}</span>  <br>
            <div class="d-flex">
                  <button class="btn btn2 mt-4" id="show_p_comp">see your competations</button> 
                  <button class="btn btn2 mt-4 ms-2" id="show_notification"><i class="bi bi-bell fs-5"></i></button>
            </div>
          
    </div>
</div> 





<div id="notifactation">

    <div class="alert alert-warning  fade show ms-5 me-5" role="alert">
        <strong><i class="bi bi-bell fs-5"></i></strong> 
        @if($user->masage) 
         {{$user->masage}} 
         @else
         There IS any Notifacation Yet !!
        @endif
        
        
      </div>
</div>







<div class="" id="compet">
    <h2 class="text-center mt-5">Your Patacipated Competitions</h2>
<span style="background-color:#6f42c1; width:600px ;height:4px; display: block; border-radius: 5%;margin:auto;margin-top:20px;"></span>



 <div class="container ">
@if(isset($competation))

    @foreach ($competation as $competition)
    <div class="row row-col-3 gap-3 mt-5 border-2" style="height:max-content">
       
            <img src="{{$competition->competition_photo}}" alt="photo" class="col p-0 m-0 w-50 h-100 ">
    
        
        <div class="col data w-50 h-100">
            <h4 class="text-start mb-4">{{$competition->competition_name}}</h4>
            <p>
                {{$competition->competition_desc}} for <u>{{$competition->compentation_type}}</u>  <a class="text-primary" href="showevents/{{$competition->competition_id}}">show events</a>
            </p>
            <p>
                <strong>{{$competition->start_data}}</strong>
    
            </p>
            @if ($competition->compentation_type=="Team")
            <a class="btn btn2 " href="/teamadd/{{$competition->competition_id}}"> particpate as team</a>
            <a href="/compscore/{{$competition->competition_id}}" class="btn btn2 "> show competation score</a>
            @else
            <a class="btn btn2" href="/formaddind/{{$competition->competition_id}}"> particpate indvidual</a>
            <a href="/compscore/{{$competition->competition_id}}" class="btn btn2 "> show competation score</a>
            @endif
            
      
        </div>
    
        </div>
        
    
        
        @endforeach
@else
    <p class="text-center mt-5"> No Patacipated Competitions Yet</p>

@endif 
</div>
    <div class="container">
        <div class="container ">
            <h2 class="text-center mt-5">events of this Competitions</h2>
            <span style="background-color:#6f42c1; width:600px ;height:4px; display: block; border-radius: 5%;margin:auto;margin-top:20px;"></span>
            @if(isset($events)) 
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
            @else
            <p class="text-center mt-5"> No Patacipated events Yet</p>

            @endif
          
            </div>
    </div>



    
   
</div>
@endsection




@section('sec1')
<script src="{{asset("asset/js/java2.js")}}"></script>
@endsection