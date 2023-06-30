<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use App\Http\Requests\BiodataRequest;

class FormController extends Controller
{
    public function Form()
    {
        return view('user.form');
    }

    public function BiodataStore(Request $request)
    {
        Biodata::create($request->all());
        return redirect('/form-education');
    }
}
