@extends('layouts.main_pub')

@section('contents')
<section>
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Madings</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Selamat datang di mading Smk Al-intisab disini anda bisa melihat informasi-informasi yang ada di sekolah ini.</p>
        </div> 

        
        <form action="/mading" class="grid grid-cols-none md:grid-cols-6 lg:grid-cols-6 gap-4">   
          <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
          <div class="relative col-start-2 col-span-4">
              <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                  </svg>
              </div>
              <input type="text" name="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-400 focus:border-green-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Information..." value="{{ request('search') }}">
              <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-green-400 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
          </div>
        </form>


        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 dark:border-gray-700 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3 md:grid-cols-2">
          @foreach ($madings as $mading)
          <article class="flex max-w-xl flex-col items-start rounded border shadow-lg border-green-400 bg-gray-100 dark:bg-gray-800 dark:border-gray-700 justify-between">
            @if ($mading->gambar)
          <img src="{{ asset('storage/' . $mading->gambar) }}" class="rounded-t w-full h-80 object-cover mb-4" alt="">
          @else
          <img src="https://source.unsplash.com/500x418?{{ $mading->category }}" class="rounded-t mb-4 w-full" alt="">
          @endif
            <div class="flex items-center p-4 gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500 dark:text-gray-300">{{ $mading->created_at->diffForHumans() }}</time>
              <a href="#" class="relative z-10 rounded-full bg-green-100 px-3 py-1.5 font-medium text-gray-600 hover:bg-green-200">{{ $mading->category }}</a>
            </div>
            <div class="group relative p-4">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 dark:text-white">
                <a href="/mading/{{ $mading->id }}">
                  <span class="absolute inset-0"></span>
                  {{ $mading->judul }}
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 dark:text-gray-400">{{ $mading->excerpt }}</p>
            </div>
            <div class="relative p-4 mt-8 flex items-center gap-x-4">
              @if ($mading->author->profile)
              <img src="{{ asset('storage/'. $mading->author->profile) }}" alt="" class="h-10 w-10 rounded-full bg-gray-50">
              @else
              <img src="/img/logo/profile.jpg" alt="" class="h-10 w-10 rounded-full bg-gray-50">
              @endif
              <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900 dark:text-white">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    {{ $mading->author->name }}
                  </a>
                </p>
                <p class="text-gray-600 dark:text-gray-400">{{ $mading->author->username }} | {{ $mading->author->role }}</p>
              </div>
            </div>
          </article>
          @endforeach
        </div>
    </div>
</section>

<div class="px-96">
  {{ $madings->links() }}
</div>
@endsection