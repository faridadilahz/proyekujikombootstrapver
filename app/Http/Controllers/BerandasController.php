<?php

namespace App\Http\Controllers;

use App\Models\Berandas;
use App\Models\Beritas;
use App\Models\Galeris;
use Illuminate\Http\Request;

class BerandasController extends Controller
{

    public function showBeranda()
    {
        $beritas = Beritas::latest()->take(3)->get();
        $galeris = Galeris::latest()->take(3)->get();

        return view('guest.beranda', compact('beritas', 'galeris'));
    }

    public function berita()
    {
        $beritas = Beritas::latest()->get();
        return view('guest.berita', compact('beritas'));
    }

    public function showBerita($id)
    {
        $beritas = Beritas::findOrFail($id);
        return view('guest.detailberita', compact('beritas'));
    }

    public function galeri()
    {
        $galeris = Galeris::latest()->get();
        return view('guest.galeri', compact('galeris'));
    }

    public function showGaleri($id)
    {
        $galeris = Galeris::findOrFail($id);
        return view('guest.detailgaleri', compact('galeris'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Berandas $berandas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berandas $berandas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berandas $berandas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berandas $berandas)
    {
        //
    }
}
