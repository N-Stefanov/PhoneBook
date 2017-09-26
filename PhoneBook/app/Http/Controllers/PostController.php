<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  Post::orderBy('Fname','asc')->get();
        return view('posts.index')->with('posts', $posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Fname'=>'required|min:3|max:50',
            'Lname'=>'required|min:3|max:50',
            'Mnumber'=>'required|min:10|max:10',
            'Hnumber'=>'required|min:10|max:10',
        ]);
        
        //Create new Post

        $post = new Post;
        $post->Fname = $request->input('Fname');
        $post->Lname = $request->input('Lname');
        $post->Mnumber = $request->input('Mnumber');
        $post->Hnumber = $request->input('Hnumber');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success', 'Contact Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post = Post::find($id);
       return view('posts.show')->with('posts', $post);
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
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'This is not ur contact');
        }
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Fname'=>'required|min:3|max:50',
            'Lname'=>'required|min:3|max:50',
            'Mnumber'=>'required|min:10|max:10',
            'Hnumber'=>'required|min:10|max:10',
        ]);
        
        //Create new Post

        $post = Post::find($id);
        $post->Fname = $request->input('Fname');
        $post->Lname = $request->input('Lname');
        $post->Mnumber = $request->input('Mnumber');
        $post->Hnumber = $request->input('Hnumber');
        $post->save();

        return redirect('/posts')->with('success', 'Contact Updated');
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
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'This is not ur contact');
        }
        $post -> delete();
        return redirect('/posts')->with('success', 'Contact Removed');
    }
}