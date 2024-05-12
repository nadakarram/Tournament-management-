@extends('layout.nav')
@section('title')
    score
@endsection
@section('sec1')

@if($competation->compentation_type=="Team")
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
                    @if ($teame_score->total_score==0)
                          not play yet
                   
                        
                    @else
                        
                          {{$teame_score->total_score}}
                    @endif
                </td>
             </tr>
            @endforeach
        
          
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
            @foreach ($indvs_score as $index=>$indvs_score)
            <tr>
                  <td class="text-success">{{ ++$index }} st</td>
                  <td>  @foreach ($indvs as $indv)
                    @if ($indvs_score->individual_participant_id==$indv->individual_participant_id)
                   {{$indv->indvidual_name}}
                   @endif
                       
                   @endforeach
                </td>
                   <td> 
                    @if ($indvs_score->total_score==0)
                          not play yet
                   
                        
                    @else
                        
                          {{$indvs_score->total_score}}
                    @endif
                </td>
            @endforeach
        </tr>

          
        </tbody>
      </table>
   
   
    
    
</div>
@endif






























{{-- 

@if($competation->compentation_type=="Team")
<div class="container text-center mt-5">
    <table class="table table-dark">
        <thead>
           <th>Order</th>
           <th>Team Nmae</th>
           <th>Score</th>
        </thead>
        <tbody>
          <tr class="">
            <td class="text-success"> First </td>
            <td> @foreach ($teams as $team)
                @if ($scores[0]->team_id==$team->team_id)
                {{$team->team_name}}
                @endif
                    
                @endforeach
            </td>
            
                <td> 
                    @if ($scores[0]->total_score==0)
                          not play yet
                   
                        
                    @else
                        
                          {{$scores[0]->total_score}}
                    @endif
                </td>
           
          
          </tr>
          <tr>
            <td class="text-primary"> Secund</td>
            <td>
                @foreach ($teams as $team)
                @if ($scores[1]->team_id==$team->team_id)
               {{$team->team_name}}
               @endif
                   
               @endforeach
            </td>
            <td> 
                @if ($scores[1]->total_score==0)
                      not play yet
               
                    
                @else
                    
                      {{$scores[1]->total_score}}
                @endif
            </td>
          
          </tr>
          <tr>
            <td class="text-warning"> Thrid</td>
            <td>
                @foreach ($teams as $team)
                @if ($scores[2]->team_id==$team->team_id)
               {{$team->team_name}}
               @endif
                   
               @endforeach
            </td>
            <td> 
                @if ($scores[2]->total_score==0)
                      not play yet
               
                    
                @else
                    
                      {{$scores[2]->total_score}}
                @endif
            </td>
          
          </tr>
          <tr>
            <td class="text-danger"> Fourth</td>
            <td>
                @foreach ($teams as $team)
                @if ($scores[3]->team_id==$team->team_id)
               {{$team->team_name}}
               @endif
                   
               @endforeach
            </td>
            <td> 
                @if ($scores[3]->total_score==0)
                      not play yet
               
                    
                @else
                    
                      {{$scores[3]->total_score}}
                @endif
            </td>
          
          </tr>
          
        </tbody>
      </table>
   
   
    
    
</div>
    
@else
    
@endif

--}}

@endsection 