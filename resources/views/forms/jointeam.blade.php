<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/new.css")}}" />
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-content-center align-items-center" style="background-color:rgb(255, 255, 255);height:700px;">
        <div class="form bg-white p-5 rounded-4 shadow" style="width: 700px">
          
            <h3 class="text-primary text-center">particpate in {{$competition_name}} competation</h3>
           
                <form class="row  " action="/addteam/{{$competition_id}}" method="POST">
                
                    @csrf
                    <div class="col-6 mt-2 form-group ">
                      <label for="inputEmail4" class="form-label ">Team Name</label>
                      <input type="text" class="form-control" name="team_name" value="{{old("team_name")}}">
                      <p class="text-danger">
                      @error("team_name")
                       {{$message}}
                     @enderror
                      </p>
                    
                     
                      
                     

                    </div>
                    <div class="col-12 mt-2">
                      <label for="" class="form-label">Team leader Email</label>
                      <input type="email" value="{{old("email1")}}"class="form-control" name="email1" >
                      <p class="text-danger">
                      @error("email1")
                       {{$message}}
                     @enderror
                      </p>
                    </div>

                    <div class="col-6 mt-2">
                      <label for="" class="form-label">first member email</label>
                      <input type="email" class="form-control" name="email2" value="{{old("email2")}}">
                      <p class="text-danger">
                      @error("email2")
                      {{$message}}
                    @enderror
                      </p>
                    </div>
                   
                    <div class="col-6 mt-2">
                        <label for="" class="form-label">secound member email</label>
                        <input type="email" value="{{old("email3")}}"class="form-control" name="email3"  >
                        <p class="text-danger">
                        @error("email3")
                        {{$message}}
                      @enderror
                        </p>
                      </div>
                    <div class="col-md-6 mt-2">
                      <label for="" class="form-label">third member email</label>
                      <input type="email"value="{{old("email4")}}" class="form-control" name="email4" placeholder="" >
                      <p class="text-danger">
                      @error("email4")
                        {{$message}}
                      @enderror</p>
                    </div>
                    <div class="col-6 mt-2">
                    <label for="" class="form-label">fourth member email</label>
                    <input type="email" class="form-control" name="email5" placeholder="" value="{{old("email5")}}" >
                    <p class="text-danger">
                    @error("email5")
                    {{$message}}

                  @enderror  
                    </p>
                  </div>
                  <p class="text-danger">
                    @if (session("error"))
                    {{session("error")}}
                      
                    @endif
                  </p>
                    
                    <div class="col-3 p-0 mt-5">
                      <button type="submit" class="btn btn-primary p-0 m-0">join</button>
                    </div>
                   
                  </form>

        




        </div>

    </div>
  <?php
                  if($errors){
                     
   echo $errors;


                  }
                  
                    ?>
    
  
    <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("asset/js/java.js")}}"></script>
    <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
</body>
</html>