@extends('layouts.app')
@section('content')
<!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
      
  <form action="{{route('idstore')}}" class="space-y-8 divide-y divide-gray-200">
    @csrf
    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
      <div>
        <div>
          <h3 class="text-lg leading-6 font-medium text-gray-900">
            Profile
          </h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Please enter your id Card details below
          </p>
        </div>
        

      <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
       
        <div class="space-y-6 sm:space-y-5">
          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
              Names
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <input type="text" name="name" id="name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="regNo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
              Reg No.
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <input type="text" name="regNo" id="regNo" autocomplete="family-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
             Universuty Email address
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="course" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
              Course
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <select id="country" name="course" autocomplete="course" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                <option>MBChB</option>
                <option>BBA</option>
                <option>LLB</option>
              </select>
            </div>
          </div>

          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="nationality" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
              Nationality
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <input type="text" name="nationality" id="nationality" autocomplete="nationality" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="dob" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
              Date of Birth
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <input type="text" name="dob" id="dob" autocomplete="address-level2" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="tel" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
              tel/whatsapp
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <input type="text" name="tel" id="tel" autocomplete="address-level1" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

          {{-- studentId --}}
          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="studentId" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
              studentId
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <input type="text" name="studentId" id="studentId" autocomplete="address-level1" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>
          
        </div>
      </div>

     
    </div>

    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Save
      </button>
    </div>
  </form>

    </div>
  </div>
@endsection