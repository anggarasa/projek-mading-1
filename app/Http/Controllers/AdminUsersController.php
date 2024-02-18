<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class AdminUsersController extends Controller
{

    // MURID
    public function murid()
    {
        return view('admin.users.murid.user_admins_murid', [
            "title" => "Murid",
            'murids' => User::where('role', 'MURID')->user(request(['search']))->get(),
            'jumlahMurid' => User::where('role', 'MURID')->count(),
        ]);
    }

    public function createMurid() 
    {
        return view('admin.users.murid.user_admin_createMurid', [
            'title' => "Create Account",
        ]);
    }

    public function storeMurid(Request $request)
    {
        $newMurid = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:4', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'kelas' => ['required'],
            'number' => ['required', 'min:12', 'max:12', 'unique:users'],
            'password' => ['required']
        ]);

        $newMurid['password'] = bcrypt($newMurid['password']);

        User::create($newMurid);

        return redirect('/admin/users/murid')->with('newMurid', 'anda mmembuat akun baru');
    }


    // GURU
    public function guru()
    {
        return view('admin.users.guru.user_admins_guru', [
            'title' => "guru",
            'gurus' => User::where('role', 'GURU')->user(request(['search']))->get(),
            'jumlahGuru' => User::where('role', 'GURU')->count(),
        ]);
    }

    public function createGuru()
    {
        return view('admin.users.guru.user_admin_createGuru', [
            'title' => "Create Account",
        ]);
    }

    public function storeGuru(Request $request)
    {
        $newguru = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:4', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'role' => ['required'],
            'number' => ['required', 'min:12', 'max:12', 'unique:users'],
            'password' => ['required']
        ]);
        
        $newguru['password'] = bcrypt($newguru['password']);

        User::create($newguru);

        return redirect('/admin/users/guru')->with('newGuru', 'Anda telah membuat akun baru');
    }



    // ADMIN
    public function admin()
    {
        return view('admin.users.adminUser.user_admins', [
            'title' => "Admin",
            'admins' => User::where('role', 'ADMIN')->user(request(['search']))->get(),
            'jumlahAdmin' => User::where('role', 'ADMIN')->count(),
        ]);
    }

    public function createAdmin()
    {
        return view('admin.users.adminUser.user_admin_create', [
            'title' => "Create Account"
        ]);
    }

    public function storeAdmin(Request $request)
    {
        $newAdmin = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:4', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'role' => ['required'],
            'number' => ['required', 'min:12', 'max:12', 'unique:users'],
            'password' => ['required']
        ]);
        
        $newAdmin['password'] = bcrypt($newAdmin['password']);

        User::create($newAdmin);

        return redirect('/admin/users/admin')->with('newAdmin', 'Anda telah membuat akun baru');
    }
}
