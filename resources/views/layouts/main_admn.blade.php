<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kantin Online | {{ $title }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>

    {{-- alpinejs --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="dark:bg-gray-900">
    
    @include('layouts.nav_admn')

    <main class="p-4 md:ml-64 h-auto pt-20">
        @yield('admin')
    </main>

    
    {{-- javascript --}}
    <script>
      function tampilanGambar() {
        const gambar = document.querySelector('#gambar');
        const uploadImg = document.querySelector('.upload-img');

        uploadImg.style.display = 'block';

        const ambilGambar = new FileReader();
        ambilGambar.readAsDataURL(gambar.files[0]);

        ambilGambar.onload = function(oFREvent) {
          uploadImg.src = oFREvent.target.result;
        } 
      }
    </script>
</body>
</html>