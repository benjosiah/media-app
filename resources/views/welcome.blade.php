@extends('layout.main')
@section('content')


<div class="flex flex-wrap w-11/12 m-auto mt-20   ">
@foreach($videos as $video)
    <div class=" w-72 h-72 border m-2">
        <video src="{{route('video',['video_name'=>$video->file])}}" controls class="w-full h-full">
    </div>
@endforeach
</div>
@endsection