@extends('layout.collection')
@section('content')
    
<x-guest-layout >
    <form class="forms-sample wow slideInLeft" method="POST" action="{{route('send.requist')}}"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <input type="hidden" name="userid" value="{{$user->id}}" class="form-control " id="userid">
          <input type="hidden" name="statuse" value="active" class="form-control " id="userid">
        </div>
        <div class="mb-3">
          <label for="text">Cover Text</label>
          <textarea class="form-control" name="text" id="text" rows="2"></textarea>
        </div>
        <div class="mb-3">
          <label for="hight" class="form-label">Hight</label>
          <input type="number" value="{{$user->hight}}" name="hight" class="form-control" min="0"  id="hight">
        </div>
        <div class="mb-3">
          <label for="wieght" class="form-label">Wieght</label>
          <input type="number" value="{{$user->wieght}}" name="wieght" class="form-control" min="0" id="wieght">
        </div>
        <div class="mb-3">            
          <legend class="text-lg">Select Couch</legend>
          @foreach ($agent as $agent)
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="coach" id="couch" value="{{$agent->id}}">
            <label class="form-check-label">{{$agent->firstname}}</label>
            <img src="{{url('upload/userprofile/'.$agent->photo)}}"
           class="rounded-circle img-fluid mx-auto" style="width: 150px;">
          </div>
          @endforeach
        </div>
        <div class="mb-3">
          <label for="front" class="form-label">Front Photo</label>
          <input id="front" class="block mt-1 w-full " type="file"
          name="up_front" required autofocus autocomplete="photo">
        </div>
        <div class="mb-3">
          <label for="back" class="form-label">Back Photo</label>
          <input id="back" class="block mt-1 w-full " type="file"
          name="up_back" required autofocus autocomplete="photo">
        </div>
        <div class="mb-3">
          <label for="left" class="form-label">Left Photo</label>
          <input id="left" class="block mt-1 w-full " type="file"
          name="up_left" required autofocus autocomplete="photo">
        </div>
        <div class="mb-3">
          <label for="right" class="form-label">Right Photo</label>
          <input id="right" class="block mt-1 w-full " type="file"
          name="up_right" required autofocus autocomplete="photo">
        </div>        
        <div class="mb-3">
          <label for="test" class="form-label">test Photo</label>
          <input id="test" class="block mt-1 w-full " type="file"
          name="test" required autofocus autocomplete="photo">
        </div>        
        <div class="mb-3">
          <label for="test1" class="form-label">test1 Photo</label>
          <input id="test1" class="block mt-1 w-full " type="file"
          name="test1" required autofocus autocomplete="photo">
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