<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
            'title' => "Profile"
        ]);
    }

    public function editGuru(Request $request) {
        return view('profile.edit_guru', [
            'title' => "Profile",
            'user' => $request->user()
        ]);
    }

    public function editAdmin(Request $request) 
    {
        return view('profile.edit_admin', [
            'title' => "Profile",
        'user' => $request->user()
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());


        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // Menyimpan foto profil
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile')->store('img_profile', 'public');
            $request->user()->profile = $profile;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function updateGuru(ProfileUpdateRequest $request)
    {
        $user = $request->user();

        // Mengisi atribut pengguna dengan data yang divalidasi dari permintaan
        $user->fill($request->validated());

        // Memeriksa apakah ada perubahan pada alamat email pengguna
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Menyimpan foto profil
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile')->store('img_profile', 'public');
            $user->profile = $profile;
        }

        // Menyimpan perubahan yang dilakukan pada pengguna
        $user->save();

        return redirect('/profile-guru')->with('status', 'profile-updated');
    }
    
    
    public function updateAdmin(ProfileUpdateRequest $request)
    {
        $user = $request->user();

        // Mengisi atribut pengguna dengan data yang divalidasi dari permintaan
        $user->fill($request->validated());

        // Memeriksa apakah ada perubahan pada alamat email pengguna
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Menyimpan foto profil
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile')->store('img_profile', 'public');
            $user->profile = $profile;
        }

        // Menyimpan perubahan yang dilakukan pada pengguna
        $user->save();

        return redirect('/profile-admin')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function destroyGuru(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    
    
    public function destroyAdmin(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
