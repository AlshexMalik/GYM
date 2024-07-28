@extends('layout.collection')
@section('content')
    
<x-guest-layout>
    <form class="forms-sample wow slideInLeft  wow slideInLeft" method="POST" action="{{route('agentupdate.password')}}"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="old_password" class="form-label">Old Password</label>
          <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Old-Password">
        </div>
        <div class="mb-3">
          <label for="new_password" class="form-label">New Password</label>
          <input type="password" name="new_password" class="form-control" id="new_password"  placeholder="New-Password">
        </div>
        <div class="mb-3">
          <label for="re_new" class="form-label">Repeat New Password</label>
          <input type="password" name="re_new" class="form-control" id="re_new"  placeholder="Repeat-New-Password">
        </div>
        
        <button type="submit" class="submitebtn btn me-2">Submit</button>
      </form>
</x-guest-layout>
 
 
<style>
 
    .submitebtn{
        background-color: #c11325;
        color :white;
    }
</style>
@endsection