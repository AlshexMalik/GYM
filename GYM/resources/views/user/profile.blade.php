@extends('layout.collection')
@section('content')

<section style="background-color: #F3F4F6;" class="mt-5 " >
     <div class="container py-5  ">
       <div class="row">
         <div class="col">
         </div>
       </div>
       <div class="row">
         <div class="col-lg-4 box wow slideInLeft">
           <div class="card mb-4 shadow">
             <div class="card-body text-center">
               <img  src="{{(!empty($user->photo)) ? 
                    url('upload/userprofile/'.$user->photo) : url('upload\no_image.jpg')}}" alt="avatar"
                 class="rounded-circle img-fluid mx-auto" style="width: 150px;">
               <h5 class="my-3 " style="color:#c11325;">{{$user->username}}</h5>
               <p class="text-muted mb-1">{{$user->firstname}} {{$user->midlename}}</p>
             </div>
           </div>
           <div class="card mb-4 mb-lg-0  shadow">
             <div class="card-body p-0">
               <ul class="list-group list-group-flush rounded-3">
               <a href="{{route('requist.course')}}" class="hover list-group-item d-flex justify-content-between align-items-center p-3">Requist New Course 
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#c11325" class="bi bi-send-plus-fill" viewBox="0 0 16 16">
                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                    <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
                  </svg>
                </a> 
                <a href="{{route('user.update.profile')}}"class="hover list-group-item d-flex justify-content-between align-items-center p-3">Update Information 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#c11325" class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </a>
                <a class="hover list-group-item d-flex justify-content-between align-items-center p-3" href="{{route('update.password')}}">Update Password
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#c11325" class="bi bi-key" viewBox="0 0 16 16">
                      <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                      <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                </a>
               </ul>
             </div>
           </div>
         </div>
         <div class="col-lg-8 box wow slideInRight">
           <div class="card mb-4 shadow">
             <div class="card-body">
               <div class="row">
                 <div class="col-sm-3">
                   <p class="mb-0">Full Name</p>
                 </div>
                 <div class="col-sm-9">
                   <p class="text-muted red-text mb-0">{{$user->firstname}} {{$user->midlename}}</p>
                 </div>
               </div>
               <hr>
               <div class="row">
                 <div class="col-sm-3">
                   <p class="mb-0">User ID</p>
                 </div>
                 <div class="col-sm-9">
                   <p class="text-muted red-text mb-0">{{$user->id}}</p>
                 </div>
               </div>
               <hr>
               <div class="row">
                 <div class="col-sm-3">
                   <p class="mb-0">Email</p>
                 </div>
                 <div class="col-sm-9">
                   <p class="text-muted red-text mb-0">{{$user->email}}</p>
                 </div>
               </div>
               <hr>
               <div class="row">
                 <div class="col-sm-3">
                   <p class="mb-0">Phone</p>
                 </div>
                 <div class="col-sm-9">
                   <p class="text-muted red-text mb-0">{{$user->phone}}</p>
                 </div>
               </div>
               <hr>
               <div class="row">
                 <div class="col-sm-3">
                   <p class="mb-0">First Hight</p>
                 </div>
                 <div class="col-sm-9">
                   <p class="text-muted red-text mb-0">{{$user->hight}}</p>
                 </div>
               </div>
               <hr>
               <div class="row">
                 <div class="col-sm-3">
                   <p class="mb-0">First Wieght</p>
                 </div>
                 <div class="col-sm-9">
                   <p class="text-muted red-text mb-0">{{$user->wieght}}</p>
                 </div>
               </div>
               <hr>
               <div class="row">
                 <div class="col-sm-3">
                   <p class="mb-0">Address</p>
                 </div>
                 <div class="col-sm-9">
                   <p class="text-muted red-text mb-0">{{$user->address}}</p>
                 </div>
               </div>
             </div>
           </div>
           <div class="row bg-white shadow m-1  p-3">
                <table class="bg-white table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name Exercises</th>
                      <th scope="col">Repeat</th>
                      <th scope="col">Primary Muscle</th>
                      <th scope="col">Assist Muscle</th>
                      <th class="text-center" scope="col">Photo</th>
                      <th scope="col">Day</th>
                       
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $x = 1;
                    @endphp
                    @foreach ($results as $data)
                        
                    
                    <tr>
                      <th scope="row">{{$x++}}</th>
                      <td >{{$data->name}}</td>
                      <td >{{$data->repetion}}</td>
                      <td >{{$data->pri}}</td>
                      <td >{{$data->ass}}</td>
                      <td > <img  src="{{(!empty($data->photo)) ? 
                        url('upload/exercises/'.$data->photo) : url('upload\no_image.jpg')}}" alt="avatar"
                     class="  img-fluid mx-auto" style="width: 100px;margin-bottom:10px;"></td>
                     <td >{{$data->day}}</td>
                    @endforeach
                    </tbody>
                </table>
           </div>
         </div>
       </div>
     </div>
   </section>
   <style>
    .hover:hover{
      background-color: #c11325;
      color: white;
    }
    .red-text{
      color: #c11325 !important;
    }
   </style>
@endsection