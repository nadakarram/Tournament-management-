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
        <div class="form bg-white p-5 rounded-4 shadow" style="width: 700px">
            <h3 class=" text-center" style="color: #36205f;">update score</h3>
         
            
                <form class="row" action="/teamscoreupdate/{{$id}}" method="POST">
                
                    @csrf
                    @method("PUT")
                    <div class="col-md-12 mt-2">
                      <label for="" class="form-label">team name</label>
                      <select name="team_id" id="" class="form-select">
                       
                        @foreach ($teams_data as $team)
                        @if($team->team_id===$teamscore[0]->team_id)
                        <option value="">{{$team->team_name}}</option>
                        @endif
                        
                            
                        @endforeach
                        

                      </select>
                     
                    </div>
                    <div class="col-md-12 mt-2">
                      <label for="" class="form-label">event name</label>
                      <select name="event_id" id="" class="form-select">
                        @foreach ($events as $event)
                        @if($event->event_id===$teamscore[0]->event_id)
                        <option value="">{{$event->event_name}}</option>
                        @endif
                        
                            
                        @endforeach
                     
                      

                      </select>
                        
                    </div>
                    <div class="col-md-12 mt-2">
                      <label for="" class="form-label">competation name</label>
                      <select name="event_id" id="" class="form-select">
                       
                        @foreach ($competation as $competationd)
                        @if($competationd->competition_id==$teamscore[0]->competition_id)
                        <option value="">{{$competationd->competition_name}}</option>
                        @endif
                        
                            
                        @endforeach
                     
                      

                      </select>
                        
                    </div>
                    <div class="col-md-12 mt-2">
                      <label for="" class="form-label">the score</label>
                      <input type="number" class="form-control" name="score_points" >
                    <span class="text-danger"> @error('score_points')
                     {{$message}}
                       
                     @enderror </span>
                     
                    </div>
                    
                    
                    
                    
                    <div class="col-3 p-0 mt-5">
                      <button type="submit" class="btn btn3 p-0 m-0">update team score</button>
                    </div>
                   
                  </form>

        




        </div>

    </div>

                 
    
  
    <script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("asset/js/java.js")}}"></script>
    <script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>
</body>
</html>