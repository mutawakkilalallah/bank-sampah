<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profil()
    {
        $data = [
            'title' => 'Profil'
        ];

        return view('user.profil', $data);
    }

    public function nasabah()
    {
        $data = [
            'title' => 'Data Nasabah'
        ];

        return view('user.nasabah', $data);
    }

    public function nasabah_tambah()
    {
        $data = [
            'title' => 'Tambah Nasabah'
        ];

        return view('user.nasabah_tambah', $data);
    }

    public function nasabah_edit()
    {
        $data = [
            'title' => 'Edit Nasabah'
        ];

        return view('user.nasabah_edit', $data);
    }

    public function nasabah_detail()
    {
        $data = [
            'title' => 'Detail Nasabah'
        ];

        return view('user.nasabah_detail', $data);
    }

    public function admin()
    {
        $data = [
            'title' => 'Data Admin'
        ];

        return view('user.admin', $data);
    }

    public function admin_tambah()
    {
        $data = [
            'title' => 'Tambah Admin'
        ];

        return view('user.admin_tambah', $data);
    }

    public function admin_edit()
    {
        $data = [
            'title' => 'Edit Admin'
        ];

        return view('user.admin_edit', $data);
    }
}
