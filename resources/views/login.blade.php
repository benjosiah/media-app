@extends('layout.main')
@section('content')
<div class="m-auto w-2/3 text-center mt-20">
  <form action="{{route('post.login')}}" method="post">
    @csrf
    <div class="p-2 w-2/3 m-auto"> 
        <label for="email">Email</label>
    </div>
    <div class="p-2 w-2/3 m-auto">
        <input class="border-solid border-2 focus:outline-none h-9" type="email" id="email" name="email" required >
    </div>
    <div class="p-2 w-2/3 m-auto">
        <label for="password">Password</label>
    </div>
    <div class="p-2 w-2/3 m-auto">
        <input class="border-solid border-2 focus:outline-none h-9" type="password" id="password" name="password" required>
    </div>
    <div class="p-2 w-2/3 m-auto">
        <button class="border bg-green-500 rounded-md focus:outline-none px-4" type="submit">
        Login
        </button>
    </div>
  </form>
  <hr>
  <div class="flex flex-wrap items-center justify-around w-2/3 m-auto p-3">
    <p class="m-1"> 
        Forgotten password?
    </p>
    <a href="/register">
        <button class="border m-2 bg-blue-500 rounded-md focus:outline-none py-1 px-4" type="submit">
            Sign Up
        </button>
    </a>
  
  </div>
</div>
@endsection