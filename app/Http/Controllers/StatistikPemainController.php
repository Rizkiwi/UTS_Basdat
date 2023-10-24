<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatistikPemainController extends Controller
{
    public function stat()
    {
        $statistics = DB::table('pemain')
        ->select(
            'pemain.Nama_Pemain',
            'statistik_pemain.Jumlah_Pertandingan',
            'statistik_pemain.Jumlah_Gol',
            'statistik_pemain.Jumlah_Assist',
            'statistik_pemain.Kartu_Kuning',
            'statistik_pemain.Kartu_Merah',
            'statistik_pemain.Penyelamatan',
            'statistik_pemain.Clean_Sheet',
            'statistik_pemain.Tahun'
        )
        ->join('statistik_pemain', 'pemain.ID_Pemain', '=', 'statistik_pemain.ID_Pemain')
        ->take(20)
        ->get();
        return view('Statistics', ['statistics' => $statistics]);
    }
}
