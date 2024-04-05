<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class UserpanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::latest()->paginate(5);

        $sides = Post::all();

        return view('/userpanel/index', compact('posts', 'sides'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        return view('userpanel/detail', compact('post'));
    }

    public function media()
    {

        $posts = Post::latest()->paginate(10);

        $sides = Post::all();

        return view('/userpanel/media', compact('posts', 'sides'));
    }

    public function csr()
    {

        $posts = Post::latest()->paginate(10);

        $sides = Post::all();

        return view('/userpanel/csr', compact('posts', 'sides'));
    }

    public function year($data)
    {

        $posts = Post::all();

        $sides = Post::all();

        return view('/userpanel/year', compact('posts', 'sides', 'data'));
    }
}
