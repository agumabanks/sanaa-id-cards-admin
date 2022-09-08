@extends('layouts.app')
@section('content')
am list
<div class="p-12 max-w-2xl mx-auto m-8 bg-slate-200 rounded-md">
  
     <div class="m-2 p-2">
        
           
            


            <div class="overflow-x-auto"> 
                <table class="table"> 
                    <thead class="table-dark">
                        <tr>
                            <th class="whitespace-nowrap">#</th>
                            <th class="whitespace-nowrap">First Name</th>
                            <th class="whitespace-nowrap">Last Name</th>
                            <th class="whitespace-nowrap">Username</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->title}}</td>
                            <td><div class="m-2 p-2">
                                <img alt="$post->title" class="w-6" src="{{asset($post->photo_path)}}">
                                {{-- <img src="{{asset($post->photo_path)}}" alt=""> --}}
                            </div></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
                
            </div> 
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">IMAGES</th>
                            <th class="whitespace-nowrap">NAME</th>
                            <th class="text-center whitespace-nowrap">nationality</th>
                            <th class="text-center whitespace-nowrap">STATUS</th>
                            <th class="text-center whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="Uploaded at 8 December 2022">
                                    </div>
                                    
                                </div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{$post->title}}</a> 
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$post->nationalityId}}</div>
                            </td>
                            <td class="text-center">{{$post->tel}}</td>
                            <td class="w-40">
                                <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Printed </div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
       
     </div>
         
     
</div>
@endsection