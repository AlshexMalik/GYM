@extends('layout.collection')
@section('content')
<br><br><br><br><br>
<div class="row flex justify-center">
<form action="search" method="POST">
    <input type="text">
    <button type="submit"></button>
</form>
    
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
<div class="max-w-sm rounded overflow-hidden shadow-lg m-3 wow {{$style}}">
    <img class="w-full" src="{{asset('upload/exercises/'.$index->photo)}} " alt="Sunset in the mountains">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2 text-danger">{{$index['name']}}</div>
      <p class="text-gray-700 text-base">{{$index['details']}}</p>
    </div>
    <div class="px-6 pt-4 pb-2">
      <span class="text-danger inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$index['primary_muscle']}}</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$index['assist_muscle_1']}}</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$index['assist_muscle_2']}}</span>
    </div>
</div>
@endforeach
</div>
<br><br><br>
 @endsection