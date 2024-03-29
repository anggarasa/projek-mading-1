@extends('layouts.main_guru')

@section('guru')
<div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="mx-auto max-w-2xl py-32 sm:py-0 lg:py-0">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
          <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 dark:text-gray-400 ring-1 ring-gray-900/10 dark:ring-gray-300/10 hover:ring-gray-900/20">
            Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
        <div class="text-center">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-6xl">
            Selamat datang diwebsite mading SMK Al-intisab</h1>
          <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">Di Halaman guru ini anda bisa menambahkan informasi di mading dan juga menghapus atau mengedit mading yang anda buat.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/guru/madings" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">My Madings</a>
            <a href="/guru/madings/create" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">Create Madings <span aria-hidden="true">→</span></a>
          </div>
        </div>
    </div>
</div>
@endsection