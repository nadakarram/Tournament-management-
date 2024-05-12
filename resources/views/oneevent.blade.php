@extends('layout.nav')
@section('title')
    event
@endsection
@section('competions')
@foreach ($event as $item)
<h2 class="text-center"> {{$item->event_name}} </h2>

<span style="background-color:#6f42c1; width:600px ;height:4px; display: block; border-radius: 5%;margin:auto;margin-top:20px;"></span>
<div class="container">
<div class="row row-col-3 gap-3 mt-5" style="height:max-content">
<img src="{{$item->event_photo}}" alt="photo" class="col p-0 m-0 w-50 h-100">
<div class="col data w-50 h-100">
    <h4 class="text-start mb-4">{{$item->event_name}}</h4>
    <p>
        {{$item->event_desc}} 
    </p>
    <p>if you want to participate in one olny appliy request from <a href="/apply/{{$item->event_id}}">here</a></p>
    <p>
        event time <strong>{{$item->event_time}}</strong>
    </p>  
    <p>
        event type 
        <strong>
            @foreach ($all as $items)
            {{-- {{$item->eventfeild_id}} --}}
            @if($items->eventfeild_id==$item->eventfeild_id)
            {{$items->eventfeild_name}}
            @endif
                
            @endforeach

        </strong>
    </p> 
    <p>
        event type 
        <strong>
           {{$item->state}}

        </strong>
    </p>  
</div>
</div>    
</div>
@if($type=="Team")
<div class="container text-center mt-5">
    <table class="table table-dark">
        <thead>
           <th>Order</th>
           <th>Team Nmae</th>
           <th>Score</th>
        </thead>
        <tbody>
            @foreach ($teames_score as $index=>$teame_score  )
            <tr>
                  <td class="text-success">{{ ++$index }} st</td>
                  <td>  @foreach ($teames as $team)
                    @if ($teame_score->team_id==$team->team_id)
                   {{$team->team_name}}
                   @endif
                       
                   @endforeach
                </td>
                   <td> 
                    @if ($teame_score->score_points==0)
                          not play yet
                   
                        
                    @else
                        
                          {{$teame_score->score_points}}
                    @endif
                </td>
            @endforeach</tr>
          {{-- <tr class="">
          
            <td> 
                @if ($teames_score[0]->team_id==$team->team_id)
                {{$team->team_name}}
                @endif
                    
                @endforeach
            </td>
            
                <td> 
                    @if ($teames_score[0]->score_points==0)
                          not play yet
                   
                        
                    @else
                        
                          {{$teames_score[0]->score_points}}
                    @endif
                </td>
           
          
          </tr>
          <tr>
            <td class="text-primary"> Secund</td>
            <td>
                @foreach ($teames as $team)
                @if ($teames_score[1]->team_id==$team->team_id)
               {{$team->team_name}}
               @endif
                   
               @endforeach
            </td>
            <td> 
                @if ($teames_score[1]->score_points==0)
                      not play yet
               
                    
                @else
                    
                      {{$teames_score[1]->score_points}}
                @endif
            </td>
          
          </tr>
          <tr>
            <td class="text-warning"> Thrid</td>
            <td>
                @foreach ($teames as $team)
                @if ($teames_score[2]->team_id==$team->team_id)
               {{$team->team_name}}
               @endif
                   
               @endforeach
            </td>
            <td> 
                @if ($teames_score[2]->score_points==0)
                      not play yet
               
                    
                @else
                    
                      {{$teames_score[2]->score_points}}
                @endif
            </td>
          
          </tr>
          <tr>
            <td class="text-danger"> Fourth</td>
            <td>
                @foreach ($teames as $team)
                @if ($teames_score[3]->team_id==$team->team_id)
               {{$team->team_name}}
               @endif
                   
               @endforeach
            </td>
            <td> 
                @if ($teames_score[3]->score_points==0)
                      not play yet
               
                    
                @else
                    
                      {{$teames_score[3]->score_points}}
                @endif
            </td>
          
          </tr> --}}
          
        </tbody>
      </table>
   
   
    
    
</div>
@else
<div class="container text-center mt-5">
    <table class="table table-dark">
        <thead>
           <th>Order</th>
           <th>Compator Name</th>
           <th>Score</th>
        </thead>
        <tbody>
            @foreach ($indvs_score as $index=>$indvs_score  )
            <tr>
                  <td class="text-success">{{ ++$index }} st</td>
                  <td>  @foreach ($indvs as $indv)
                    @if ($indvs_score->individual_participant_id==$indv->individual_participant_id)
                   {{$indv->indvidual_name}}
                   @endif
                       
                   @endforeach
                </td>
                   <td> 
                    @if ($indvs_score->score_point==0)
                          not play yet
                   
                        
                    @else
                        
                          {{$indvs_score->score_point}}
                    @endif
                </td>
            @endforeach
        </tr>

          
        </tbody>
      </table>
   
   
    
    
</div>
@endif


@endforeach
    
@endsection
