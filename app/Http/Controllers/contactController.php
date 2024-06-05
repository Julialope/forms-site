<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contato');
    }

    public function submitForm(Request $request)
    {
        $data = $request->all();
        return view('contato')->with('data', $data);
    }
}
