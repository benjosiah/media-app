@extends('layout.main')
@section('content')
<div class=" w-full flex flex-wrap justify-around items-center bg-gray-300 m-auto pt-10"  >
    <div class=" flex flex-wrap w-1/2 h-52 justify-start items-center mb-10 ">
        <span class=" w-52 h-52 rounded-full bg-black"></span>
        <span class="md:mx-6 m-auto text-2xl font-bold"> {{Auth::user()->name}} </span>
    </div>
  
   <div class="flex flex-wrap  mt-1">
        <button id="upload" class="border m-2 bg-blue-500 rounded-md focus:outline-none py-1 px-4">
            Upload A video 
        </button>
        <a href="/logout">
            <button id="upload" class="border m-2 bg-red-500 rounded-md focus:outline-none py-1 px-4">
                Logout
            </button>
        </a>
   </div>
</div>

<div class="absolute top-32 right-0 left-1 ml-2 text-center w-96 bg-white border border-black rounded-md py-2 hide" id="form">  
    <div class="w-5 rounded-full top-0 left-0 absolute cursor-pointer hover:bg-gray-300" id="close">x</div>
    <form action="{{route('upload')}}" method="post" enctype="multipart/form-data"> 
        @csrf
<!--  -->
        <div class="p-2 w-2/3 m-auto">
            <input class="border-solid border-2 w-44 focus:outline-none h-9" type="file" accept=".mp4, .oop, .wav, .avi .WebM" id="file" name="file" required>
        </div>

        <div class="p-2 w-2/3 m-auto">
            <input class="border-solid border-2 focus:outline-none h-9" type="text" id="name" name="name" placeholder="Video Name" required>
        </div >
    
        <div class="p-2 w-2/3 m-auto">
            <textarea class="border" name="description" id="description" placeholder="Write A description" cols="20" rows="3"></textarea>
        </div>
        <div>
            <button class="border bg-green-500 rounded-md focus:outline-none py-1 px-4 m-4 mt-2" type="submit">
                Upload
            </button>
        </div>
    </form>
</div>

<hr class="m-auto text-center">
<div class="flex  flex-wrap w-11/12 m-auto mt-20   ">
@foreach(Auth::user()->video as $video)
    <div class=" w-72 h-72 border m-2">
        <video class="w-full h-full" controls>
        <source src="{{route('video',['video_name'=>$video->file])}}" type="video/mp4">
        Your browser does not support the video tag.
        </video>
    </div>
@endforeach
</div>
@endsection