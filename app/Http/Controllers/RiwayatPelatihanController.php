<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPelatihan;

class RiwayatPelatihanController extends Controller
{
    public function FormRiwayatPelatihan()
    {
        return view('user.riwayat_pelatihan');
    }

    public function RiwayatPelatihanStore(Request $request)
    {
        RiwayatPelatihan::create($request->all());
        return redirect('/form-riwayat-pekerjaan');
    }
}
