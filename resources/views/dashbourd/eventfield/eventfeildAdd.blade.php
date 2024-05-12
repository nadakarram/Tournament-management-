<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/new.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/css_style.css")}}" />
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-content-center align-items-center" style="background:linear-gradient(#36205f,white);height:700px;">
        <div class="form bg-white p-5 rounded-4 shadow" style="width: 700px">
            <h3 class="text-center" style="color: #36205f">Add Event</h3>
            
            
                <form class="row  " action="/eventfieldadd" method="POST">
                
                    @csrf
                    <div class="col-12 mt-2 form-group ">
                      <label for="inputEmail4" class="form-label ">eventfeild name</label>
                      <input  value="{{old("eventfeild_name")}}" type="text" class="form-control" name="eventfeild_name">
                    
                      <span class="text-danger">
                        @error('eventfeild_name')
                        {{$message}}
                            
                        @enderror
                      </span>
                          
                     

                    </div>
                  
                    

                    
                    
                    
                    <div class="col-3 p-0 mt-5">
                      <button type="submit" class="btn btn3 p-0 m-0">Add Eventfeild</button>
                    </div>
                   
                  </form>

        




        </div>

    </div>

                 
    
  
    <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("asset/js/java.js")}}"></script>
    <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
</body>
</html>