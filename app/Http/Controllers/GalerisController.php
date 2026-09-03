<?php

namespace App\Http\Controllers;

use App\Models\Galeris;
use Illuminate\Http\Request;

class GalerisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeris = Galeris::latest()->get();

        return view('admin.kelolagaleri', compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.postinggaleri');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judulgaleri' => 'required|max:255',
            'gambargaleri' => 'required|image|mimes:jpg,png,jpeg|max:5120',
        ]);

        $imagePath = $request->file('gambargaleri')->store('galeri','public');

        Galeris::create([
            'judulgaleri' => $request->judulgaleri,
            'gambargaleri' => $imagePath,
        ]);

        return redirect()->route('galeri')->with('success', 'Galeri berhasil diposting.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeris $galeris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeris $galeris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeris $galeris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galeris = Galeris::findOrFail($id);
        $galeris->delete();

        return redirect()->route('galeri')->with('success','Galeri berhasil dihapus.');
    }
}
