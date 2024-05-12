<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}" />
    
    <link rel="stylesheet" href="{{asset("asset/css/css_style.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/new.css")}}" />
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-content-center align-items-center" style="background:linear-gradient(#36205f,white);height:700px;">
        <div class="form mt-5 bg-white p-5 rounded-4 shadow" style="width: 700px">
            <h3 class=" text-center" style="color: #36205f">update Competition</h3>
            {{-- {{$id}} --}}
            
                <form class="row  " action="/compupdate/{{$id}}" method="POST">
                
                    @csrf
                    
                    <div class="col-12 mt-2 form-group ">
                      <label for="inputEmail4" class="form-label ">competition_name</label>
                      <input type="text" class="form-control" name="competition_name" value="{{old("competition_name")}}">
                      <span class="text-danger">
                        @error('competition_name')
                        {{$message}}
                            
                        @enderror
                      </span>
                      
                          
                     

                    </div>
                    {{-- <div class="col-6 mt-2">
                      <label for="" class="form-label">Phone Number</label>
                      <input type="text" class="form-control" name="phone_number" >
                     
                    </div> --}}

                    <div class="col-12 mt-2">
                      <label for="" class="form-label">competition_desc</label>
                      <textarea type="text" class="form-control" name="competition_desc"  placeholder="abc@gmail.com" cols="5" rows="5" value="{{old("competition_desc")}}"></textarea>
                      <span class="text-danger">
                        @error('competition_desc')
                        {{$message}}
                            
                        @enderror
                      </span>
                    </div>
                   
                    <div class="col-12 mt-2">
                        <label for="" class="form-label">competition photo link</label>
                        <input type="string" class="form-control" name="competition_photo" value="{{old("competition_photo")}}" >
                        <span class="text-danger">
                          @error('competition_photo')
                          {{$message}}
                              
                          @enderror
                        </span>
                      </div>
                    <div class="col-md-12 mt-2">
                      <label for="" class="form-label">start_data</label>
                      <input type="date" class="form-control" name="start_data"value="{{old("start_data")}}" >
                      <span class="text-danger">
                        @error('start_data')
                        {{$message}}
                            
                        @enderror
                      </span>
                    </div>
                    <div class="col-12 mt-2">
                      <label for="" class="form-label">competation type</label>
                       <br> 
                       <div class="d-block">
                           <input type="radio" name="compentation_type" value="Indvidual" class="form-check-input "> Indvidual 
                       </div>
                       
                        <input type="radio" name="compentation_type" value="Team" class="form-check-input"> Team
                        <?php
                        
                        ?>
                      </div>
                      <span class="text-danger">
                        @error('compentation_type')
                        {{$message}}
                            
                        @enderror
                      </span>
                    
                    
                    <div class="col-3 p-0 mt-5">
                      <button type="submit" class="btn btn3 p-0 m-0">update Competition</button>
                    </div>
                   
                  </form>

        




        </div>

    </div>

                 
    
  
    <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("asset/js/java.js")}}"></script>
    <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
</body>
</html>