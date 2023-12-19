@extends('layouts.app')

@section('title', 'Posts')

@section('main')
    <main class="">

        @include('partials._page_header',
            ['header_name' => 'posts/new', 'return_url' => 'posts/index', 'route' => route('posts.index')]
        )

        <section class="container mx-auto px-8 sm:px-0 md:px-0 lg:px-0">
            <div class="max-w-[700px] mx-auto">
                <form action="{{ route('posts.store') }}" method="post">

                    @csrf

                    <div class="mb-4">
                        <label for="subject">
                            <span>subject</span>
                            <span>
                                <input class="border broder-gray-200 rounded px-3 py-1 w-full" type="text" name="subject" id="subject" placeholder="subject">
                            </span>
                            @error('subject')
                            <span class="text-xs text-red-500">
                                {{ $message }}
                            </span>
                            @enderror
                        </label>
                    </div>

                    <div class="mb-4">
                        <label for="short_description">
                            <span>short description</span>
                            <span>
                                <textarea class="border broder-gray-200 rounded px-3 py-1 w-full" name="short_description" id="short_description" cols="30" rows="5"></textarea>
                            </span>
                            @error('short_description')
                            <span class="text-xs text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                        </label>
                    </div>

                    <div class="mb-4">
                        <label for="author">
                            <span>author</span>
                            <span>
                            <input class="border broder-gray-200 rounded px-3 py-1 w-full" type="text" name="author" id="author" placeholder="author name">
                        </span>
                            @error('author')
                            <span class="text-xs text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                        </label>
                    </div>

                    <div class="mb-4">
                        <label for="category">
                            <span>category</span>
                            <span>
                                <select class="border broder-gray-200 rounded px-3 py-1 w-full" name="category" id="category">
                                    <option value="post">social</option>
                                    <option value="tutorial">tutorial</option>
                                    <option value="video">video</option>
                                    <option value="article">article</option>
                                    <option value="news">news</option>
                                </select>
                            </span>
                            @error('category')
                                <span class="text-xs text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                        </label>
                    </div>

                    <div class="mb-4">
                        <label for="original_post_url">
                            <span>original url</span>
                            <span>
                            <input class="border broder-gray-200 rounded px-3 py-1 w-full" type="text" name="original_post_url" id="original_post_url" placeholder="original url">
                        </span>
                            @error('original_post_url')
                                <span class="text-xs text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                        </label>
                    </div>

                    <div class="mb-4">
                        <label for="original_published_at">
                            <span>original published date</span>
                            <span>
                                <input class="border broder-gray-200 rounded px-3 py-2 w-full" type="date" name="original_published_at" id="original_published_at">
                            </span>
                            @error('original_published_at')
                                <span class="text-xs text-red-500">
                                    {{ $message }}
                                </span>
                            @enderror
                        </label>
                    </div>

                    <div class="mt-5">
                        <button class="border broder-gray-200 px-3 py-1 w-full bg-black text-white rounded" type="submit">add</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection
