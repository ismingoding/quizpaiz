<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Car;
use App\Models\Pelanggan;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = array(
            'data_transaksi' => Transaksi::join('cars', 'cars.id', '=', 'tb_transaksi.id_mobil')
                                    ->join('tb_pelanggan', 'tb_pelanggan.id', '=', 'tb_transaksi.id_pelanggan')
                                    ->select('tb_transaksi.*', 'cars.nama_mobil', 'tb_pelanggan.namapelanggan')
                                    ->get(),
            'data_pelanggan' => Pelanggan::all(),
            'data_mobil' => Car::all(),
        );

        return view('admin.transaksi.index', $data);
    }


    public function tampilcreate()
    {
        return view('admin.transaksi.create');
    }

    public function store(Request $request)
    {
        Transaksi::create([
            'no_transaksi'      =>$request->no_transaksi,
            'tgl_transaksi'     =>$request->tgl_transaksi,
            'id_pelanggan'      =>$request->id_pelanggan,
            'id_mobil'          =>$request->id_mobil,
            'lamasewa'          =>$request->lamasewa,
            'total_bayar'       =>$request->total_bayar,
        ]);

        return redirect('/transaksi');
    }

    public function update(TransaksiUpdateRequest $request, Transaksi $id)
    {
        if($request->validated()){
            $slug = Str::slug($request->no_transaksi, '-');
            $car->update($request->validated() + ['slug' => $slug]);
        }

        return redirect('/transaksi');
    }

    public function tampiledit(Transaksi $id)
    {
            $transaksi = $id;
            
            return view('admin.transaksi.edit', compact('id'));

    }

    public function destroy(Transaksi $id)
    {
        $id->delete();
        return redirect('/transaksi');
    }
}
