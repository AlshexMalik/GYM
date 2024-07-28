@extends('layout.collection')
@section('content')

<section style="background-color:  #F3F4F6;" class="mt-5 mx-2" >
    <div class="container py-5  ">
      <div class="row">
        <div class="col">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 box wow slideInLeft">
            <div class="row">
                <div class="card mb-2 shadow">
                    <div class="card-body text-center">
                      <img  src="{{(!empty($requist->photo)) ? 
                           url('upload/userprofile/'.$requist->photo) : url('upload\no_image.jpg')}}" alt="avatar"
                        class="rounded-circle img-fluid mx-auto" style="width: 150px;margin-bottom:10px;">
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted red-text mb-0">{{$requist->firstname}} {{$requist->midlename}}</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">User ID</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted red-text mb-0">{{$requist->id}}</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted red-text mb-0">{{$requist->email}}</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted red-text mb-0">{{$requist->phone}}</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">First Hight</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted red-text mb-0">{{$requist->hight}}</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">First Wieght</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted red-text mb-0">{{$requist->wieght}}</p>
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
                    <div class="card mb-2 shadow">
                        <div class="card-body text-center">
                          <a href="{{url('/accept/course/'.$requist->id.'/'.$ccid->ccid)}}" class="btn w-100 btn-outline-danger">Done</a>
                        </div>
                    </div>
                  </div>
             

      </div>
        <div class="col-md-8 box wow slideInRight justify-content-center">
            <table class="bg-white table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name Exercises</th>
                    <th scope="col">Repeat</th>
                    <th scope="col">Muscle</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Day</th>
                    <th scope="col">Action</th>
                     
                  </tr>
                </thead>
                <tbody>
                  @php
                      $x = 1;
                  @endphp
                  @foreach ($data as $data)
                  <tr>
                    <th scope="row">{{$x++}}</th>
                    <td>{{$data->ename}}</td>
                    <td>{{$data->repetion}}</td>
                    <td>{{$data->primary_muscle}}</td>
                    <td> <img  src="{{(!empty($data->ephoto)) ? 
                      url('upload/exercises/'.$data->ephoto) : url('upload\no_image.jpg')}}" alt="avatar"
                   class="  img-fluid mx-auto" style="width: 100px;margin-bottom:10px;"></td>
                    <td>    <form action="{{route('update.cart.user')}}" method="POST">
                            @csrf
                            <input type="number" min="1" max="6" name="day" class="form-control w-25" value="{{$data->day}}" required>
                            <input type="hidden" min="1" max="6" name="cid" class="form-control w-25" value="{{$data->cid}}" required>
                            <input type="hidden" min="1" max="6" name="uid" class="form-control w-25" value="{{$data->uid}}" required>
                            
                           
                    </td>
                    <td>     
                      <button class="btn w-100 btn-outline-danger">Update </button></form>
                    </form>
                        
                    </td>
 
                  @endforeach
                
                </tbody>
              </table>

              
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


  @endsection