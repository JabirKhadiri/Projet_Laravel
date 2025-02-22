<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
    
        auth()->user()->posts()->create($request->all());
        return redirect()->route('posts.index')->with('success', 'Article publié avec succès.');
    }
    
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    
    public function edit(Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403);
        }
        return view('posts.edit', compact('post'));
    }
    
    public function update(Request $request, Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403);
        }
    
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
    
        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Article mis à jour.');
    }
    
    public function destroy(Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403);
        }
    
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Article supprimé.');
    }
    
}
