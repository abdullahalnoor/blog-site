<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index',[
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count = Category::all()->count();
        // dd($count);
        if($count == 0){
            Session::flash('message','Befor creating post you must create category...');
            return redirect()->route('category.create');
        }
        return view('admin.post.create')
        ->with('categories',Category::all())
        ->with('tags',Tag::all())
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'featured' => 'required',
            'category_id' => 'required',
        ]);
        

        $featured = $request->featured;
        $image = time().$featured->getClientOriginalName();

        $featured->move('uploads/posts',$image);

        $post = Post::create([
            'title' => $request->title,
            'slug' => str_slug($request->title),
            'content' => $request->content,
            'featured' => 'uploads/posts/'.$image,
            'category_id' => $request->category_id,
        ]);
        $post->tags()->attach($request->tags);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
         return view('admin.post.edit',[
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $post = Post::find($request->id);
         if($request->hasFile('featured')){
            @unlink($post->featured);
            $featured = $request->featured;
            $image = time().$featured->getClientOriginalName();

            $featured->move('uploads/posts',$image);
            $post->featured = 'uploads/posts/'.$image;
         }

       
           $post->title = $request->title;
            $post->slug = str_slug($request->title);
            $post->content = $request->content;
            $post->category_id  = $request->category_id;
             $post->save();

             $post->tags()->sync($request->tags);
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return back();
    }

    public function trashed(){
        $posts = Post::onlyTrashed()->get();
         return view('admin.post.trash',[
            'posts' => $posts
        ]);
    
    }


    public function hardDelete($id){
            $post = Post::withTrashed()->where('id',$id)->first();
            $post->forceDelete();
            return back();
    }
    public function restore($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        return back();
    }



}
