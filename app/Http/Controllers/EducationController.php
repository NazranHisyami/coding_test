<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function FormEducation()
    {
        return view('user.education');
    }

    public function EducationStore(Request $request)
    {
        Education::create($request->all());
        return redirect('/form-riwayat');
    }
}
