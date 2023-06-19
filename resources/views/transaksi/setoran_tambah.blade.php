@extends('layouts.main')

@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Form {{ $title }}</h3>
        </div>
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label>Pilih Nasabah</label>
                    <select class="form-control select2" style="width: 100%;">
                        <option value="" selected>Cari Nasabah ..</option>
                        @for ($i = 0; $i < 10; $i++)
                            <option value="1">Siti Aisyah - 2307119087</option>
                        @endfor
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih Jenis Sampah</label>
                    <select class="form-control">
                        <option value="" selected>-- Pilih Jenis Sampah --</option>
                        <option value="1">Botol Plastik</option>
                        <option value="2">Kantong Plastik</option>
                        <option value="3">Botol Kaca</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nominal">Berat (Kg)</label>
                    <input type="number" class="form-control" id="nominal">
                </div>
                <div class="form-group">
                    <label for="pin">PIN</label>
                    <input type="number" class="form-control" id="pin">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>
@endsection
