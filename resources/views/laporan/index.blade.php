@extends('layouts.main')

@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Pilih Periode</h3>
        </div>
        <form>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pilih Jenis Laporan</label>
                            <select class="form-control">
                                <option value="" selected>-- Pilih Jenis Laporan --</option>
                                <option value="1">Laporan Sampah (by Jenis)</option>
                                <option value="2">Laporan Sampah (Organik / Non Organik)</option>
                                <option value="3">Laporan Transaksi & Keuangan</option>
                                <option value="4">Laporan Nasabah & Saldo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="date-start">Tanggal Awal</label>
                            <input type="date" class="form-control" id="date-start">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="date-end">Tanggal Akhir</label>
                            <input type="date" class="form-control" id="date-end">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="date-end"></label><br>
                            <button type="submit" class="btn btn-success mt-2"><i class="fas fa-print"></i>
                                &nbsp;Cetak</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
