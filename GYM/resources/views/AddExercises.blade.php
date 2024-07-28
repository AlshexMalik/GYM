@extends('layout.collection')
@section('content')

<x-guest-layout>
 <div class="container wow slideInLeft ">
    <form method="POST" action="{{route('add_exercises')}}" enctype="multipart/form-data"> 
      @CSRF 
        <div class="mb-6">
          <label for="Name Exercises" class="block   text-sm font-medium text-gray-900 dark:text-white"> Name Exercises</label>
          <input name="name" type="text" id="Name_Exercises" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-6">
          <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Photo</label>
          <input name="photo"  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500" id="file_input" type="file" required>
        </div>        
        <div class="mb-6">
          <label for="details" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> details</label>
          <input name="details"  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500" id="file_input" type="text" required>
        </div>
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
        
        <div class="mb-6">
          <select name="primary" id="Primary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose a Muscle</option>
            <option value="Shoulder">Shoulder</option>
            <option value="Triceps">Triceps</option>
            <option value="Biceps">Biceps</option>
            <option value="Back">Back</option>
            <option value="Chest">Chest</option>
            <option value="Leg">Leg</option>
            <option value="Belly">Belly</option>
          </select>
        </div>
        <div class="mb-6">
          <label for="assist_Muscle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Assist Muscle 1</label>
          <input name="assist1" type="text" id="assist_Muscle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-6">
          <label for="assist_Muscle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Assist Muscle 2</label>
          <input name="assist2" type="text" id="assist_Muscle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
 
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">Add</x-primary-button>
        </div> 
      </form>      
 
</div>
</x-guest-layout>

@endsection