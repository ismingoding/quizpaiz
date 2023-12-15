@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="no_transaksi">No Transaksi</label>
                    <input type="text" name="no_transaksi" class="form-control" value="{{ old('no_transaksi') }}">
                </div>
                <div class="form-group">
                    <label for="tgl_transaksi">Tanggal Transaksi</label>
                    <input type="date" name="tgl_transaksi" class="form-control" value="{{ old('tgl_transaksi') }}">
                </div>
                <select name="id_pelanggan" class="form-control" required>
                    <option value="">-- Pilih Pelanggan --</option>
                            @foreach ($data_pelanggan as $j)
                                    <option value="{{ $j->id }}">{{ $j->namapelanggan }}</option>
                            @endforeach
                </select>
                <select name="id_mobil" class="form-control" required>
                    <option value="">-- Pilih Pelanggan --</option>
                            @foreach ($data_mobil as $j)
                                    <option value="{{ $j->id }}">{{ $j->nama_mobil }}</option>
                            @endforeach
                </select>
                <div class="form-group">
                    <label for="id_mobil">Mobil</label>
                    <input type="text" name="id_mobil" class="form-control" value="{{ old('id_mobil') }}">
                </div>
                <div class="form-group">
                    <label for="lamasewa">Lama Sewa</label>
                    <input type="number" name="lamasewa" class="form-control" value="{{ old('lamasewa') }}">
                </div>
                <div class="form-group">
                    <label for="total_bayar">Total Bayar</label>
                    <input type="number" name="total_bayar" class="form-control" value="{{ old('total_bayar') }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection