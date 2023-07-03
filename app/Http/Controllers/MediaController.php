<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    //

    public function index(){
        return view('media.index');
    }

    public function list(){
        return view('media.list');
    }

    public function store(Request $request){
        
        $request->validate([
            'media_img' => 'required|mimes:jpeg,png,jpg,gif',
            'media_content' => 'required',
            'country' => 'required',
            'city' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'post_date' => 'required',
        ]);

     
        $post = new Post;
        $post->user_id = auth()->id(); 
        $post->type = 'image'; 
        $post->media_img = $this->uploadFile( $request->file('media_img')); 
        $post->media_content = $request->media_content; 
        $post->post_on = 'facebook'; 
        $post->country =json_encode($request->country); 
        $post->city = json_encode($request->city); 
        $post->gender = $request->gender; 
        $post->age = $request->age; 
        $post->date = $request->post_date; 
        $post->save();
    }

    protected  function uploadFile($file)
    {
        $file_name = null;

        $new_file_name = time() . '_' . mt_rand() . '_' . $file->getClientOriginalName();
        $file->move('uploads/media', $new_file_name);

        return $new_file_name;
    }
}
