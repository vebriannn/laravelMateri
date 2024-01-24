<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarController extends Controller
{
    public function index(Request $request) {
        $email = $request->input('email');
        $pass = $request->input('pw');

        return view('hasilData', ['email' => $email, 'password' => $pass]);
    }
}
