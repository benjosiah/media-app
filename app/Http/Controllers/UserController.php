<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function register(Request $request){
        $this->validate($request,[
            'email'=>'email|required|unique:users',
            'name'=> 'required',
            'password'=>'required|min:4'
        ]);
        
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        if($user->save()){
            Auth::login($user);
            return redirect()->route('welcome');
        }else {
            return redirect()->back();
        }

    }

    public function login(Request $request){
        if(Auth::attempt(['email'=> $request['email'], 'password'=> $request['password']])){
            return redirect()->route('welcome');
        }
        return redirect()->back();
        
    }

    public function upload(Request $request){
        $post = new Video();
        $post->name = $request['name'];
        $post->user_id= Auth::user()->id;
        $post->description= $request['description'];
        $video=$request->file('file');
        $ext=$request->file('file')->extension();
        $vid_name='VID'. uniqid('_',true).'.'.$ext;
        if ($video) {
            $store=Storage::disk('local')->put($vid_name, File::get($video));
            if ($store) {
                $post->file= $vid_name;
                $post->save();
                return redirect()->back();
            }
        }
    }

    public function Getfile($image_name)
    {
        $image=Storage::disk('local')->get($image_name);
        $response = new Response($image, 200);  
        $response->header('Content-Type', 'video/mp4');
        return $response;  
        
        
    }

    public function logout()
    {
        Auth::logout();
           
    }
}
