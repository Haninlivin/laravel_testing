<?php

namespace App\Http\Controllers;

use view;
use App\Models\Post;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\showPostRequest;
use App\Mail\PostCreated;
use App\Mail\PostStored;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd(Post::pluck('name'));
        $data = Post::where('user_id')->orderBy('id', 'desc')->get();
        $request->session()->flash('status', 'Task was successful!');
        return view("home", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $category = category::all();
        return view("create", compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(showPostRequest $request)
    {
        // $post = new Post();
        // $post->name = $request->name;
        // $post->description = $request->description;
        // $post->save();
        $validated = $request->validated();
        $post = Post::create($validated + ['user_id' => Auth::user()->id]);
        // return redirect('/post');
        // $post = new Post();
        // $post->name = $request->name;
        // $post->description = $request->description;
        // $post->save();
        return redirect('/post')->with('status', config('ap.message.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $category = category::all();
        return view('edit', compact('post', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(showPostRequest $request, Post $post)
    {
        // $post->name = $request->name;
        // $post->description = $request->description;
        // $post->save();
        $validated = $request->validated();
        $post->update($validated);
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/post');
    }
}
