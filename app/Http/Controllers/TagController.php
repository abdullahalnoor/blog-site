<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function create(){
        return view('admin.tag.create');
    }
    public function store(Request $request){
        $tag = new Tag();
        $tag->tag = $request->tag;
        $tag->save();
        return back();
    }
}
