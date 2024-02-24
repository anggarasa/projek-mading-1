@extends('layouts.main_admn')

@section('admin')
<section class="bg-white dark:bg-gray-900">
    <div class="mx-auto mt-12 max-w-screen-sm text-center lg:mb-16 mb-8">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">User Yang Terdaftar</h2>
        <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Anda bisa melihat user yang sudah membuat akun website ini.</p>
    </div> 
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
        <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
            <div class="flex flex-col items-center p-6 rounded border shadow-lg border-gray-400 bg-gray-100 dark:bg-gray-800 dark:border-gray-700 justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{ $murid }}</dt>
                <dd class="font-light text-gray-500 dark:text-gray-400">Murid</dd>
            </div>
            <div class="flex flex-col items-center p-6 rounded border shadow-lg border-gray-400 bg-gray-100 dark:bg-gray-800 dark:border-gray-700 justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{ $guru }}</dt>
                <dd class="font-light text-gray-500 dark:text-gray-400">Guru</dd>
            </div>
            <div class="flex flex-col items-center p-6 rounded border shadow-lg border-gray-400 bg-gray-100 dark:bg-gray-800 dark:border-gray-700 justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{ $admin }}</dt>
                <dd class="font-light text-gray-500 dark:text-gray-400">Admin</dd>
            </div>
        </dl>
    </div>
    <div class="mx-auto max-w-screen-xl text-center">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#" class="hover:underline"><span class="font-bold text-blue-500">Smk Al-intisab™</span></a>. All Rights Reserved.</span>
    </div>
</section>
@endsection