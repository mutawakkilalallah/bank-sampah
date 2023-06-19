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
                    <input type="text" readonly="readonly" class="form-control-plaintext" id="nama">
                </div>
                <div class="form-group">
                    <label for="no_rekening">No Rekening</label>
                    <input type="number" readonly="readonly" class="form-control-plaintext" id="no_rekening">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" readonly="readonly" class="form-control-plaintext" id="username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" readonly="readonly" class="form-control-plaintext" id="email">
                </div>
                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="number" readonly="readonly" class="form-control-plaintext" id="no_hp">
                </div>
            </div>
        </form>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jenis Sampah</th>
                        <th>Kategori</th>
                        <th>Berat (Kg)</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>18 Juni 2023</td>
                            <td>Botol Sampah</td>
                            <td>Organik</td>
                            <td>10 Kg</td>
                            <td>Rp. 35.000</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>18 Juni 2023</td>
                            <td>Tarik Tunai</td>
                            <td>Rp. 35.000</td>
                            <td>
                                @if ($i % 2 == 0)
                                    <a href="#" class="badge bg-success">success</a>
                                @else
                                    <a href="#" class="badge bg-danger">pending</a>
                                @endif
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
