@extends('layouts.main')

@section('content')
    <a href="/jenis/tambah" class="btn btn-success mb-3"><i class="fas fa-plus"></i> &nbsp;Tambah Jenis Sampah</a>
    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga */Kg</th>
                        <th>Jumlah Sampah (Kg)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>Botol Plastik</td>
                            <td>Organik</td>
                            <td>Rp. 3.500/Kg</td>
                            <td>187 Kg</td>
                            <td>
                                <a href="/jenis/edit" class="btn btn-pending btn-sm btn-warning"><i class="fas fa-pen"></i>
                                    &nbsp;Edit</a>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
