<?php

namespace App\Http\Controllers;

use App\Models\TertibPenyelenggaraan;
use App\Models\TertibUsaha;
use Illuminate\Http\Request;
use App\Models\PaketPekerjaan;
use Auth;

class ProfilController extends Controller
{
    //
    public function index()
    {
        $data = PaketPekerjaan::where('id_user', Auth::user()->id)->first();

        if (!isset($data)) {
            return redirect('/daftar');
        }
        return view('profil.index', [
            'title' => 'Profil',
            'row' => $data
        ]);
    }

    public function index2()
    {
        $data = TertibUsaha::where('id_user', Auth::user()->id)->first();
        if (!isset($data)) {
            return redirect('/daftar');
        }
        return view('profil.profiltertib', [
            'title' => 'Profil',
            'row' => $data
        ]);

    }

    public function index3()
    {
        $data = TertibPenyelenggaraan::where('id_user', Auth::user()->id)->first();
        if (!isset($data)) {
            return redirect('/daftar');
        }
        return view('profil.profilpenyelenggaraan', [
            'title' => 'Profil',
            'row' => $data
        ]);
    }
}