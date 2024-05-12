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
        <div class="form mt-5 bg-white p-5 rounded-4 shadow" style="width: 700px">
            <h3 class=" text-center"style="color:#36205f">update Event</h3>
         
            
                <form class="row" action="/eventupdate/{{$id}}" method="POST">
                
                    @csrf
                    @method("PUT")
                    <div class="col-12 mt-2 form-group ">
                      <label for="inputEmail4" class="form-label ">event name</label>
                      <input type="text" class="form-control" name="event_name">
                    
                      
                          
                     

                    </div>
                  
                    <div class="col-12 mt-2">
                      <label for="" class="form-label">event desc</label>
                      <textarea type="text" class="form-control" name="event_desc"  cols="5" rows="5"></textarea>
                       <?php
                     
                      ?>
                    </div>
                   
                    <div class="col-12 mt-2">
                        <label for="" class="form-label">event photo link</label>
                        <input type="string" class="form-control" name="event_photo" >
                        
                      </div>
                    <div class="col-md-12 mt-2">
                      <label for="" class="form-label">event_time</label>
                      <input type="date" class="form-control" name="event_time" >
                     
                    </div>
                    <div class="col-md-12 mt-2">
                      <label for="" class="form-label">event_state</label>
                      <div class="d-flex flex-column">
                         <div class=""><input type="radio" class="radio-control" name="state"value="doesn't start" > doesn't start</div>
                         <div><input type="radio" class="radio-control" name="state" value="starting"> starting</div>
                      </div>
                     
                    </div>
                    
                    
                    <div class="col-3 p-0 mt-5">
                      <button type="submit" class="btn btn3 p-0 m-0">update Event</button>
                    </div>
                   
                  </form>

        




        </div>

    </div>

                 
    
  
    <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("asset/js/java.js")}}"></script>
    <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
</body>
</html>