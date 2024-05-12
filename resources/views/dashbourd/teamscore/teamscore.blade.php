@extends('layout.dashbourd')
@section('page')
    <div class="container mt-5">
        <h2 class="text-center " style="color:#36205f">Score of all teames</h2>
        <a class="btn btn3"  href="/teamscorecreate">Add team score</a>
        <table class="mt-4 table">
            <thead>
                <tr class="text-center text-light" style="background-color:#36205f">
                    
                    <th>team_name</th>
                    <th>team_score</th>
                    <th>event_name</th>
                    <th>competation name</th>
                    
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teamscores as $teamscore)
                

                <tr class="text-center">
                    
                    <td>
                        @foreach ($teams_data as $team)
                        @if($team->team_id===$teamscore->team_id)
                        {{$team->team_name}}

                        @endif
                            
                        @endforeach
                    </td>
                   
                    <td>{{$teamscore->score_points}}</td>
                    <td>
                        @foreach ($events as $event)
                        @if($event->event_id===$teamscore->event_id)
                        {{$event->event_name}}

                        @endif
                            
                        @endforeach
                       
                    </td>
                    <td>
                  
                       
                        @foreach ($competation as $competationd)

                        @if($competationd->competition_id==$teamscore->competition_id)
                        {{$competationd->competition_name}}

                        @endif
                      
                        @endforeach
                        
                    </td>
   
                   
                    <td >
                        {{-- <form action="/teamscoredel/{{$teamscore->score_id}}" method="post" class="d-inline">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-outline-dark w-50 h-50"><i class="bi bi-trash3 fs-5"></i></button>
                        </form> --}}
                        <a href="/teamscoreedit/{{$teamscore->score_id}}"  class="text-center ms-1  btn btn-outline-dark w-50 h-50 mt-1"><i class="fa fa-edit fs-5 ms-1"></i></a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            
           
        


          

                
          
     

    </div>
 @endsection