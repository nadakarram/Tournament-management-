@extends('layout.nav')
@section('text')
<section class="container-fluid mt-1 p-0">
        <div class="row w-100 p-0 m-0 justify-content-start align-content-center text-light"
            style="height:500px;background-image: url('https://images.template.net/wp-content/uploads/2015/12/Green-Business-Background.jpg?width=530')}}');background-size: cover;">
            <!-- text -->
            <div class="col w-50  h-100 text-center row align-items-center justify-content-center">
                <div class="col">
                    <h1 class="display-2 text-dark">Academic Center <br>of Excellence</h1>
                    <p class="text-dark">ACE, the Academic Center of Excellence, is a prestigious institution </p>
                    <button class="btn btn-outline-dark shadow rounded-pill">See more <i
                            class="bi bi-arrow-right"></i></button>
                </div>

            </div>
            <!-- image -->
            <!-- <div class="col h-100  p-0">
                <img src="" class="w-100 h-100 p-0">
            </div> -->
        </div>
    </section>
    
@endsection
@section('sec1')
    <!-- collage department -->
       <section class="container-fluid mt-5  text-center">
        <h2>Collage department</h2>
        <span style="background-color:#6f42c1;width:600px ;height:4px; display: block; border-radius: 5%;margin:auto;margin-top:20px;"></span>
        <div class="container">
            <div class="ag-format-container">
                <div class="ag-courses_box">
                    <div class="ag-courses_item">
                        <a href="#" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                UI/Web&amp;Graph designand UI & UX
                            </div>
                        </a>
                    </div>
                    <div class="ag-courses_item">
                        <a href="#" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                UI/Web&amp;programming for WEB or APP
                            </div>


                        </a>
                    </div>
                    <div class="ag-courses_item">
                        <a href="#" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                UI/Web&amp;megtronics for Robotes and internet of things
                            </div>


                        </a>
                    </div>
                    <div class="ag-courses_item">
                        <a href="#" class="ag-courses-item_link ">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                UI/Web&amp;mechanical enginering for cars and mechic
                            </div>


                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- about collage -->
    <section class="container mt-5 mb-5 p-0 ">
        <h2 class="text-center"> About Collage </h2>
        <span
            style="background-color:#6f42c1; width:600px ;height:4px; display: block; border-radius: 5%;margin:auto;margin-top:20px;"></span>
        <div class="row w-100 mt-5" style="height: 400px;">
            <div class="col">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/University-of-Alabama-EngineeringResearchCenter-01.jpg/220px-University-of-Alabama-EngineeringResearchCenter-01.jpg"
                    class="w-100 h-100">

            </div>
            <div class="col row justify-content-start align-items-center">
                <div class="col">
                    <h4>C.R.S collage </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et itaque, ex tenetur atque quas quod.
                        Fugiat similique ducimus quasi, atque assumenda doloribus. Veniam eum consectetur deserunt omnis
                        voluptates hic pariatur. Lorem ipsum dolor sit amet consectetur,Lorem, ipsum dolor sit amet
                        consectetur adipisicing elit. Quia ipsam sit, nostrum voluptatem in harum consectetur excepturi
                        esse quo libero dolorum mollitia atque doloremque eum aspernatur iusto molestiae praesentium
                        facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum beatae voluptates soluta
                        reprehenderit saepe, minima repellendus eius quidem! At itaque consequuntur dolor voluptatum
                        tenetur repellendus doloremque consequatur eos omnis necessitatibus. adipisicing elit. Nostrum
                        labore fugiat soluta pariatur obcaecati ad error reprehenderit veniam autem quidem similique
                        dicta nulla, suscipit laboriosam corrupti beatae assumenda inventore tempora. Lorem ipsum dolor,
                        sit amet consectetur adipisicing elit. Modi nihil sint tenetur voluptatibus. Ut rerum ducimus
                        illum velit excepturi suscipit provident, inventore alias, aut vel itaque incidunt quam
                        similique veniam! </p>

                </div>


            </div>
        </div>
    </section>
    <!-- unversity in number -->
    <section class="container mt-5 p-0 four position-relative" style="height: 670px">
        <h2 class="text-center " style="margin-top: 150px;">unversity in number </h2>
        <span style="background-color:#6f42c1; width:600px ;height:4px; display: block; border-radius: 5%;margin:auto;margin-top:20px;"></span>
        <div class="row justify-content-evenly row-cols-4  "style="margin-top:15%">
            <div class="col text-light text-center p-3 rounded-5 " style="background-color: #6f42c1;">
                
                <span class=" fs-3">Undergraduated  </span>
                <div class="text-light text-center p-3 rounded-5 "
                    style="background-image:url('{{asset("asset/images/ST_19.03.15_Undergraduates_Featured-image.webp")}}');height: 200px;  background-size: cover;">
                    <div class="num   fs-1 " data-goal="500" style="margin-top: 20%;">+0</div>
                </div>
               
            </div>
            <div class="col text-light text-center p-3 rounded-5 " style="background-color: #6f42c1;">
                <span class=" fs-3 mb-1">graduated personjs</span>
                <div class="text-light text-center p-3 rounded-5 "
                    style="background-image:url('{{asset("asset/images/person-in-college-or-graduate-school-high-royalty-free-image-1647955477.jpg")}}');height: 200px;  background-size: cover;">
                    <div class="num   fs-1 " data-goal="200" style="margin-top: 20%;"> +0</div>
                </div>
         
                
            </div>
            <div class="col text-light text-center p-3 rounded-5 " style="background-color: #6f42c1;">
                <span class=" fs-3 mb-1">international student</span>
                <div class="text-light text-center p-3 rounded-5 "
                    style="background-image:url('{{asset("asset/images/2023-05-12_commencement_0049-1024x683.jpg")}}');height: 200px;  background-size: cover;">
                    <div class="num   fs-1 " data-goal="100" style="margin-top: 20%;"> +0</div>
                </div>


            </div>



        </div>

    </section>
    <!-- eventes -->
    <div class="container">
        <h2 class="text-center">  Events </h2>
        <span style="background-color:#10437A; width:600px ;height:4px; display: block; border-radius: 5%;margin:auto;margin-top:20px;"></span>
        <div class="row justify-content-center align-content-center mt-5" style="height: 450px;">
            <div class="col w-100 h-100">
                <div class="row w-100 h-50" >
                    <img src="{{asset("asset/images/2023-05-12_commencement_0049-1024x683.jpg")}}" class="w-100 h-100">
                </div>
                <div class="row w-100 h-50 ">
                    <p>Lorem ipsum dolor sit aut suscipit quas delectus accusantium deleniti nam eligendi exercitationem ipsum, quidem officiis accusamus recusandae, ad itaque qui eveniet non dolorem! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo inventore aliquam facere nulla nam impedit! Tenetur consequuntur voluptate possimus nesciunt laborum alias, ut architecto aliquam? Voluptas itaque molestias placeat fugiat?</p>
                </div>
                
            </div>
            <div class="col w-100 h-100">
                <div class="row h-50 w-100">
                    <div class="col"><img src="{{asset("asset/images/person-in-college-or-graduate-school-high-royalty-free-image-1647955477.jpg")}}" class="w-100 h-75"></div>
                    <div class="col"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem fugit eveniet rerum amet distinctio sint fuga doloribus quos asperiores repellendus minus qui expedita, praesentium quia officiis, dolore ex ipsam vero!</p></div>
                </div>
                <div class="row h-50 w-100 ">
                    <div class="col"><img src="{{asset("asset/images/ST_19.03.15_Undergraduates_Featured-image.webp")}}" class="w-100 h-75"></div>
                    <div class="col"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem fugit eveniet rerum amet distinctio sint fuga doloribus quos asperiores repellendus minus qui expedita, praesentium quia officiis, dolore ex ipsam vero!</p></div>
                </div>
                

            </div>
        </div>
    </div>
    
@endsection


@section('competions')
    
<script src="{{asset("asset/js/java.js")}}"></script>
@endsection

  
    

















  
        



