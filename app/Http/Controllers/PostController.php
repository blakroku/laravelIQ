<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use App\Models\Tag;
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
            'cover_image' => 'required|image|mimes:jpg,jpeg,png,svg,webp|max:2048',
            'short_description' => 'required',
            'original_published_at' => 'required',
            'category' => 'required',
            'original_post_url' => 'required|unique:posts',

            'image_url' => '',
        ]);

        $coverImageName = str($request->subject)->slug('-'). '.' . $request->cover_image->extension();
        $request->cover_image->move(public_path('images/cover'), $coverImageName);

        $author = Author::create($request->only('name', 'github_url', 'stackoverflow_url'));
        $post = $author->posts()->create($request->except('name', 'github_url', 'stackoverflow_url', 'cover_image', 'image_url'));
        $post->post_image()->create(['cover_image' => 'images/cover/' . $coverImageName]);

        if (!empty($request->image_url)) $post->credits()->create($request->only('image_url'));
        $post->attachTags($this->getTags(['me', 'and', 'you']));

        notify()->success('Post successfully created', 'Success');

        return redirect()->route('posts.index');
    }

    public function showPost(Post $post): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('post.show-post', [
            'post' => $post,
        ]);
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
        notify()->success('Post successfully updated', 'Success');

        return redirect()->route('posts.index');
    }

    public function deletePost(Post $post)
    {
        $post->delete();
        notify()->warning($post->subject . ' ' . 'has been deleted from the post list.', 'Post successfully deleted');

        return redirect()->route('posts.index');
    }

    protected function getTags(array $array)
    {
        return $array;
    }
}
