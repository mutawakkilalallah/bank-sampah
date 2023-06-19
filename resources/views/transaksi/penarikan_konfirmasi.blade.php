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
                    <input type="number" class="form-control" id="nominal" value="35000">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Konfirmasi</button>
            </div>
        </form>
    </div>
@endsection
