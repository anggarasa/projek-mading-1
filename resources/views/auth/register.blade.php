<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- username --}}
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" aria-label="disabled input" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" aria-label="disabled input" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- kelas --}}
        <div class="mt-4">
            <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas/Jurusan</label>
            <select id="kelas" name="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Pilih Kelas/Jurusan Anda</option>
            <option value="X RPL">X RPL</option>
            <option value="X MP">X MP</option>
            <option value="X LKS">X LKS</option>
            <option value="X TBSM">X TBSM</option>
            <option value="XI TBSM">XI TBSM</option>
            <option value="XI MP">XI MP</option>
            <option value="XI RPL">XI RPL</option>
            <option value="XI LKS">XI LKS</option>
            <option value="XII MP">XII MP </option>
            <option value="XII LKS">XII LKS </option>
            <option value="XII TBSM">XII TBSM </option>
            <option value="XII RPL">XII RPL </option>
            </select>
            <x-input-error :messages="$errors->get('kelas')" class="mt-2" />
        </div>

        {{-- No hp --}}
        <div class="mt-4">
            <x-input-label for="number" :value="__('No Hp')" />
            <x-text-input id="number" aria-label="disabled input" class="block mt-1 w-full" type="number" name="number" :value="old('number')" required />
            <x-input-error :messages="$errors->get('number')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
