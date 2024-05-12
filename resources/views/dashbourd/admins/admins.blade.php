@extends('layout.dashbourd')
@section('page')
    

    <div class="container mt-5">
        <h2 class="text-center " style="color:#36205f">All admin we have In our Data</h2>
        <a class="btn btn3"  href="/admincreate">Add admin</a>
        <table class="mt-4 table">
            <thead>
                <tr class="text-center text-light" style="background-color:#36205f">
                    <th>admin_id</th>
                    <th>admin_name</th>
                    <th>admin_email</th>
                    <th>admin_password</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                <tr class="text-center">
                    <th>{{$admin->admin_id}}</th>
                    <td>{{$admin->admin_name}}</td>
                   
                    <td>{{$admin->admin_email}}</td>
                    <td>{{$admin->password}}</td>
                    <td>
                        <form action="/admindel/{{$admin->admin_id}}" method="post" class="d-inline">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-outline-dark w-50 h-50"><i class="bi bi-trash3 fs-5"></i></button>
                        </form>
                        <a href="/adminedit/{{$admin->admin_id}}"  class="text-center ms-1  btn btn-outline-dark w-50 h-50 mt-1"><i class="fa fa-edit fs-5 ms-1"></i></a>

                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            
            {{-- <div class="col-4 w-25 shadow p-0" style="height:200px;position: relative;background-color: black">
                <img class="w-100 h-75" src="{{$admin->admin_photo}}" class="card"/>
                
                <div class="row row-cols-2 h-25 p-3">
                    <p class="text-start ">{{$admin->admin_name}}</p>  
                    <p class="text-end">{{$admin->start_data}}</p>

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