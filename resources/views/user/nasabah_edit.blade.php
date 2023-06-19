@extends('layouts.main')

@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Biodata</h3>
        </div>
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="no_rekening">No Rekening</label>
                    <input type="number" class="form-control" id="no_rekening" disabled readonly>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" disabled readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="number" class="form-control" id="no_hp">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Perbarui</button>
            </div>
        </form>
    </div>
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Ubah Password</h3>
        </div>
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Ubah Password</button>
            </div>
        </form>
    </div>
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Ubah PIN</h3>
        </div>
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="pin">PIN</label>
                    <input type="password" class="form-control" id="pin">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Ubah PIN</button>
            </div>
        </form>
    </div>
@endsection
