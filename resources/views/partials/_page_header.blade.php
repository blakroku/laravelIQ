<header class="border-b border-gray-200 py-14 mb-12">
    <div class="container mx-auto px-8 sm:px-0 md:px-0 lg:px-0">
        <div class="flex items-center">
            <h1 class="inline-block font-bold text-xl">{{ $header_name }}</h1>
            <a class="ml-3" href="{{ route('posts.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle inline-block"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
            </a>
        </div>
        <span class="block">
            <a class="text-sm text-blue-800 items-center hover:font-semibold" href="{{ $route }}">
                <span class="inline-block font-light">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-6 h-6 inline-block">
                      <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                    </svg>
                </span>
                <span>{{ $return_url }}</span>
            </a>
        </span>
    </div>
</header>
