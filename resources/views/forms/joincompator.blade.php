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
           
                <form class="row  " action="/indviualadd/{{$competition_id}}" method="POST">
                
                    @csrf
                    <div class="col-6 mt-2 form-group ">
                      <label for="inputEmail4" class="form-label ">Your Name</label>
                      <input type="text" class="form-control" name="indvidual_name" value="">
                      <p class="text-danger">
                    @error("indvidual_name")
                    {{$message}}
                      
                    @enderror
                      </p>
                     
                          
                     

                    </div>
                    <div class="col-12 mt-2">
                      <label for="" class="form-label"> Email </label>
                      <input type="email" class="form-control" name="email1" >
                     <p class="text-danger">
                        @error('email1')
                   {{$message}}
                     
                   @enderror
                    </p>
                    </div>

                    
                    
                    <div class="col-3 p-0 mt-5">
                      <button type="submit" class="btn btn-primary p-0 m-0">join</button>
                    </div>
                    
                 
                  </form>
                  <p class="text-danger">
@if (session("error"))
{{session("error")}} sinup from here <a href="/regester">regester</a>
  
@endif
                  </p>
        




        </div>


    </div>
  <?php
                 
                  
                    ?>
    
  
    <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("asset/js/java.js")}}"></script>
    <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
</body>
</html>