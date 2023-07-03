<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite; 
use GuzzleHttp\Client;

class InstagramController extends Controller
{
    //
    public function login(){
        return Socialite::driver('instagram')->scopes([
          "user_profile", "user_media", "pages_show_list", "instagram_manage_comments", "instagram_content_publish", "pages_read_engagement", "pages_manage_metadata", "pages_manage_posts"
      ])->redirect();
         
      }
  
      public function rollback(){
          $auth_user = Socialite::driver('instagram')->user();
         // $expiresIn =$auth_user->expiresIn;
          print_r($auth_user);
      }

      public function uploadPost($accessToken="", $caption="", $mediaUrl="")
        {
            $client = new Client();
            $response = $client->request('POST', "https://graph.facebook.com/6047003252094198/media", [
                'headers' => [
                    'Authorization' => "Bearer IGQVJXNUhUc3AxNEwtQ19qTjZAaYmQ1ZAVRLN3c4UThFVzdUazNGaTlXLVRkbl9KdktwNWRpbmdHQlJfNmFvWXZAOVUNPQWdZAZAXpJRE5EZAWZAuR0tBZAW5FUHk4OTVjaWlGNnhpMDdubTZAreEVlVy1tUzQwa2x0VGZAWMzI2UC1v",
                ],
                'multipart' => [
                    [
                        'name' => 'image',
                        'contents' => fopen('https://smb.smbdigitalzone.online/wp-content/uploads/2020/02/yoga-image-03-164x300.jpg', 'r'),
                    ],
                    [
                        'name' => 'caption',
                        'contents' => 'this test content',
                    ],
                ],
            ]);
            dd( $response);
        
            $responseData = json_decode($response->getBody()->getContents());
        
            // Handle the response and perform further actions as needed
        }
}
