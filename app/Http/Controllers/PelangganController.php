<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $data = array(
            'data_pelanggan' => Pelanggan::all(),
        );

        return view('admin.pelanggan.index', $data);
    }


    public function tampilcreate()
    {
        return view('admin.pelanggan.create');
    }

    public function store(Request $request)
    {
        Pelanggan::create([
            'namapelanggan'      => $request->namapelanggan,
            'nohp'               => $request->nohp,
            'alamat'             => $request->alamat,
        ]);

        return redirect('/pelanggan');
    }

    public function update(PelangganUpdateRequest $request, Pelanggan $id)
    {
        if($request->validated()){
            $slug = Str::slug($request->namapelanggan, '-');
            $car->update($request->validated() + ['slug' => $slug]);
        }

        return redirect('/pelanggan');
    }

    public function tampiledit(Pelanggan $id)
    {
            $pelanggan = $id;
            
            return view('admin.pelanggan.edit', compact('id'));

    }

    public function destroy(Pelanggan $id)
    {
        $id->delete();
        return redirect('/pelanggan');
    }
}
