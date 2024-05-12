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
            <h3 class=" text-center" style="color: #36205f">update admin</h3>
            
            
                <form class="row " action="/adminupdate/{{$id}}" method="POST">
                    @method("PUT")
                    @csrf
                    <div class="col-12 mt-2 form-group ">
                      <label for="inputEmail4" class="form-label ">admin name</label>
                      <input type="text" class="form-control" name="admin_name">
                    
                      <span class="text-danger">
                        @error('admin_name')
                        {{$message}}
                            
                        @enderror
                      </span>
                          
                     

                    </div>
                    <div class="col-12 mt-2">
                      <label for="" class="form-label">admin phone</label>
                      <input type="text" class="form-control" name="admin_phone" >
                      <span class="text-danger">
                        @error('admin_phone')
                        {{$message}}
                            
                        @enderror
                      </span>
                    </div>
                    {{-- <div class="col-6 mt-2">
                      <label for="" class="form-label">Phone Number</label>
                      <input type="text" class="form-control" name="phone_number" >
                     
                    </div> --}}

                    <div class="col-12 mt-2">
                      <label for="" class="form-label">Admin Email</label>
                      <input type="email" class="form-control" name="admin_email"  placeholder="abc@gmail.com" cols="5" rows="5">
                      <span class="text-danger">
                        @error('admin_email')
                        {{$message}}
                            
                        @enderror
                      </span>
                    </div>
                   
                    <div class="col-12 mt-2">
                        <label for="" class="form-label">admin password</label>
                        <input type="password" class="form-control" name="admin_password" >
                        
                      </div>
                      <span class="text-danger">
                        @error('admin_password')
                        {{$message}}
                            
                        @enderror
                      </span>
       
                    
                    
                    <div class="col-3 p-0 mt-5">
                      <button type="submit" class="btn btn3 p-0 m-0">update admin</button>
                    </div>
                   
                  </form>

        




        </div>

    </div>

                 
    
  
    <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("asset/js/java.js")}}"></script>
    <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
</body>
</html>