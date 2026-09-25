<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function proses(Request $request)
    {
        $nama_pelapor = $request->input('nama_pelapor');
        $lokasi = $request->input('lokasi');
        $tinggi_genangan = $request->input('tinggi_genangan');

        if ($tinggi_genangan >= 100) {
            $status = 'Bahaya (Siaga 1 - Evakuasi Segera!)';
            $warna_status = 'red';
        } elseif ($tinggi_genangan >= 50) {
            $status = 'Waspada (Siaga 2)';
            $warna_status = 'orange';
        } else {
            $status = 'Aman / Genangan Rendah';
            $warna_status = 'green';
        }

        return view('hasil', compact('nama_pelapor', 'lokasi', 'tinggi_genangan', 'status', 'warna_status'));
    }
}

