@extends('layouts.main')

@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Pilih Periode</h3>
        </div>
        <form>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="date-start">Tanggal Awal</label>
                            <input type="date" class="form-control" id="date-start">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="date-end">Tanggal Akhir</label>
                            <input type="date" class="form-control" id="date-end">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="date-end"></label><br>
                            <button type="submit" class="btn btn-success mt-2"><i class="fas fa-filter"></i>
                                &nbsp;Filter</button>
                        </div>
                    </div>
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
                        {{-- admin only --}}
                        <th>Nama Nasabah</th>
                        {{-- admin only --}}
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        {{-- admin only --}}
                        <th>Action</th>
                        {{-- admin only --}}
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>18 Juni 2023</td>
                            {{-- admin only --}}
                            <td>Alfi Nurindiana</td>
                            {{-- admin only --}}
                            <td>Tarik Tunai</td>
                            <td>Rp. 35.000</td>
                            <td>
                                @if ($i % 2 == 0)
                                    <a href="#" class="badge bg-success">success</a>
                                @else
                                    <a href="#" class="badge bg-danger">pending</a>
                                @endif
                            </td>
                            <td>
                                <a href="/transaksi/penarikan/konfirmasi"
                                    class="btn btn-pending btn-sm btn-success @if ($i % 2 == 0) disabled @endif"><i
                                        class="fas fa-check"></i>
                                    &nbsp;Konfirmasi</a>
                            </td>
                            {{-- admin only --}}
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection
