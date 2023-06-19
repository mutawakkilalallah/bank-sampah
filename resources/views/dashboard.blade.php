@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="small-box bg-teal">
                <div class="inner">
                    <h3>Rp. 7.268.500</h3>

                    <p>Total Saldo Tersisa</p>
                </div>
                <div class="icon">
                    <i class="fas fa-wallet"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="small-box bg-navy">
                <div class="inner">
                    <h3>Rp. 38.168.000</h3>

                    <p>Total Transaksi Tercatat</p>
                </div>
                <div class="icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row">
            <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                    <span class="description-percentage text-teal">
                        7 Hari Terakhir</span>
                    <h5 class="description-header">18</h5>
                    <span class="description-text">User</span>
                </div>
            </div>

            <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                    <span class="description-percentage text-teal">
                        7 Hari Terakhir</span>
                    <h5 class="description-header">48</h5>
                    <span class="description-text">Transaksi</span>
                </div>
            </div>
            <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                    <span class="description-percentage text-maroon">
                        30 Hari Terakhir</span>
                    <h5 class="description-header">63</h5>
                    <span class="description-text">User</span>
                </div>
            </div>

            <div class="col-sm-3 col-6">
                <div class="description-block border-right">
                    <span class="description-percentage text-maroon">
                        30 Hari Terakhir</span>
                    <h5 class="description-header">228</h5>
                    <span class="description-text">Transaksi</span>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-4 col-12">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="small-box bg-olive">
                        <div class="inner">
                            <h3>13.446 KG</h3>

                            <p>Sampah</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-trash"></i>
                        </div>
                        <a href="#" class="small-box-footer">Selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="small-box bg-indigo">
                        <div class="inner">
                            <h3>184</h3>

                            <p>User</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer">Selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="small-box bg-pink">
                        <div class="inner">
                            <h3>11.243</h3>

                            <p>Transaksi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <a href="#" class="small-box-footer">Selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>6.463</h3>

                            <p>Setoran</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <a href="#" class="small-box-footer">Selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>3.848</h3>

                            <p>Penarikan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-money-bill-wave-alt"></i>
                        </div>
                        <a href="#" class="small-box-footer">Selengkapnya <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <h5>Setoran & Penarikan Terakhir</h5>
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No</th>
                                <th>Nama</th>
                                <th>Jumlah (Kg)</th>
                                <th>Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 5; $i++)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>Alfi Nurindiana</td>
                                    <td>18 Kg</td>
                                    <td>Rp. 175.0000 </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No</th>
                                <th>Nama</th>
                                <th>Nominal</th>
                                <th style="width: 40px">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 5; $i++)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>Alfi Nurindiana</td>
                                    <td>Rp. 175.0000 </td>
                                    <td>
                                        @if ($i % 2 == 0)
                                            <span class="badge bg-success">success</span>
                                        @else
                                            <span class="badge bg-danger">pending</span>
                                        @endif
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            @for ($i = 0; $i < 5; $i++)
                <div class="info-box mb-3 bg-purple">
                    <span class="info-box-icon"><i class="fas fa-boxes"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Botol Plastik</span>
                        <span class="info-box-number">178 Kg</span>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
