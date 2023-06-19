@extends('layouts.main')

@section('content')
    <a href="/user/admin/tambah" class="btn btn-success mb-3"><i class="fas fa-plus"></i> &nbsp;Tambah Admin</a>
    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Admin</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>Alfi Nurindiana</td>
                            <td>@aldiana</td>
                            <td>
                                <a href="/user/admin/edit" class="btn btn-pending btn-sm btn-warning"><i
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
