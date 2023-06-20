@extends('layouts.main')

@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Form {{ $title }}</h3>
        </div>
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label>Pilih Jenis Nasabah</label>
                    <select class="form-control">
                        <option value="" selected>-- Pilih Jenis Nasabah --</option>
                        <option value="1">Perorangan</option>
                        <option value="2">Kelompok</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rt">RT</label>
                    <input type="Number" class="form-control" id="rt">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="number" class="form-control" id="no_hp">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="pin">PIN</label>
                    <input type="password" class="form-control" id="pin">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
@endsection
