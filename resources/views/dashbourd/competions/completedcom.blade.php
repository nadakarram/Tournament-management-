@extends('layout.dashbourd')
@section('page')
<div class="container-fliud mt-4">
    <h2 class="text-center mt-2" style="color:#36205f">Completed Competation</h2>
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
            @foreach ($competations as $competition)
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

    
</div>
    
@endsection