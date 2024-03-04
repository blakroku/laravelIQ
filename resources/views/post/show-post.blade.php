@extends('layouts.app')

@section('title', 'Posts')

@section('main')
    <main class="">

        @include('partials._page_header',
            ['header_name' => 'posts/index', 'return_url' => 'posts/index', 'route' => route('posts.index')]
        )

        <section class="container mx-auto px-8 sm:px-0 md:px-0 lg:px-0">
            <div class="max-w-[500px] mx-auto">
                <div class="mb-5">
                    <img class="rounded-md" src="{{ asset($post->post_image->cover_image) }}" alt="">
                </div>
                <h1 class="text-3xl mb-1 font-bold">
                    <span>{{ $post->subject }}</span>
                    <small class="bg-amber-400 text-xs px-3 py-1 rounded-md">{{ $post->category }}</small>
                </h1>
                <div class="mb-5">
                    <small class="text-sm"><span class="text-black font-semibold"> Author:</span> {{ $post->author->name }} <span class="text-black font-semibold"> - Published:</span> {{ $post->original_published_at->diffForHumans() }}</small>
                </div>
                <div class="mb-5">
                    {{ $post->short_description }}
                </div>
                <div class="mb-7">
                    <a class="text-sm" href="{{ $post->original_post_url }}" target="_blank">
                        <span>{{ $post->original_post_url }}</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                            </svg>
                        </span>
                    </a>
                </div>
                <div>
                    <a href="{{ route('posts.edit', [$post->id]) }}" class="bg-black text-white px-3 py-1 rounded-md">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </span>
                        <span>
                            edit this post
                        </span>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
