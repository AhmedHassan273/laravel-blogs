<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;

use App\Post;

class PostsController extends Controller
{
    
    public function __construct() {

        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
    **/
    public function store() {
        
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
        
        if(request()->hasFile('image')) {
            $post_thumbnail = request()->file('image');
            $filename = time() . '.' . $post_thumbnail->getClientOriginalExtension();
            
            Image::make($post_thumbnail)->save(public_path('uploads\\' . $filename));

            auth()->user()->publish(
                new Post([
                    'title' => request('title'),
                    'body' => request('body'),
                    'image' => $filename
                ])
            );
        }

        return redirect()->home();
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

        return view('posts.show', compact('post'));
    }
}