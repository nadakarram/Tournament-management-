@extends('layout.nav')
@section('title')
    Competition
@endsection

@section('competions')
<h2 class="text-center"> Competations </h2>
<span style="background-color:#6f42c1; width:600px ;height:4px; display: block; border-radius: 5%;margin:auto;margin-top:20px;"></span>
<div class="container ">
@foreach ($competitions as $competition)
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
</div>



@endsection