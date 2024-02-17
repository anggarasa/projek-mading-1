@extends('layouts.main_guru')

@section('guru')
<section>
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Blog</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
        </div> 
  
        @if (session()->has('mading_baru'))
      <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert" x-data="{ show: true }"
      x-show="show"
      x-transition
      x-init="setTimeout(() => show = false, 2000)">
          <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <span class="sr-only">Info</span>
          <div>
            {{ session('mading_baru') }}
          </div>
        </div>
      @endif
      @if (session()->has('ubah'))
      <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert" x-data="{ show: true }"
      x-show="show"
      x-transition
      x-init="setTimeout(() => show = false, 2000)">
          <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <span class="sr-only">Info</span>
          <div>
            {{ session('ubah') }}
          </div>
        </div>
      @endif
      @if (session()->has('hapus'))
      <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert" x-data="{ show: true }"
      x-show="show"
      x-transition
      x-init="setTimeout(() => show = false, 2000)">
          <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <span class="sr-only">Info</span>
          <div>
            {{ session('hapus') }}
          </div>
        </div>
      @endif
  
        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 dark:border-gray-700 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3 md:grid-cols-2">
          @foreach ($madings as $mading)
            <article class="flex max-w-xl flex-col items-start rounded border shadow-lg border-gray-400 bg-gray-100 dark:bg-gray-800 dark:border-gray-700 justify-between">
              @if ($mading->gambar)
              <img src="{{ asset('storage/' . $mading->gambar) }}" class="rounded-t mb-4 w-full object-cover max-h-96" alt="">
              @else
              <img src="https://source.unsplash.com/500x660?{{ $mading->category }}" class="rounded-t mb-4 w-full" alt="">
              @endif
            <div class="flex items-center p-4 gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-gray-500 dark:text-gray-300">{{ $mading->created_at->diffForHumans() }}</time>
              <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $mading->category }}</a>
            </div>
            <div class="group relative p-4">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 dark:text-white">
                <a href="/guru/madings/{{ $mading->id }}">
                  <span class="absolute inset-0"></span>
                  {{ $mading->judul }}
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 dark:text-gray-400">{{ $mading->excerpt }}</p>
            </div>
            <div class="relative p-4 mt-8 flex items-center gap-x-4">
              @if ($mading->author->profile)
              <img src="{{ asset('storage/' . $mading->author->profile) }}" alt="{{ $mading->author->name }}" class="h-10 w-10 rounded-full bg-gray-50">
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
            <div class="flex items-center p-4 space-x-4">
              <a href="/guru/madings/{{ $mading->id }}/edit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                  <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                  Edit
              </a>   
              <form action="/guru/madings/{{ $mading->id }}" method="post">
                  @method('delete')
                  @csrf
              <button class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900" onclick="return confirm('Apakah anda yakin?')">
                  <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                  Delete
              </button> 
              </form>
            </div>
          </article>
          @endforeach
        </div>
    </div>
</section>
@endsection