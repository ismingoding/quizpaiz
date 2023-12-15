@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Form Edit Data
                </div>
                <div class="card-body">
                    <form action="{{ route('pelanggan.update', $id->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="namapelanggan">Nama Pelanggan</label>
                            <input type="text" name="namapelanggan" class="form-control" value="{{ old('namapelanggan', $pelanggan->namapelanggan) }}">
                        </div>
                        <div class="form-group">
                            <label for="nohp">Harga Sewa</label>
                            <input type="text" name="nohp" class="form-control" value="{{ old('nohp', $pelanggan->nohp) }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="form-control" rows="4" cols="40" value="{{ old('alamat', $pelanggan->alamat) }}"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
@endsection