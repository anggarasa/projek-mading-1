@extends('layouts.main_pub')

@section('contents')
<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        @if ($mading->author->profile)
                        <img class="mr-4 w-16 h-16 rounded-full" src="{{ asset('storage/'. $mading->author->profile) }}" alt="{{ $mading->author->name }}">
                        @else
                        <img class="mr-4 w-16 h-16 rounded-full" src="/img/logo/profile.jpg" alt="{{ $mading->author->name }}">
                        @endif
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $mading->author->name }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">{{ $mading->author->username }} | {{ $mading->author->role }}</p>
                            <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{ $mading->created_at->diffForHumans() }}</time></p>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $mading->judul }}</h1>
            </header>
            
            <article class=" mb-32">
                @if ($mading->gambar)
                <img src="{{ asset('storage/' . $mading->gambar) }}" class="w-full object-cover h-96" alt="{{ $mading->judul }}">
                @else
                <img src="https://source.unsplash.com/1200x500?{{ $mading->category }}" class="w-full object-cover h-96" alt="{{ $mading->judul }}">
                @endif
                    <figcaption>{{ $mading->judul }}</figcaption>
                {!! $mading->body !!}
            </article>

            <a href="/mading" class="text-white no-underline bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back to mading</a>
        </article>
    </div>
</main>
@endsection