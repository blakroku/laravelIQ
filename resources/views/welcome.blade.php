@php use App\Models\Post; @endphp
@extends('layouts.front')

@section('title', 'Laravel IQ - Discover the best Laravel curated content')

@section('main')
    {{--    <section class="mt-12 px-8">--}}
    {{--        <div class="container mx-auto flex justify-between bg-gray-100 px-3 py-2 rounded-md items-center text-gray-500">--}}
    {{--            <aside>--}}
    {{--                <span>--}}
    {{--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">--}}
    {{--                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />--}}
    {{--                    </svg>--}}
    {{--                </span>--}}
    {{--            </aside>--}}
    {{--            <aside class="">--}}
    {{--                <button type="button" class="inline-block">--}}
    {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>--}}
    {{--                </button>--}}
    {{--                <button type="button" class="inline-block">--}}
    {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>--}}
    {{--                </button>--}}
    {{--            </aside>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section class="mt-12">
        <div class="container mx-auto px-8 md:px-0">
            <header class="text-center my-36">
                <h1 class="text-8xl font-black mb-8">Discover Insightful Resources</h1>
                <h2 class="text-4xl">Explore Curated Content Within <br> the Laravel Ecosystem</h2>
                {{--                <span class="block mt-16">--}}
                {{--                    <span class="block text-white">--}}
                {{--                        <a class="bg-red-500 px-7 py-6 text-2xl font-bold rounded-xl" href="">Subscribe to our newsletter</a>--}}
                {{--                        <small class="block">Get curated content directly your inbox</small>--}}
                {{--                    </span>--}}
                {{--                    <small class="block mt-6 font-light text-gray-600">We promise not to send unsolicited emails to you.</small>--}}
                {{--                </span>--}}
            </header>

            <div id="recent-posts">
                <div class="flex justify-between items-center mb-5">
                    <h1 class="text-2xl font-semibold">Recent Posts</h1>
                    <div>
                        <a href="" class="font-semibold hover:text-red-500">
                            <span>show more posts</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-4 h4 inline-block">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="md:grid grid-cols-3 gap-6">
                    @foreach(Post::all()->take(6) as $post)
                        <div class="w-full relative">
                            <div class="rounded-md w-full bg-white shadow mb-8 hover:shadow-xl border border-gray-100">
                                <span>
                                    <img class="rounded-t-md" src="{{ asset($post->post_image->cover_image) }}" alt="">
                                </span>
                                <span class="block absolute top-0 right-0 mr-3 font-bold uppercase mt-3">
                                    <small class="bg-white text-red-400 rounded-full px-4 py-2">
                                        {{ $post->category }}
                                    </small>
                                </span>
                                <div class="p-6">
                                    <h1 class="mt-2 font-black text-gray-700 text-2xl mb-4">
                                        <a class="hover:text-red-500"
                                           href="{{ route('posts.show', [$post->created_at->format('Y'), $post->id]) }}">
                                            {{ $post->subject }}
                                        </a>
                                    </h1>
                                    <div class="flex justify-between font-semibold" style="color: #7d746d">
                                        <div>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                       viewBox="0 0 24 24" stroke-width="2.0" stroke="currentColor"
                                                       class="w-5 h-5 inline-block">
  <path stroke-linecap="round" stroke-linejoin="round"
        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
</svg>
</span>
                                            <span>{{ $post->author->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            <div id="categories" class="mt-20 bg-white p-10 rounded-md shadow">
                {{--                <h1 class="uppercase text-sm tracking-widest font-semibold mb-3 border text-red-500 border-red-500 rounded-full px-4 py-2 font-light tracking-widest inline-block bg-red-500 text-white">--}}
                {{--                    Tags--}}
                {{--                </h1>--}}
                <div class="flex flex-wrap items-center">
                    @php
                        $tags = [
                            'Tag Lists',
                            'PHP', 'Beginner', 'Laravel', 'Framework', 'Tutorials', 'Articles', 'SOLID', 'Stripe', 'Artisan', 'Mail', 'Notifications',
                            'Cashier', 'Crypto', 'Novice', 'Library', 'DRY', 'Dependency', 'Refactor', 'Request', 'Enums', 'Repository', 'Queues',
                            'Payments', 'Package', 'Events', 'Intermediate', 'Actions', 'Pusher', 'AWS', 'Docker', 'Vite', 'Vue', 'Providers', 'Advanced'
                            ];
                    @endphp

                    @foreach($tags as $tag)
                        <a href="" class="rounded-full  px-6 py-1 inline-block mb-4 mr-2 border @if($tag == 'Tag Lists') {{ 'bg-red-500 text-white hover:bg-white hover:border-red-500 hover:text-red-500' }} @else {{ 'text-red-500 bg-white hover:shadow-xl border-red-500 hover:bg-red-500 hover:text-white' }} @endif">
                            {{ $tag }}
                        </a>
                    @endforeach

                </div>

            </div>

            <div id="categories" class="mt-20">
                <div class="flex justify-between items-center mb-5">
                    <h1 class="text-2xl font-semibold">Most popular right now</h1>
                    <div>
                        <a href="" class="font-semibold hover:text-red-500">
                            <span>show more posts</span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-4 h4 inline-block">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="md:grid grid-cols-3 gap-6">
                    @foreach(Post::all()->take(6) as $post)
                        <div class="w-full relative">
                            <div class="rounded-md w-full bg-white shadow mb-8 hover:shadow-xl border border-gray-100">
                                <span>
                                    <img class="rounded-t-md" src="{{ asset($post->post_image->cover_image) }}" alt="">
                                </span>
                                <span class="block absolute top-0 right-0 mr-3 font-bold uppercase mt-3">
                                    <small class="bg-white text-red-400 rounded-full px-4 py-2">
                                        {{ $post->category }}
                                    </small>
                                </span>
                                <div class="p-6">
                                    <h1 class="mt-2 font-black text-gray-700 text-2xl mb-4">
                                        <a class="hover:text-red-500"
                                           href="{{ route('posts.show', [$post->created_at->format('Y'), $post->id]) }}">
                                            {{ $post->subject }}
                                        </a>
                                    </h1>
                                    <div class="flex justify-between font-semibold" style="color: #7d746d">
                                        <div>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="2.0" stroke="currentColor"
                                                     class="w-5 h-5 inline-block">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>
                                                </svg>
                                            </span>
                                            <span>{{ $post->author->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endsection
