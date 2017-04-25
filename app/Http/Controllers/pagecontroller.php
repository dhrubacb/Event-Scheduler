<?php

namespace App\Http\Controllers;


use Carbon\Carbon;


use Input;
use App\User;
use App\Blog;
use App\message;
use Validator;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Response;
use App\Http\Controllers\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;




class pagecontroller extends Controller
{
   
    public function home()
    {
        return view('project.home');
       // return Redirect::to('home');
    }

    public function login()
    {
        return view('project.login');
    }

    public function register()
    {
        return view('project.register');
    }


    public function test()
    {
        return view('project.test');
        
    }

    public function blog_writing(){

        return view('project.blog_writing');
    }


    public function blog_store(Request $request){
       

              $data = new Blog();
             // $data1 = Input::all();

              setlocale(LC_TIME, '');
              $dt = carbon::now();

              $data->blog       = Input::get('blog_detail');
              $data->blog_title = Input::get('blog_title');
              $data->email      = session('email');
              $data->upvote     = 9;
              $data->downvote   = 9;
              $data->created_date = $dt->formatLocalized('%A %d %B %Y');

        $data->save();

        session(['last_blog' => $data->blog ]);

        return view('project.blog_list');
 }


    public function messagestore(Request $request){

     $data = new message();
     $image = User::where('email', '=', session('email'))->first(['imagename']);


                 setlocale(LC_TIME, '');
                 $dt = carbon::now(); 

                 $data->receiver = $request->email;
                 $data->sender = session('email');
                 $data->message = $request->message;
                 $data->imagename = $image->imagename ; 
                 $data->sending_date = $dt->formatLocalized('%A %d %B %Y');

     $data->save();
     return $data->sending_date ;  

    }


    public function userabout(){

        return view('project.userabout');
    }



     public function message_show(){

        $data = message::where('receiver', '=', session('email'))
                          ->get(['message', 'sender' , 'imagename','sending_date']);

   
   

        return view('project.message')->with('data' , $data);
    }


    

    public function blog_list(Request $request){


       $blog = Blog::where('email', '=' , session('email'))->get([   'id', 'blog_title', 'blog' , 'upvote' , 'downvote', 'created_date']);

       
       return view('project.blog_list')->with('blog' , $blog);


    }

    public function single_blog($id){

       $data = Blog::where('email', '=' , session('email'))
                    ->where('id', '=' , $id)
                    ->first(['blog_title','blog']) ;

        session(['blog_title' => $data->blog_title]);
        session(['blog_detail' => $data->blog]);
        session(['created_date' => $data->created_date]);


       
       return view('project.single_blog');


    }



    public function usercontact(){

        return view('project.usercontact');
    }



        public function video(){

        return view('project.video');
    }

   
        public function activity(){

        return view('project.activity');
    }


     public function profile(){

        return view('project.profile');
    }

}
    //   return response()->json(array('sms' => 'saved successfully'));
        // return Response::json(Request::all());
   // }

      // return response()->json(('project.userhome'));
       
