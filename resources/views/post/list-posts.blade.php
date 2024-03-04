@extends('layouts.app')

@section('title', 'Posts')

@section('main')
    <main class="">

        @include('partials._page_header',
            ['header_name' => 'posts/index', 'return_url' => 'posts/index', 'route' => route('posts.index')]
        )

        <section class="container mx-auto px-8 sm:px-0 md:px-0 lg:px-0">
            <div class="max-w-[500px] mx-auto">
                @forelse($posts as $post)
                    <div class="my-6">
                        <div class="flex justify-between">
                            <div>
                            <span class="inline-block mr-3 text-amber-500">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-4 h-4 inline-block">
                                  <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z" clip-rule="evenodd" />
                                </svg>
                            </span>
                                <span>
                                <a class="hover:underline" href="{{ route('posts.show', [$post->id]) }}">
                                    <span>
                                        {{ $post->subject }}
                                    </span>
                                </a>
                            </span>
                            </div>
                            <div class="ml-12 text-right">
                            <span class="flex space-x-3">
                                <a href="{{ route('posts.edit', [$post->id]) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-4 h-4 inline-block">
                                      <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                      <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" onclick="if(confirm('Do you want to delete post?')) return document.getElementById('delete-' + {{ $post->id }}).submit()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-4 h-4 inline-block">
                                      <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <form action="{{ route('posts.delete', [$post->id]) }}" method="post" id="delete-{{ $post->id }}">
                                    @csrf @method('delete')
                                </form>
                            </span>
                            </div>
                        </div>
                    </div>
                @empty
                    @include('partials._no_data_found', ['model_name' => 'posts'])
                @endforelse

                @include('partials._pagination', ['model_name' => 'posts'])
            </div>
        </section>
    </main>
@endsection
