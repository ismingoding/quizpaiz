@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Data Transaksi</h3>
            <a href="{{ route('transaksi.tampilcreate') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Tanggal Transaksi</th>
                            <th>Nama Pelanggan</th>
                            <th>Mobil</th>
                            <th>Lama Sewa</th>
                            <th>Total Bayar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @forelse($data_pelanggan as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->no_transaksi }}</td>
                                <td>{{ $row->tgl_transaksi }}</td>
                                <td>{{ $row->namapelanggan }}</td>
                                <td>{{ $row->nama_mobil }}</td>
                                <td>{{ $row->lamasewa }}</td>
                                <td>{{ $row->total_bayar }}</td>
                                <td>
                                    <a href="{{ route('transaksi.tampiledit') }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form onclick="return confirm('anda yakin menghapus data ini?')" class="d-inline" action="{{ route('transaksi.destroy', $row->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection