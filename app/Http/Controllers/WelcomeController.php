<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;

class WelcomeController extends Controller
{
    public function index(){
        return view('frontend.home.index')->with('title',Setting::first()->site_name)
                ->with('categories',Category::take(4)->get())
                ->with('first_post',Post::orderBy('created_at','desc')->take(1)->first())
                ->with('second_post',Post::orderBy('created_at','desc')->skip(1)->take(2)->get());
    }

     public function detailPaage($id){

        $post = Post::find($id);
        $next_id = Post::where('id','<',$post->id)->min('id');
        $prev_id = Post::where('id','>',$post->id)->max('id');

        return view('frontend.single.index')->with('title',Setting::first()     ->site_name)
        ->with('categories',Category::take(4)->get())
        ->with('post',$post)
        ->with('next',Post::find($next_id))
        ->with('prev',Post::find($prev_id));
               
    }



}
