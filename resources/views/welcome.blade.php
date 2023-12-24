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
{{--            <h1 class="uppercase text-sm tracking-widest font-semibold mb-3">Recent Posts</h1>--}}
            <div class="md:grid grid-cols-3 gap-6">
                @foreach(\App\Models\Post::all()->take(6) as $post)
                    <div class="w-full">
                        <div class="rounded-md w-full mb-8 hover:shadow-xl border border-gray-100">
                            <span>
                                <img class="" src="https://picperf.io/https://laravelnews.s3.amazonaws.com/featured-images/forge-nginx-logs.jpg" alt="">
                            </span>
                           <div class="p-6">
                               @php
                                   $truncateLimit = 20;
                                   if(str_word_count($post->subject) > 6):
                                       $truncateLimit = 10;
                                   endif;
                               @endphp
                               <h1 class="mt-2 font-black text-gray-700 text-2xl mb-4">
                                   <a  class="hover:text-red-500" href="{{ route('posts.show', [$post->created_at->format('Y'), $post->id]) }}">{{ $post->subject }}</a>
                               </h1>
                               <div>
                                   {{ str($post->short_description)->words($truncateLimit) }}
                               </div>
                           </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
