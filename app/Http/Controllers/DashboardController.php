<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
class DashboardController extends Controller
{
    //
    public function __construct()
    {
    
        
    }

    public function index(){
        if(!Auth::user()->complate){
            return redirect('/step');
        }

        $data['posts'] = Post::select('post_on','date')->where('user_id',auth()->id())->get();
       
        return view('dashboard.index',$data);
    }
}
