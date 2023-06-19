@extends('layouts.main')

@section('content')
    <a href="/user/nasabah/tambah" class="btn btn-success mb-3"><i class="fas fa-plus"></i> &nbsp;Tambah Nasabah</a>
    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Nasabah</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Saldo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>Siti Aisyah</td>
                            <td>@aisyah</td>
                            <td>aisyah@gmail.com</td>
                            <td>62812333444555</td>
                            <td>Rp. 35.000</td>
                            <td>
                                <a href="/user/nasabah/detail" class="btn btn-pending btn-sm btn-info"><i
                                        class="fas fa-eye"></i>
                                    &nbsp;Detail</a>
                                <a href="/user/nasabah/edit" class="btn btn-pending btn-sm btn-warning"><i
                                        class="fas fa-pen"></i>
                                    &nbsp;Edit</a>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
