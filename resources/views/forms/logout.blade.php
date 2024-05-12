











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title></title>
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/css_style.css")}}" />
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container ">
        <div class="row row-cols-3" style="height:650px">
            <div class=" h-100 w-50">
                <img src="{{asset("asset/images/Capture.PNG")}}" class="w-100 h-100">
            </div>
            <div class=" w-50 h-100 d-flex justify-content-center align-content-center align-items-center">
                <div class="container px-5 py-4 rounded-3 shadow" style="">
                    <div class="form row" >
                        <h2 class="display-6 fw-bold">Let's Get Started 🚀</h2>
                        <p class="lead text-secondary">
                            sign up your account
                        </p>
                        
                            <div class="col-6  form-group">
                                <label for="inputEmail4" class="form-label ">Name</label>
                                <input type="text" class="form-control" name="name" value="{{old("name")}}">
                                <span class="text-danger">
                                @error("name")
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                               
                                @enderror
                                </span>
          
                            </div>
                            <div class="col-6 ">
                                <label for="" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="phone_number" value="{{old("phone_number")}}">
                                <span class="text-danger">
                                @error("phone_number")
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                                
                                @enderror
                                </pspan>
                               
                            </div>
                            <div class="col-md-6 ">
                                <label for="" class="form-label">Age</label>
                                <input type="number" class="form-control" name="age" placeholder="" value="{{old("age")}}">
                                <span class="text-danger">
                                @error("age")
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                               
                                @enderror
                                </span>
                            </div>
                            <div class="col-6">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{old("email")}}" placeholder="abc@gmail.com">
                                <span class="text-danger"> 
                                @error("email")
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                                   
                                @enderror
                                </span>
                                 
                            </div>
                              
                            {{-- <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            </div> --}}

                            
                            <div class="mb-1 mt-2">
                                <label for="password" class="form-label">Enter your password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                                @error("password") 
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                                
                                @enderror
                               
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label mt-0">gender</label>
                                 <br> 
                                 <div class="">
                                     <input type="radio" name=gender value="female" class="form-check-input "> female 
                                 </div>
                                 
                                  <input type="radio" name="gender" value="male" class="form-check-input"> male
                                  <br>
                                  <span class="text-danger">
                                  @error("gender")
                                  {{$message}}
                                @enderror</span>
                                </div>
                         
                            <button type="submit" class="btn text-light w-100 mt-3" style="background-color: #6f42c1">Continue</button>
                        </form>


                    </div>

                </div>



            </div>
        </div>

    </div>

  <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("asset/js/java.js")}}"></script>
  <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>

</body>
</html>
 
   
