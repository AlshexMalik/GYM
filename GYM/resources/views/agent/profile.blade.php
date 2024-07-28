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

           <div class="red card mb-4 mb-lg-0  shadow    ">
            <div class="card-body p-3">
               <div class="accordian">
                   <div class="accordian-container active">
                       <div class="head">
                           <h4>If You Have Any Requist to New Course Show There</h4>
                           <span class="fa fa-angle-down"></span>
                       </div>
                       <div class="body">
                            @foreach($requist as $requist)
                            <a href="{{url('show/requist/course/'.$requist->cid.'/'.$requist->uid)}}" class="mb-1 requist list-group-item d-flex justify-content-between align-items-center p-1">{{$requist->firstname}} {{$requist->midlename}} 
                             <div class="float-right">
                                <img  src="{{(!empty($requist->photo)) ? 
                                    url('upload/Rusercourseimg/'.$requist->photo) : url('upload\no_image.jpg')}}"
                                 class="rounded-circle img-fluid mx-auto float-right " style="width: 50px;">
                             </div>
                            </a>  
                            @endforeach
                       </div>
                   </div>
               </div>
            </div>
          </div>

           <div class="card mb-4 mb-lg-0 mt-3  shadow">
             <div class="card-body p-0">
               <ul class="list-group list-group-flush rounded-3">  
                <a href="{{route('agent.update.profile')}}"class="hover list-group-item d-flex justify-content-between align-items-center p-3">Update Information 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#c11325" class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </a>
                <a href="{{route('update.agentpassword')}}" class="hover list-group-item d-flex justify-content-between align-items-center p-3" >Update Password
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
           <div class="card mb-4  shadow">
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
           <div class="row bg-white shadow m-3  ">
             <div class="col-md-6">
              <form class="forms-sample mb-5" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">First Name</label>
                  <input type="text" name="name" class="form-control" id="name" value="{{$user->firstname}}">
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">Last Name</label>
                  <input type="text" name="name" class="form-control" id="name" value="{{$user->midlename}}">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="username" value="{{$user->username}}">
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">phone</label>
                  <input type="number" name="phone" class="form-control" value="{{$user->phone}}">
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">address </label>
                  <input type="text" name="address" class="form-control" value="{{$user->address}}">
                </div>
                <div class="mb-3">
                  <label for="photo" class="form-label">photo </label>
                  <input type="file" name="photo" class="form-control" id="image">
                </div>
                <div class="mb-3">
                  <label for="photo" class="form-label"> </label>
                  <img  src="{{(!empty($user->photo)) ? 
                    url('upload/userprofile/'.$user->photo) : url('upload\no_image.jpg')}}" alt="avatar"
                 class="rounded-circle img-fluid mx-auto" style="width: 150px;">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" value="{{$user->email}}">
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
              </form>
             </div>
             <div class="col-md-6">
               <div class="card mb-4 mb-md-0">
                 <div class="card-body">
                   <p class="mb-4"><span class="text-primary font-italic me-1">Rating</span> Project Status
                   </p>
                   <p class="mb-1" style="font-size: .77rem;">GOOd rating</p>
                   <div class="progress rounded" style="height: 5px;">
                     <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                       aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
                   <p class="mt-4 mb-1" style="font-size: .77rem;">number course</p>
                   <div class="progress rounded" style="height: 5px;">
                     <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                       aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
                   <p class="mt-4 mb-1" style="font-size: .77rem;">user like</p>
                   <div class="progress rounded" style="height: 5px;">
                     <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                       aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
                   <p class="mt-4 mb-1" style="font-size: .77rem;">intersted</p>
                   <div class="progress rounded" style="height: 5px;">
                     <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                       aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
                   <p class="mt-4 mb-1" style="font-size: .77rem;">love</p>
                   <div class="progress rounded mb-2" style="height: 5px;">
                     <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                       aria-valuemin="0" aria-valuemax="100"></div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
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

