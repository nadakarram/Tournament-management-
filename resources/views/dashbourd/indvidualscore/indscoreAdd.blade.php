<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="{{asset("asset/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("asset/css/new.css")}}" />
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="{{asset("asset/css/css_style.css")}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-content-center align-items-center" style="background:linear-gradient(#36205f,white);height:700px;">
        <div class="form bg-white p-5 rounded-4 shadow" style="width: 700px">
            <h3 class=" text-center" style="color:#36205f">Add compactor Score</h3>
            
            
                <form class="row  " action="/indscoreadd" method="POST">
                
                    @csrf
                    
                  
                    
                    <div class="col-md-12 mt-2">
                      <label for="" class="form-label">compactor name</label>
                      <select name="individual_participant_id" id="" class="form-select">
                        @foreach ($indvs_data as $indv)
                        <option value="{{$indv->individual_participant_id}}">{{$indv->indvidual_name}}</option>
                        @endforeach

                      </select>
                     
                    </div>
                    <div class="col-md-12 mt-2">
                      <label for="" class="form-label">competation name</label>
                      <select name="competition_id" id="" class="form-select">
                        @foreach ($competations as $competationd)
                        
                            <option value="{{$competationd->competition_id}}">{{$competationd->competition_name}}</option>
                       
                        
                        @endforeach

                      </select>
                     
                    </div>
                    <div class="col-md-12 mt-2">
                      <label for="" class="form-label">event name</label>
                      <select name="event_id" id="" class="form-select">
                        @foreach ($competations as $competationd) 
                           @foreach ($events as $event)
                        
                        
                        
                           @if ($event->competition_id==$competationd->competition_id)
                            <option value="{{$event->event_id}}">{{$event->event_name}}</option>
                       
                            @endif      
                       
                        
                        @endforeach  
                        @endforeach

                      </select>
                     
                    </div>
                    
                    <div class="col-md-12 mt-2">
                      <label for="" class="form-label">the score</label>
                      <input type="number" class="form-control" name="score_points" >
                     
                    </div>
                    
                    
                    
                    <div class="col-3 p-0 mt-5">
                      <button type="submit" class="btn btn3 p-0 m-0">Add compactor score</button>
                    </div>
                   
                  </form>

        




        </div>

    </div>

                 
    
  
    <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("asset/js/java.js")}}"></script>
    <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
</body>
</html>