@extends('layout.dashbourd')
@section('page')
     <div class="container-fliud mt-5">
        <h2 class="text-center " style="color:#36205f">All Competition we have In our Data</h2>
        <a class="btn btn3 mt-5" style="" href="/compcreate">Add competition</a>
        <a class="btn btn3 mt-5" style="" href="/showcompletedcomp">show completed competition</a>
        <table class="mt-4 table">
            <thead>
                <tr class="text-center text-light" style="background-color:#36205f">
                    <th>Competition id</th>
                    <th>Competition name</th>
                    <th>Competition photo</th>

                    {{-- <th>competition_desc</th> --}}
                    <th>Competition start data</th>
                    <th>Competition Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($competitions as $competition)
                <tr class="text-center">
                    <th>{{$competition->competition_id}}</th>
                    <td>{{$competition->competition_name}}</td>
                    <td><img src="{{$competition->competition_photo}}" alt="" style="width:140px;height: 70px;"></td>
                    {{-- <td>{{$competition->competition_desc}}</td> --}}
                    <td>{{$competition->start_data}}</td>
                    <td>{{$competition->compentation_type}}</td>
                    <td>
                        <form action="/compdel/{{$competition->competition_id}}" method="post" class="d-inline">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-outline-dark w-50 h-50"><i class="bi bi-trash3 fs-5"></i></button>
                        </form>
                        <a href="/compedit/{{$competition->competition_id}}" class="text-center  btn btn-outline-dark w-50 h-50 mt-1"><i class="fa fa-edit fs-5 ms-1"></i></a>

                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            
            {{-- <div class="col-4 w-25 shadow p-0" style="height:200px;position: relative;background-color: black">
                <img class="w-100 h-75" src="{{$competition->competition_photo}}" class="card"/>
                
                <div class="row row-cols-2 h-25 p-3">
                    <p class="text-start ">{{$competition->competition_name}}</p>  
                    <p class="text-end">{{$competition->start_data}}</p>

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
   
   