<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Pemain;
use App\Models\Tim;

class PemainController extends Controller
{
    public function index()
    {   
        $timList = Tim::all(); // Mengambil semua data tim dari database
        return view('/form/Player', ['timList' => $timList]);
    }
    public function createPemain(Request $request)
    {
        $request->validate([
            'Nama_Pemain' => 'required|unique:pemain,Nama_Pemain', // Validasi agar nama pemain unik
            'Tanggal_Lahir' => 'nullable|date',
            'Tempat_Lahir' => 'nullable',
            'Tinggi_Badan' => 'nullable|integer',
            'Berat_Badan' => 'nullable|integer',
            'Posisi_Pemain' => 'required',
            'Nomor_Punggung' => 'nullable|integer',
            'ID_Tim' => 'required|exists:tim,ID_Tim', // Validasi ID_Tim sesuai dengan yang ada di tabel Tim
        ]);

        Pemain::create([
            'Nama_Pemain' => $request->Nama_Pemain,
            'Tanggal_Lahir' => $request->Tanggal_Lahir,
            'Tempat_Lahir' => $request->Tempat_Lahir,
            'Tinggi_Badan' => $request->Tinggi_Badan,
            'Berat_Badan' => $request->Berat_Badan,
            'Posisi_Pemain' => $request->Posisi_Pemain,
            'Nomor_Punggung' => $request->Nomor_Punggung,
            'ID_Tim' => $request->ID_Tim,
        ]);

        return redirect('/Player')->with('success', 'Tim berhasil ditambahkan.');
    }
}


