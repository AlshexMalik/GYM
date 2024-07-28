@extends('layout.collection')
@section('content')
    
<x-guest-layout >
    <form class="forms-sample wow slideInLeft" method="POST" action="{{route('update.agentprofile')}}"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">First Name</label>
          <input type="text" name="firstname" class="form-control" id="name" value="{{$user->firstname}}">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Last Name</label>
          <input type="text" name="midlename" class="form-control" id="name" value="{{$user->midlename}}">
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
        <button type="submit" class="submitebtn btn me-2">Submit</button>
      </form>
</x-guest-layout>
 
<div class="footerdiv">

</div>
<style>
    .footerdiv{
        background-color: #F3F4F6;
        height: 100px;
    }
    .submitebtn{
        background-color: #c11325;
        color :white;
    }
</style>
@endsection