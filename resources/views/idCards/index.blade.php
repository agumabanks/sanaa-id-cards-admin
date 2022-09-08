{{-- @extends('layouts.app')
@section('content')
am work
<div class="p-12 max-w-2xl mx-auto m-8 bg-slate-200 rounded-md">
    <form method="POST" action="/upload2" enctype="multipart/form-data">
        @csrf
        <div class="m-2 p-2">
            <label >title</label>
            <input type="text" name='title' />
        </div>
        <div class="m-2 p-2">
                <label for="image">image</label>
                <input type="file" name="image"/>
        </div>
        <button type="submit" class="btn btn-primary w-24 mr-1 mb-2">Save</button>
     </form>

     
         
     
</div>
@endsection --}}


@extends('layouts.app')
@section('content')

<!-- add new bunner -->
<div class="p-5">
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Add New bunner</h3>
              <p class="mt-1 text-sm text-gray-600">
                Add your information.
              </p>
            </div>
          </div>
          <div class="mt-5 md:mt-0 md:col-span-2">
            
                <form method="POST" action="/list" enctype="multipart/form-data">
            @csrf  
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                  <div class="grid grid-cols-6 gap-6">
                     <!-- names -->
                     <div class="col-span-6 sm:col-span-3">
                      <label for="name" class="block text-sm font-medium text-gray-700">Names</label>
                      <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
    
    
                       <!-- regNo -->
                       <div class="col-span-6 sm:col-span-3">
                        <label for="regNo" class="block text-sm font-medium text-gray-700">regNo</label>
                        <input type="text" name="regNo" id="regNo" autocomplete="regNo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
    
                   
                    
                   <!-- nationality -->
                   <div class="col-span-6 sm:col-span-3">
                    <label for="nationality" class="block text-sm font-medium text-gray-700">nationality</label>
                    <input type="text" name="nationality" id="nationality" autocomplete="nationality" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </div>
                   
    {{-- studentId --}}
                <div class="col-span-6 sm:col-span-3">
                  <label for="studentId" class="block text-sm font-medium text-gray-700">studentId</label>
                  <input type="text" name="studentId" id="studentId" autocomplete="studentId" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
    
                
               {{-- email --}}
               <div class="col-span-6 sm:col-span-3">
                <label for="email" class="block text-sm font-medium text-gray-700">email</label>
                <input type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div> 
              
               {{-- dob --}}
               <div class="col-span-6 sm:col-span-3">
                <label for="dob" class="block text-sm font-medium text-gray-700">Date of birth</label>
                <input type="text" name="dob" id="dob" autocomplete="dob" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div> 
    
               {{-- telephone --}}
               <div class="col-span-6 sm:col-span-3">
                <label for="tel" class="block text-sm font-medium text-gray-700">Telphone No.</label>
                <input type="text" name="tel" id="tel" autocomplete="tel" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div> 
                    
    <!-- course -->
              <div class="col-span-6 sm:col-span-3">
                <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
                <select id="course" name="course" autocomplete="course" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  {{-- <select id="country" name="course" autocomplete="course" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md"> --}}
                    <option>MBChB</option>
                    <option>BBA</option>
                    <option>LLB</option>
                  </select>
    
                </select>
              </div>
    
        
                    
                    
              </div>
                  <div class="pt-5">
                    <label class="block text-sm font-medium text-gray-700">
                      My photo
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                      <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        
    
                        <div class="px-4 pb-4 mt-5 flex items-center justify-center cursor-pointer relative">
                            <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Upload a file</span> or drag and drop 
                            <input id="image" name="image" type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                        </div>
                        <p class="text-xs text-gray-500">
                          PNG, JPG, and should be a passport photo 
                        </p>
                      </div>
                    </div>
                    
                  </div>
                </div>
                
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="btn btn-primary w-24 mr-1 mb-2">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    
      <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
          <div class="border-t border-gray-200"></div>
        </div>
      </div>
    
     
    
    </div>
     
@endsection

