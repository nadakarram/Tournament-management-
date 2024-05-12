
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
        <div class="row row-cols-3 " style="height:650px">
            <div class=" h-100 w-50  d-flex justify-content-center align-items-center">
                <img src="{{asset("asset/images/Image 71.png")}}" class="w-75 h-75 " style="margin:">
            </div>
            <div class=" w-50 h-100 d-flex justify-content-center align-content-center align-items-center">
                <div class="container px-5 py-5 rounded-3 shadow" style="">
                    <div class="form" >

                        <h2 class="display-6 fw-bold text-dark">Welcome back 👋</h2>
                        <p class="lead text-secondary">
                            Log in your account
                        </p>
                        <form class="mt-4" action="/adminlogincheck" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">What is your e-mail?</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="{{old("email")}}">
                                @error('email')
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger"> {{$message}}</p>
                               
        
                                    
                                @enderror
                                @if (session("email_faild"))
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{session("email_faild")}}</p>
                                
                                    
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Enter your password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name='password' value="{{old("password")}}">
                                @error('password')
                                 <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{$message}}</p>
                                    
                                @enderror
                                @if (session("password_faild"))
                                <div class="w-100 bg-danger mt-2 rounded-3 " style="height: 2px"></div>
                                <p class="text-danger">{{ session("password_faild")}}</p>
                                    
                                @endif
                            </div>
                           
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <button type="submit" class="btn text-light w-100 mt-3" style="background-color: #6f42c1">Continue</button>
                        </form>
                        <div class="mt-2 d-flex  justify-content-center">
                            <p>Don't have an account?</p>
                            <a href="/regester" class="">Sign up</a>
                        </div>
                        <div class="mt-1 d-flex  justify-content-center">
                            <p>you can join as member</p>
                            <a href="/login" class="text-decoration-underline">join as member</a>
                        </div>

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
 

{{-- <!DOCTYPE html>

<head>
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/new.css")}}" />
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<?php
// if(session("email")){
//     echo session("email");
// }    
?>
    
    <section>
        
        <div class="form_box">
            <div class="form_input">
                <form action="/adminlogincheck" method="post">
                    @csrf
                    <h2>Login as admin</h2>
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <input type="email" name="email">
                        <label class="
                        ">Email</label>
                       
                    
                    </div>
                    <span class="text-danger"> 
                        @error("email")
                        {{$message}}
                    </span>
                            
                        @enderror
                    <div class="email"> 
                         <i class="bi bi-lock"></i>  
                         <input type='password' name='password'>
                        <label class="">password</label>
                        
                       
                   
                      
                      
                    </div> 
                    <span class="text-danger">
@error("password")
                        {{$message}}
                        @enderror
                    </span>
                     <span class="text-danger">
                        @if (session("password_faild"))
                        {{ session("password_faild")}}
                            
                        @endif
                        @if (session("email_faild"))
                        {{session("email_faild")}}
                            
                        @endif
                        </span>
                    
                    <button type="submit">Login</button>
                    
                    <div class="butt d-flex justify-content-evenly mt-5" style="height: 40px">
                    <a class="btn btn-outline-light h-100 " href="/login">join as member</a>
                    <a class="btn btn-outline-light h-100" href="/adminlogin">join as admin</a>
                    </div>
                   


                </form>
            </div> 
        </div>
    </section>
    <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("asset/js/java.js")}}"></script>
    <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
</body>
</html> --}}