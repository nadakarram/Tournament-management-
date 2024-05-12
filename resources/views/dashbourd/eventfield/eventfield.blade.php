@extends('layout.dashbourd')
@section('page')
    <div class="container mt-5">
        <h2 class="text-center " style="color:#36205f"> eventfeild we have In our Data</h2>
        <a class="btn btn3"  href="/eventfieldcreate">Add Event Feild</a>
        <table class="mt-4 table">
            <thead>
                <tr class="text-center text-light" style="background-color:#36205f">
                    
                    
                    <th>Event field id</th>
                    <th>Event field name</th>
                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventfeilds as $eventfeild)
                <tr class="text-center">
                    <th>{{$eventfeild->eventfeild_id}}</th>
                    <td>{{$eventfeild->eventfeild_name}}</td>
                    
                    
                    
                    <td class="d-flex flex-row justify-content-evenly align-content-center align-items-lg-stretch ">
                        <form action="/eventfielddel/{{$eventfeild->eventfeild_id}}" method="post" class="d-inline w-50 h-50 mt-1">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-outline-dark p-0 text-center w-100 h-100"><i class="bi bi-trash3 fs-4 "></i></button>
                        </form>
                        <a href="/eventfieldedit/{{$eventfeild->eventfeild_id}}" class="text-center ms-1  btn btn-outline-dark w-50 h-50 mt-1"><i class="fa fa-edit fs-5 ms-1"></i></a>

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