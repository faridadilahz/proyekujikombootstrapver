<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Beritas;
use App\Models\Galeris;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalBerita = Beritas::count();
        $totalGaleri = Galeris::count();

        $lastBerita = Beritas::latest()->first();
        $lastGaleri = Galeris::latest()->first();

        $lastBeritaText = $lastBerita 
            ? 'Terakhir ' . $lastBerita->created_at->diffForHumans() 
            : 'Belum ada postingan';

            $lastGaleriText = $lastGaleri
            ? 'Terakhir ' . $lastGaleri->created_at->diffForHumans() 
            : 'Belum ada postingan';

            return view('admin.dasbor', compact(
                'totalBerita',
                'totalGaleri',
                'lastBeritaText',
                'lastGaleriText'
            ));
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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
