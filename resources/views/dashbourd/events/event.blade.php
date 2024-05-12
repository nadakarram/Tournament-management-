@extends('layout.dashbourd')
@section('page')
    <div class="container-fliud mt-5">
        <h2 class="text-center " style="color:#36205f">All event we have In our Data</h2>
        <a class="btn btn3"  href="/eventcreate">Add event</a>
        <table class="mt-4 table">
            <thead>
                <tr class="text-center text-light" style="background-color:#36205f">
                    
                    <th>event_name</th>
                    <th>event_photo</th>
                    <th>event_time</th>
                    <th>competition_id</th>
                    <th>eventfeild_id</th>
                    <th>event_state</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                <tr class="text-center">
                    
                    <td>{{$event->event_name}}</td>
                    <td><img src="{{$event->event_photo}}" alt="" style="width:140px;height: 70px;"></td>
                    <td>{{$event->event_time}}</td>
                    <td>
                        @foreach ($competitions_data as $item)
                        @if($item->competition_id===$event->competition_id)
                        {{$item->competition_name}}

                        @endif
                            
                        @endforeach
                       
                    </td>
                    <td>
                        @foreach ($eventfeilds_data as $item)
                        @if($item->eventfeild_id===$event->eventfeild_id)
                        {{$item->eventfeild_name}}

                        @endif
                            
                        @endforeach
                    </td>
                    <td>{{$event->state}}</td>
                    <td>
                        <form action="/eventdel/{{$event->event_id}}" method="post" class="d-inline">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-outline-dark w-50 h-50"><i class="bi bi-trash3 fs-5"></i></button>
                        </form>
                        <a href="/eventedit/{{$event->event_id}}" class="text-end btn btn-outline-dark w-50 h-50 mt-1 "><i class="fa fa-edit fs-5"></i></a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            
            {{-- <div class="col-4 w-25 shadow p-0" style="height:200px;position: relative;background-color: black">
                <img class="w-100 h-75" src="{{$event->event_photo}}" class="card"/>
                
                <div class="row row-cols-2 h-25 p-3">
                    <p class="text-start ">{{$event->event_name}}</p>  
                    <p class="text-end">{{$event->start_data}}</p>

                </div>
                {{-- <div class="row  row-cols-2 justify-content-evenly p-3">
                    <form action="/compdel" method="post">
                        @csrf
                        @method("DELETE")
                        <a type="submit"><i class="bi bi-trash3 fs-"></i></a>
                    </form>
                    <a href="/compedit" class="text-end"><img src="{{asset("asset/images/update.png")}}"></a>

                </div> --}}


          

                
          
     

    </div>
@endsection