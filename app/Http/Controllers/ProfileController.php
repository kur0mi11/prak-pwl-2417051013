<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "Indriyani Talitha Putri", $npm = "2417051013", $kelas = "Ilmu Komputer-A")
    {
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,
        ];

        return view('profile', $data);
    }
}
