@extends('layouts.main_guru')

@section('guru')
<section class="bg-white">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900">Tambahkan Informasi Baru di Mading</h2>
        <form action="/guru/madings" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                    <input type="text" name="judul" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Judul Informasi" required="" value="{{ old('judul') }}">
                    @error('judul')
                        <p class=" text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <div class="w-full">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                    <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Product brand" required="">
                </div> --}}
                <div class="w-full">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="gambar">Upload Gambar</label>
                    <img class="upload-img object-cover mb-1 w-1/3">
                    <input name="gambar" class="block w-full p-2.5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="gambar" onchange="tampilanGambar()" type="file">
                    @error('gambar')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                    <input type="text" name="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="" value="{{ old('category') }}">
                    @error('category')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Select category</option>
                        <option value="TV">TV/Monitors</option>
                        <option value="PC">PC</option>
                        <option value="GA">Gaming/Console</option>
                        <option value="PH">Phones</option>
                    </select>
                </div> --}}
                {{-- <div>
                    <label class="block mb-2 text-sm font-medium text-gray-500 dark:text-white" for="user_avatar">Upload Gambar</label>
                    <input class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>  --}}
            </div>
            <div class="w-full mt-5">
                <label for="body" class="block mb-2 text-sm font-medium text-gray-900">Isi Informasi</label>
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                Tambah
            </button>
        </form>
    </div>
</section>
@endsection