<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class UserController extends Controller
{
    public function __construct(){
        return $this->middleware('admin');
    }

    public function inedx(){
        return view('admin.user.index')->with('users',User::all());
    }
    public function create(){
        return view('admin.user.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required',
        ]);

         $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('123456'),
         ]);   
         $profile = Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avaters/avatar.png'
         ]);
         return back();
    }

    public function makeAdmin($id){
        $user = User::find($id);
        $user->admin = 1;
        $user->save();
        return back();
    }
    public function removeAdmin($id){
        $user = User::find($id);
        $user->admin = 0;
        $user->save();
        return back();
    }

}
