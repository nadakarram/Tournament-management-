@extends('layout.dashbourd')
@section('page')
    <div class="container-fliud mt-5">
        <h2 class="text-center " style="color:#36205f">Score of all individual teames</h2>
        <a class="btn btn3"  href="/indscorecreate">Add compactor score</a>
        <table class="mt-4 table">
            <thead>
                <tr class="text-center text-light" style="background-color:#36205f">
                    
                    <th>Compactor name</th>
                    <th>Compactor score</th>
                    <th>Event name</th>
                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indviduals as $indvidual)
                <tr class="text-center">
                    
                    <td>
                        @foreach ($indvs_data as $indv)
                        @if($indv->individual_participant_id===$indvidual->individual_participant_id)
                        {{$indv->indvidual_name}}

                        @endif
                            
                        @endforeach
                    </td>
                   
                    <td>{{$indvidual->score_point}}</td>
                    <td>
                        @foreach ($events as $event)
                        @if($event->event_id===$indvidual->event_id)
                        {{$event->event_name}}

                        @endif
                            
                        @endforeach
                       
                    </td>
   
                   
                    <td >
                        <form action="/indscoredel/{{$indvidual->score_id}}" method="post" class="d-inline">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-outline-dark w-50 h-50"><i class="bi bi-trash3 fs-5"></i></button>
                        </form>
                        <a href="/indscoreedit/{{$indvidual->score_id}}" class="text-center btn btn-outline-dark w-50 h-50 mt-1 "><i class="fa fa-edit fs-5"></i></a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            
           
        


          

                
          
     

    </div>
@endsection