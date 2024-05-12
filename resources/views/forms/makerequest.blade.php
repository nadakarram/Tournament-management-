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
            <h3 class="text-primary text-center">apply Request to join in {{$event->event_name}}</h3>
            <?php
            // if(count($errors)>0){
            //   foreach ($errors->all() as $error) {
            //     echo "<li>$error</li>";
            //   };
            // }
            ?>
                <form class="row " action="/makeapply/{{$id}}" method="POST">
                
                    @csrf
                    <div class="col-6 mt-2 form-group ">
                      <label for="inputEmail4" class="form-label ">Name</label>
                      <input type="text" class="form-control" name="user_name" value="{{old("user_name")}}">
                      <span class="text-danger">
                      @error("user_name")
                      {{$message}}
                    @enderror
                      </span>
                      
                     

                    </div>
                    <div class="col-6 mt-2">
                      <label for="" class="form-label">Phone Number</label>
                      <input type="text" class="form-control" name="phone_number" value="{{old("phone_number")}}">
                      <span class="text-danger">
                      @error("phone_number")
                      {{$message}}
                    @enderror
                      </pspan>
                     
                    </div>

                    <div class="col-12 mt-2">
                      <label for="" class="form-label">email</label>
                      <input type="email" class="form-control" name="email" value="{{old("email")}}" placeholder="abc@gmail.com">
                      <span class="text-danger"> 
                      @error("email")
                         {{$message}}
                       @enderror
                      </span>
                       
                    </div>
                   
                    
                    <div class="col-md-6 mt-2">
                      <label for="" class="form-label">age</label>
                      <input type="number" class="form-control" name="user_age" placeholder="" value="{{old("user_age")}}">
                      <span class="text-danger">
                      @error("user_age")
                      {{$message}}
                    @enderror
                      </span>
                    </div>
                    <div class="col-12 mt-2">
                    <label for="" class="form-label">gender</label>
                     <br> 
                     <div class="d-block">
                         <input type="radio" name=user_gender value="female" class="form-check-input "> female 
                     </div>
                     
                      <input type="radio" name="user_gender" value="male" class="form-check-input"> male
                      <br>
                      <span class="text-danger">
                      @error("user_gender")
                      {{$message}}
                    @enderror</span>
                    </div>
                    <div class="col-12 mt-2">
                        <label for="" class="form-label">why you will apply in this event that only </label>
                        <textarea cols="5" rows="5" type="string" class="form-control" name="requests" value="{{old("requests")}}" ></textarea>
                        <span class="text-danger">
                        @error("requests")
                         {{$message}}
                       @enderror
                        </span>
                      </div>
                    <div class="col-3 p-0 mt-5">
                      <button type="submit" class="btn btn-primary p-0 m-0">apply request</button>
                    </div>  <p class="text-danger">
                  @if (session("error"))
                  {{session("error")}} sinup from here <a href="/regester">regester</a>
                    
                  @endif</p>
                   
                  </form>
                

        




        </div>

    </div>
  <?php
            
                  
                    ?>
    
  
    <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("asset/js/java.js")}}"></script>
    <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
</body>
</html>