<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function listPosts()
    {
        return view('post.list-posts');
    }

    public function createPost()
    {
        return view('post.create-post');
    }

    public function storePost(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'author' => 'required',
            'short_description' => 'required',
            'original_published_at' => 'required',
            'category' => 'required',
            'original_post_url' => 'required|unique:posts',
        ]);

        $author = Author::create(['name' => $request->author]);
        $author->posts()->create($request->except('author'));

        return redirect()->route('posts.index')->with('success', 'Post successfully added');
    }
}
