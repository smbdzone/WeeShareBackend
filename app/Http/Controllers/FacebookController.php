<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function login(){
        return Socialite::driver('facebook')->scopes([
          "public_profile, pages_show_list", "pages_read_engagement", "pages_manage_posts", "pages_manage_metadata", "user_videos", "user_posts"
      ])->redirect();
         
      }
  
      public function rollback(){
          $auth_user = Socialite::driver('facebook')->user();
          
          print_r($auth_user);
      }
}
