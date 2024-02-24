<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mading Smk Al-intisab</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    @if (Auth::user()->role == 'ADMIN')
                    <a href="{{ url('/admin') }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Kembali ke Halaman Admin</a>
                    @endif

                    @if (Auth::user()->role == 'GURU')
                      <a href="{{ url('/guru') }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Kembali ke Halaman Home</a>
                    @endif

                    @if (Auth::user()->role == 'MURID')
                    <a href="{{ url('/mading') }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Kembali ke Mading</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        
        <section class="bg-white dark:bg-gray-900">
            <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img class="w-full dark:hidden" src="https://i.pinimg.com/originals/2b/61/d0/2b61d088f8564804dbf8fdedc2d01405.jpg" alt="dashboard image">
                <img class="w-full hidden dark:block" src="https://i.pinimg.com/originals/2b/61/d0/2b61d088f8564804dbf8fdedc2d01405.jpg" alt="dashboard image">
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Selamat datang di website mading Smk Al-intisab</h2>
                    <p class="mb-6 font-light text-gray-600 md:text-lg dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae inventore rem aperiam ab obcaecati, harum perspiciatis, ex vitae rerum placeat saepe earum odio laborum ea, laudantium repellat velit. Expedita, numquam.</p>
                </div>
            </div>

            <div class="relative isolate overflow-hidden py-16 sm:py-24 lg:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                  <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                    <div class="max-w-xl lg:max-w-lg">
                      <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">Yang mendaftar diWeb ini</h2>
                      <p class="mt-4 text-lg leading-8 text-gray-500 dark:text-gray-300">Anda bisa melihat dibawah ini murid yang membuat akun website ini dan guru-guru yang terdaftar diwebsite ini.</p>
                    </div>
                    <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                      <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                          <svg class="h-6 w-6 text-black dark:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                          </svg>
                        </div>
                        <dt class="mt-4 font-semibold text-black dark:text-white">Lihat Mading</dt>
                        <dd class="mt-2 leading-7 text-gray-600 dark:text-gray-400">Untuk melihat mading/informasi diwebsite ini anda harus login terlebih dahulu atau membuat akun terlebih dahulu.</dd>
                      </div>
                      <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                          <svg class="h-6 w-6 text-black dark:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                          </svg>
                        </div>
                        <dt class="mt-4 font-semibold text-black dark:text-white">Stop</dt>
                        <dd class="mt-2 leading-7 text-gray-600 dark:text-gray-400">Jangan menyalahgunakan website ini untuk hal-hal yang tidak berfaedah atau mengirimkan informasi palsu.</dd>
                      </div>
                    </dl>
                  </div>
                </div>
            </div>

            <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{ $murid }}</dt>
                        <dd class="font-light text-gray-600 dark:text-gray-400">Siswa & Siswi</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">{{ $guru }}</dt>
                        <dd class="font-light text-gray-600 dark:text-gray-400">Guru</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">8</dt>
                        <dd class="font-light text-gray-600 dark:text-gray-400">Ekstrakulikuler</dd>
                    </div>
                </dl>
            </div>
        </section>
    </div>
</body>
</html>