<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/new.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/slide.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/css_style.css")}}" />
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        
        <div class="row">
         
            
            
             <div id="wrapper">
            
        
    
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav" style="margin-left:0;">
                    <li class="sidebar-brand ps-4 fs-5 text-center">
                        
                            <a id="menu-toggle" style="margin-top:20px" class="text-light toggle cursor-pointer" > C.R.M university</a>
                        
                    </li>
                    <li>
                        <a href="/comp"><i class="fa fa-sort-alpha-asc " aria-hidden="true"> </i> <span style="margin-left:5px;">Competition</span>  </a>
                    </li>
                    <li>
                        <a href="/event"> <i class="fa fa-play-circle-o " aria-hidden="true"> </i> <span style="margin-left:5px;"> Events</span> </a>
                    </li>
                    <li>
                        <a href="/eventfield"> <i class="fa fa-puzzle-piece" aria-hidden="true"> </i> <span style="margin-left:5px;"> Events Field</span> </a>
                    </li>
                    <li>
                        <a href="/teamscore"> <i class="fa fa-font" aria-hidden="true"> </i> <span style="margin-left:5px;"> Teams' score</span> </a>
                    </li>
                    <li>
                        <a href="/indscore"><i class="fa fa-info-circle " aria-hidden="true"> </i> <span style="margin-left:5px;">Competitors' score </span> </a>
                    </li>
                    <li>
                      @if (Session::has("postion"))
                      <a href='/admins'> <i class='fa fa-comment-o' aria-hidden='true'> </i> <span style='margin-left:5px;'>Admins Section</span> </a>
                     
                      @endif
                    </li>
                    <li>
                        <a href="/"> <i class="bi bi-globe2" aria-hidden="true"> </i> <span style="margin-left:5px;">Website</span>  </a>
                    </li>
                    <li>
                        <a href="/adminlogout"> <i class="bi bi-globe2" aria-hidden="true"> </i> <span style="margin-left:5px;">logout</span>  </a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
    
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            
                             
                            
    </a>
         <!-- /#page-content-wrapper -->
     
        <!-- /#wrapper -->
      
        </div>
    </div> 
   
    @section('page')
    <div class="container">
        <h1>Welecome admin</h1>
    </div>
        
    @show
  
    {{-- @yield('page') --}}
<script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("asset/js/java.js")}}"></script>
<script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
<script>
        
      
</script>
</body>
</html>