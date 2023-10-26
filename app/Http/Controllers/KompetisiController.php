<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kompetisi; 
use Illuminate\Support\Facades\Validator;

class KompetisiController extends Controller
{
    public function index()
    {
       return view('/form/index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Nama_Kompetisi' => 'required|unique:kompetisi,Nama_Kompetisi',
            'Tanggal_Mulai' => 'nullable|date',
            'Tanggal_Berakhir' => 'nullable|date',
            'Juara' => 'max:255',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        Kompetisi::create([
            'Nama_Kompetisi' => $request->input('Nama_Kompetisi'),
            'Tanggal_Mulai' => $request->input('Tanggal_Mulai'),
            'Tanggal_Berakhir' => $request->input('Tanggal_Berakhir'),
            'Juara' => $request->input('Juara'),
        ]);

        return redirect('/form')->with('success', 'Kompetisi berhasil ditambahkan.');
    }
}

