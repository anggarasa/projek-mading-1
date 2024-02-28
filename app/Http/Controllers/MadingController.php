<?php

namespace App\Http\Controllers;

use App\Models\Mading;
use Illuminate\Http\Request;

class MadingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('public.blog', [
            'title' => 'Mading Page',
            'madings' => Mading::latest()->cari(request(['search']))->paginate(6)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mading $mading)
    {
        return view('public.show_blog', [
            'title' => "Show",
            'mading' => $mading
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mading $mading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mading $mading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mading $mading)
    {
        //
    }
}
