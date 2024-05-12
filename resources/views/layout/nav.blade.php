











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/css_style.css")}}" />
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
 
 <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top p-0">
    <div class="container-fluid">

        <a class="navbar-brand justify-content-start p-0 m-0">
            <img src="{{asset("asset/images/universitylogo.jpg")}}" alt="logo" style="width: 60px;height: 60px;"> <span
                class="m-auto">ACE</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fs-6" id="active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6" id="link" href="/">Pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6" id="link" href="/competiondisplay">Competations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-6" id="link" href="/">About</a>
             </li>
               
             @if (!Session::has("loginid"))
             <div class="icon d-flex w-100 justify-content-end">
              <li class="nav-item ">
              <a class="nav-link fs-6" id="link" href="/login">login</a>
              </li>  
              <li class="nav-item ">
                 <a class="nav-link fs-6" id="link" href="/regester">sign up</a>
              </li>
             </div>
             
            
             @else
             @if (Session::has("loginAdminid"))
             <li class="nav-item ">
              <a class="nav-link fs-6" id="link" href="/basic">Dashbourd</a>
             </li>
               
             @endif
              
              <li class="nav-item">
              <a class="nav-link fs-6" id="link" href="/logout">logout</a>
             </li>
           
            </ul>
        </div>
          <div class="icon justify-content-end">
         <a style="color: #10437A;" class="fs-6 ms-5" href="/profile">profile </a>
         <i class="bi-person ms-2 fs-4"></i>


     </div>
            @endif
           
                  
               {{-- @if (!Auth::check())
               <li class="nav-item">
               <a class="nav-link fs-6" id="link" href="/login">login</a>
               </li> 

               @else
               <li class="nav-item">
                <a class="nav-link fs-6" id="link" href="/logout">logout</a>
               </li>
               
               <li class="nav-item">
                <a class="nav-link fs-6" id="link" href="/regester">sign up</a>
            </li> 
              @endif --}}
            
               {{-- <li class="nav-item">
                    <a class="nav-link fs-6" id="link" href="/login">login</a>
                </li> --}}

               
              
               

         
        </div>
       
    </div>
</nav> 
@section('text')
  {{-- <section class="container-fluid mt-1 p-0 mb-5">
    <div class="row w-100 p-0 m-0 justify-content-center align-content-center text-light"
        style="height:500px;background-image: url('https://media.istockphoto.com/id/1296652491/photo/golden-trophy-cup-on-dark-background-copy-space-for-text-3d-rendering.jpg?s=612x612&w=0&k=20&c=y3oSVK3Fh1fXjcr3ULQdXi1-xoRTRbPqoRIXG5Ur3fo=');background-size:cover;background-repeat: no-repeat ">
        <!-- text -->
        <div class="col-6  h-100  row justify-content-center align-items-center">
            <div class="col ">
              
                <h1 class="">Academic Center of Excellence</h1>
               
                <button class="btn btn-outline-light shadow rounded-pill ">See more <i
                        class="bi bi-arrow-right"></i></button> 
           
               
            </div>

        </div>
       <!-- image -->
        <!-- <div class="col h-100  p-0">
            <img src="" class="w-100 h-100 p-0">
        </div> -->
    </div>
</section>       --}} @show
@yield("sec1")

@yield("competions")

<div class="container-fluid px-4 pt-4 mt-5" style="background-color: #eeeeee; height:max-content;"> 
    <div class="row row-cols-4 justify-content-centern ">
      <div class="col">
        <a class="linkfooter" href="#">
          <span>
            <img src="universitylogo.jpg" style="height:40px ; width:55px ;">

          </span>
          <span class="fs-5">ACE</span>
        </a>
        <p class="mt-3"> Academic Center of Excellence
        </p>
      </div>
      <div class="col">
        <span class="fs-5">Quick Links</span>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/" class="linkfooter">Home</a>
        </div>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/" class="linkfooter">Pages</a>
        </div>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/competiondisplay" class="linkfooter">Competations</a>
        </div>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/" class="linkfooter">About</a>
        </div>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/profile" class="linkfooter">Profile</a>
        </div>


      </div>

      <div class="col">
        <span class="fs-5">Extra Links</span>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/" class="linkfooter">Home</a>
        </div>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/" class="linkfooter">About</a>
        </div>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/" class="linkfooter">Pages</a>
        </div>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/competiondisplay" class="linkfooter">Competations</a>
        </div>
        <div class="mt-2 links">
          <i class="bi bi-arrow-right fs-5"></i>
          <a href="/profile" class="linkfooter"> Profile</a>
        </div>

      </div>
      <div class="col">
        <span class="fs-5">Contact Info</span>
        <div class="mt-2 links">
          <i class="bi bi-telephone-fill fs-5"></i>
          <a class="linkfooter" >+201559116470</a>
        </div>
        <div class="mt-2 links">
          <i class="bi bi-envelope-fill fs-5"></i>
          <a class="linkfooter" href="https://gmail.com/">nada@gmail.com</a>
        </div>
      </div>


    </div>
    <div class="row justify-content-center ">
      <div class=" fs-4 d-flex gap-3 mt-4 justify-content-center">
        <a href="https://www.facebook.com/profile.php?id=61556673841264&mibextid=ZbWKwL" class="linkfooteri"><i class="bi-facebook"></i></a>
        <a href="https://twitter.com/" class="linkfooteri"><i class="bi-twitter "></i></a>
        <a href="https://www.instagram.com/" class="linkfooteri"><i class="bi-instagram "></i></a>
        <a href="https://www.linkedin.com/" class="linkfooteri"> <i class="bi bi-linkedin"></i></a>
        

      </div>
    </div>
    <div class="row text-center mt-2 ">
      <p>Create by ENG: hours security developer</p>

    </div>
</div> 
  <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>

  <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>

</body>
</html>
 
   
