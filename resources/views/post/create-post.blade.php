<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>posts</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>
<body class="antialiased">
    <nav class="bg-amber-400 py-2 shadow-gray-400 px-8 sm:px-0 md:px-0 lg:px-0">
        <section class="container mx-auto flex justify-between items-center">
            <aside class="flex space-x-12">
                <div class="font-black">{{ env('APP_NAME') }}</div>
                <div>
                    <ul>
                        <li>
                            <a href="">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-6 h-6 inline-block">
                                      <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
                                      <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span>posts</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <aside class="left">
                <a href="">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-6 h-6 inline-block">
                          <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm5.03 4.72a.75.75 0 0 1 0 1.06l-1.72 1.72h10.94a.75.75 0 0 1 0 1.5H10.81l1.72 1.72a.75.75 0 1 1-1.06 1.06l-3-3a.75.75 0 0 1 0-1.06l3-3a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span>exit</span>
                </a>
            </aside>
        </section>
    </nav>

    <main class="">
        <header class="border-b border-gray-200 py-14 mb-12">
            <div class="container mx-auto px-8 sm:px-0 md:px-0 lg:px-0">
                <h1 class="font-bold text-xl">posts/new</h1>
                <span>
                    <a class="text-sm text-blue-800 items-center hover:font-semibold" href="{{ route('posts.index') }}">
                        <span class="inline-block font-light">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-6 h-6 inline-block">
                              <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <span>post/index</span>
                    </a>
                </span>
            </div>
        </header>

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

<footer class="pt-6 mt-20">
    <div class="text-center">
        copyright &copy; {{ env('APP_NAME') }} {{ date('Y') }}. all rights reserved
    </div>
</footer>
</body>
</html>
