<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPekerjaan;

class RiwayatPekerjaanController extends Controller
{
    public function FormRiwayatPekerjaan()
    {
        return view('user.riwayat_pekerjaan');
    }

    public function RiwayatPekerjaanStore(Request $request)
    {
        RiwayatPekerjaan::create($request->all());
    }
}
