@extends('layouts.main')

@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Form {{ $title }}</h3>
        </div>
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="nominal">Nominal</label>
                    <input type="number" class="form-control" id="nominal">
                </div>
                <div class="form-group">
                    <label for="pin">PIN</label>
                    <input type="number" class="form-control" id="pin">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan <i class="text-warning text-sm">*Optional</i></label>
                    <textarea class="form-control" id="keterangan" rows="5"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Kirim</button>
            </div>
        </form>
    </div>
@endsection
