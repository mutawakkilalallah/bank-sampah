<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Jenis Sampah'
        ];

        return view('jenis.index', $data);
    }

    public function jenis_tambah()
    {
        $data = [
            'title' => 'Tambah Jenis Sampah'
        ];

        return view('jenis.tambah', $data);
    }

    public function jenis_edit()
    {
        $data = [
            'title' => 'Edit Jenis Sampah'
        ];

        return view('jenis.edit', $data);
    }
}
