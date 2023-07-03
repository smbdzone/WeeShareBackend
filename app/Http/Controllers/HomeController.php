<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       return view('home.index');
    }

    public function account_type()
    {
       return view('home.account-type');
    }

    public function register()
    {
       return view('home.register');
    }

    public function privacy_policy(){
         return view('home.privacy_policy');
    }

   public function term_conduction()
   {
      return view('home.term_conduction');
   }

   public function cookies_policy()
   {
      return view('home.cookies_policy');
   }

   public function disclaimer()
   {
      return view('home.privacy_policy');
   }
 
   public function package(){
      return view('home.package');
   }
    
    public function firstStep(){
         return view('home.first_step');
      }

      public function firstStepUpdate(Request $request){
       $request->validate([
            'company' => 'required|unique:users',
            'industry' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);
         $user = User::find($request->user_id);
         $user->company = $request->company;
         $user->other_company = $request->other_company;
         $user->industry = $request->industry;
         $user->country = $request->country;
         $user->country = $request->city;
         $user->tax_number = $request->tax_number;
         $user->complate = 1;
         $user->save();

         return redirect('/dashboard');

      }
}
