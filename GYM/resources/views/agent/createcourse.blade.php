@extends('layout.collection')
@section('content')
@php
use App\Http\Controllers\agentcontroller;
@endphp
@foreach ($requist as $requist)
    

<section style="background-color: #F3F4F6;" class="mt-5 " >
    <div class="container py-5  ">
        <div class="row">
            <div class="col-md-4 box wow slideInLeft">
                <div class="row">
                    <div class="card mb-2 shadow">
                        <div class="card-body text-center">
                          <img  src="{{(!empty($requist->photo)) ? 
                               url('upload/userprofile/'.$requist->photo) : url('upload\no_image.jpg')}}" alt="avatar"
                            class="rounded-circle img-fluid mx-auto" style="width: 150px;">
                          <p class="text-muted mb-1">{{$requist->firstname}} {{$requist->midlename}}</p>
                          <h5 class="my-3 " style="color:#c11325;">{{$requist->email}}</h5>
                          <h5 class="my-3 " style="color:#c11325;">{{$requist->phone}}</h5>
                          <h5 class="my-3 border" style="color:#c11325;"> <span style="color: #29191a !important">Current Hight </span>{{$requist->chight}} CM</h5>
                          <h5 class="my-3 border" style="color:#c11325;"> <span style="color: #29191a !important">Current Wieght    </span>{{$requist->cwieght}} KG</h5>
                        </div>
                      </div>
                </div>
                <div class="row">
                  <div class="card mb-2  shadow">
                    <div class="card-body">
                      <div class="row">
                        
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Cover Text</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-capitalize text-muted red-text mb-0">{{$requist->cover_text}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="card mb-3  shadow">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">First Hight</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted red-text mb-0">{{$requist->uhight}}</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">First Wieght</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted red-text mb-0">{{$requist->uwieght}}</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted red-text mb-0">{{$requist->address}}</p>
                            </div>
                          </div>
                    </div>
                </div> 
                </div>
                <div class="row">
                  <div class="card mb-2  shadow">
                    <div class="card-body">
                      <div class="row">
                        
                      </div>
                      <div class="row">
                          <a href="{{url('/see/user/cart/'.$requist->uid.'/'.$requist->coach)}}" class="submitebtn btn me-2 btn btn-outline-danger">See Cart Player</a>
                      </div>
                    </div>
                  </div>
                </div>
   
            </div> 
            <div class="col-md-8 box wow slideInRight">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3 shadow">
                          <div class="card-body text-center">
                            <img  src="{{(!empty($requist->up_back)) ? 
                                 url('upload/Rusercourseimg/'.$requist->up_back) : url('upload\no_image.jpg')}}" alt="avatar"
                              class="w-full img-fluid mx-auto" style=" height:350px; ">
                            <h5 class="my-3 " style="color:#c11325;">Uper Back</h5>
                            <p class="text-muted mb-1"></p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 shadow">
                          <div class="card-body text-center">
                            <img  src="{{(!empty($requist->up_left)) ? 
                                 url('upload/Rusercourseimg/'.$requist->up_left) : url('upload\no_image.jpg')}}" alt="avatar"
                              class="w-full img-fluid mx-auto" style=" height:350px; ">
                            <h5 class="my-3 " style="color:#c11325;">Uper Left</h5>
                            <p class="text-muted mb-1"></p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 shadow">
                          <div class="card-body text-center">
                            <img  src="{{(!empty($requist->up_right)) ? 
                                 url('upload/Rusercourseimg/'.$requist->up_right) : url('upload\no_image.jpg')}}" alt="avatar"
                              class="w-full img-fluid mx-auto" style=" height:350px; ">
                            <h5 class="my-3 " style="color:#c11325;">Uper Right</h5>
                            <p class="text-muted mb-1"></p>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3 shadow">
                          <div class="card-body text-center">
                            <img  src="{{(!empty($requist->do_front)) ? 
                                 url('upload/Rusercourseimg/'.$requist->do_front) : url('upload\no_image.jpg')}}" alt="avatar"
                              class="w-full img-fluid mx-auto" style=" height:350px; ">
                            <h5 class="my-3 " style="color:#c11325;">down Front</h5>
                            <p class="text-muted mb-1"></p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 shadow">
                          <div class="card-body text-center">
                            <img  src="{{(!empty($requist->do_back)) ? 
                                 url('upload/Rusercourseimg/'.$requist->do_back) : url('upload\no_image.jpg')}}" alt="avatar"
                              class="w-full img-fluid mx-auto" style=" height:350px; ">
                            <h5 class="my-3 " style="color:#c11325;">down back</h5>
                            <p class="text-muted mb-1"></p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 shadow">
                          <div class="card-body text-center">
                            <img  src="{{(!empty($requist->up_front)) ? 
                                 url('upload/Rusercourseimg/'.$requist->up_front) : url('upload\no_image.jpg')}}" alt="avatar"
                              class="w-full img-fluid mx-auto" style="height:350px; ">
                            <h5 class="my-3 " style="color:#c11325;">Uper Front</h5>
                            <p class="text-muted mb-1"></p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row mt-5">
          <h1 class="h1 text-danger text-center">Exercises</h1>
          <hr>
        </div>

        </div>
    </div> 
    <div class="row flex justify-center">     
      <div class="row flex justify-center">
      @php
        $x = 1;
  
      @endphp
      
        @foreach ($exercises as $index)
        @php
        
            if ($x < 5){
                $style ="slideInLeft";
            } elseif ($x > 4 && $x < 9) {
                $style ="slideInRight";   
            }else{
                $x = 1;
                $style ="slideInLeft";  
            }
            $x++;    
        @endphp
          <div class="max-w-sm rounded overflow-hidden shadow-lg m-3 wow {{$style}} ">
            <img class="w-full" src="{{asset('upload/exercises/'.$index->photo)}} " alt="Sunset in the mountains">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2 text-danger">{{$index['name']}}</div>
              <p class="text-gray-700 text-base"> {{$index['details']}}</p>
            </div>
            <?php 
             
              $check = agentcontroller::check($requist->uid ,$index->id , $requist->coach);
              if ($check ==  0 ) {
              ?>
            <form action="{{route('add.exercises.user')}}" method="POST">
              @CSRF
              <input type="hidden" name="requist_id" value="{{ $_SESSION["rid"]}}">
              <input type="hidden" name="user_id" value="{{$requist->uid}}">
              <input type="hidden" name="cccid" value="{{$requist->cccid}}">
              <input type="hidden" name="exercis_id" value="{{$index->id}}">
              <input type="hidden" name="couch_id" value="{{$requist->coach}}">
            <div class="flex justify-center">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="repetion" id="inlineRadio1" required value="12-10-10-8">
              <label class="form-check-label" for="inlineRadio1">12-10-10-8</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="repetion" id="inlineRadio2" required value="15-12-10">
              <label class="form-check-label" for="inlineRadio2">15-12-10</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="repetion" id="inlineRadio3" required value="15-15-15">
              <label class="form-check-label" for="inlineRadio3">15-15-15</label>
            </div>
            </div>
            <div class="px-6 pt-4 pb-2">
              <div class="d-grid gap-2">
                 
                <button type="submit" class="submitebtn btn me-2 btn btn-outline-danger">ADDED</button>
              </div>
            </div>
          </form>
              <?php
              }else{
                ?>
                            <div class="flex justify-center mb-6">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="repetion" id="inlineRadio1" disabled value="12-10-10-8">
                                <label class="form-check-label" for="inlineRadio1">12-10-10-8</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="repetion" id="inlineRadio2" disabled value="15-12-10">
                                <label class="form-check-label" for="inlineRadio2">15-12-10</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="repetion" id="inlineRadio3" disabled value="15-15-15">
                                <label class="form-check-label" for="inlineRadio3">15-15-15</label>
                              </div>
                              </div>
                <a href="{{url('/remove/excercis/user/cart/'.$requist->uid.'/'.$index->id.'/'.$requist->coach.'/'.$_SESSION["rid"])}}" class="flex justify-center  btn me-2 btn btn-outline-secondary">Remove In Cart User </a>
                <?php
              }
            ?>


          </div>
        @endforeach
    </div>

    </div>  
    
    </div>
</section>
   <style>
    .hover:hover ,.hover:hover .icon, .red{
      background-color: #c11325;
      color: white;
      fill: #F3F4F6 !important;
    }
    .requist:hover{
      background-color: #29191a;
      color: white;
    }
    .white{
        background-color: #F3F4F6;
    }
    .red-text{
      color: #c11325 !important;
    }
   </style>
   @endforeach
@endsection

