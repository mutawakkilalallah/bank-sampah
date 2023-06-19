<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function setoran()
    {
        $data = [
            'title' => 'Data Setoran'
        ];

        return view('transaksi.setoran', $data);
    }

    public function penarikan()
    {
        $data = [
            'title' => 'Data Penarikan'
        ];

        return view('transaksi.penarikan', $data);
    }

    public function penarikan_konfirmasi()
    {
        $data = [
            'title' => 'Konfirmasi Penarikan'
        ];

        return view('transaksi.penarikan_konfirmasi', $data);
    }

    public function setoran_tambah()
    {
        $data = [
            'title' => 'Tambah Setoran'
        ];

        return view('transaksi.setoran_tambah', $data);
    }

    public function penarikan_tambah()
    {
        $data = [
            'title' => 'Tarik Tunai'
        ];

        return view('transaksi.penarikan_tambah', $data);
    }
}
