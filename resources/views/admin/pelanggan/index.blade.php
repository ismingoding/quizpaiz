@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Pelanggan</h3>
            <a href="{{ route('pelanggan.tampilcreate') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>No HP</th>
                            <th>Alamat</th>
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
                                <td>{{ $row->namapelanggan }}</td>
                                <td>{{ $row->nohp }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>
                                    <a href="{{ route('pelanggan.tampiledit') }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form onclick="return confirm('anda yakin menghapus data ini?')" class="d-inline" action="{{ route('pelanggan.destroy', $row->id) }}" method="POST">
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