<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Mading;
use Illuminate\Http\Request;

class AdminMadingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.mading.mading_admin', [
            'title' => "Madings Admin",
            'madings' => Mading::whereHas('author', function($query) {
                $query->where('role', 'ADMIN');
            })->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mading.mading_createAdmin', [
            'title' => "Create Madings Admin",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newMading = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'gambar' => ['image', 'file', 'max:2000'],
            'category' => ['required', 'string', 'max:255'],
            'body' => ['required'],
        ]);

        if($request->file('gambar')) {
            $newMading['gambar'] = $request->file('gambar')->store('images-mading', 'public');
        }

        $newMading['user_id'] = auth()->user()->id;

        $newMading['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Mading::create($newMading);

        return redirect('/admin/madings')->with('mading_baru', 'Anda telah menambahkan mading baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mading $mading)
    {
        return view('admin.mading.mading_showAdmin', [
            'title' => "Show Mading Admin",
            'mading' => $mading,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mading $mading)
    {
        return view('admin.mading.mading_editAdmin', [
            'title' => "Edit Mading Admin",
            'mading' => $mading,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mading $mading)
    {
        $ubahMading = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'gambar' => ['image', 'file', 'max:2000'],
            'category' => ['required', 'string', 'max:255'],
            'body' => ['required'],
        ]);

        if($request->file('gambar')) {
            if($request->oldGambar) {
                Storage::delete($request->oldGambar);
            }
            $ubahMading['gambar'] = $request->file('gambar')->store('images-mading', 'public');
        }

        $ubahMading['user_id'] = auth()->user()->id;

        $ubahMading['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Mading::where('id', $mading->id)
                ->update($ubahMading);

        return redirect('/admin/madings')->with('ubah', 'Anda telah mengubah salah satu mading');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mading $mading)
    {
        if($mading->gambar) {
            Storage::delete($mading->gambar);
        }

        Mading::destroy($mading->id);

        return redirect('/admin/madings')->with('hapus', 'Anda telah menghapus salah satu informasi di mading anda');
    }
}
