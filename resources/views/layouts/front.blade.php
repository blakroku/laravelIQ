<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials._html_head')

<body class="antialiased" style="background-color: #FAF8F7">
<header>
    <nav class="bg-red-500 text-white py-4 shadow-gray-400 text-xl px-8 sm:px-0 md:px-0 lg:px-0 font-semibold">
        <section class="container mx-auto flex justify-between items-center">
            <aside class="flex space-x-12">
                <div class="logo font-black">
                    <a href="{{ route('home') }}">{{ env('APP_NAME') }}</a>
                </div>
            </aside>
            <aside class="left">
                <a href="{{ route('home') }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                        </svg>
                    </span>
                    <span>Posts</span>
                </a>
            </aside>
{{--            <aside class="left">--}}
{{--                <a href="javascript:void(0)">--}}
{{--                    <span>--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">--}}
{{--                          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />--}}
{{--                        </svg>--}}
{{--                    </span>--}}
{{--                    <span>Menu</span>--}}
{{--                </a>--}}
{{--            </aside>--}}
        </section>
    </nav>
{{--    <section class="hero">--}}
{{--        <div class="container mx-auto flex py-12">--}}
{{--            <aside class="w-[50%]">--}}
{{--                <img class="rounded-md w-full h-43" src="https://images.unsplash.com/photo-1556792189-55769c8dfbac?q=80&w=4738&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"--}}
{{--                     alt="" width="300px">--}}
{{--            </aside>--}}
{{--            <aside class="w-[50%]">--}}
{{--                <h1 class="text-4xl font-semibold">Elevate your holiday with J Lohr</h1>--}}
{{--                <span>J. Lohr wines are grown and crafted to be equally at home with tonight’s favorite recipe or as a thoughtful thank you for your holiday host. Save 15% with code: JLOHR15.</span>--}}
{{--            </aside>--}}
{{--        </div>--}}
{{--    </section>--}}
</header>

@yield('main')

<footer class="pt-6 my-20">
    <div class="text-center">
        copyright &copy; {{ date('Y') }} {{ env('APP_NAME') }}. all rights reserved
    </div>
</footer>
</body>
</html>
