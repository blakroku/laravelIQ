<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function listPosts()
    {
        $posts = Post::orderBy('created_at', 'desc')->simplePaginate(20);

        return view('post.list-posts', ['posts' => $posts]);
    }

    public function createPost()
    {
        return view('post.create-post');
    }

    public function storePost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'github_url' => '',
            'stackoverflow_url' => '',

            'subject' => 'required',
            'short_description' => 'required',
            'original_published_at' => 'required',
            'category' => 'required',
            'original_post_url' => 'required|unique:posts',
        ]);

        $author = Author::create($request->only('name', 'github_url', 'stackoverflow_url'));
        $author->posts()->create($request->except('name', 'github_url', 'stackoverflow_url'));

        return redirect()->route('posts.index')->with('success', 'Post successfully added');
    }

    public function editPost(Post $post)
    {
        return view('post.edit', ['post' => $post]);
    }

    public function updatePost(Request $request, Post $post)
    {
        $data = $request->validate([
            'subject' => 'required',
            'short_description' => 'required',
            'original_published_at' => 'required',
            'category' => 'required',
            'original_post_url' => ['required', Rule::unique('posts')->ignore($post->id)],
        ]);

        $post->update($data);

        return redirect()->route('posts.index')->with('success', 'Post successfully updated');
    }

    public function deletePost(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post successfully delete');
    }
}
