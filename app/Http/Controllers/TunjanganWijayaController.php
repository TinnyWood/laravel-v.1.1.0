<?php

namespace App\Http\Controllers;

use App\Models\TunjanganWijaya;
use Illuminate\Http\Request;
use SweetAlert;

class TunjanganWijayaController extends Controller
{
    public function index()
    {
        $TunjanganWijaya = TunjanganWijaya::all();
        return view('TunjanganWijaya.index', compact('TunjanganWijaya'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
        ]);

        TunjanganWijaya::create($request->all());
        alert()->success('Success!', 'Data berhasil ditambahkan');
        return redirect('/TunjanganWijaya')->with('success', 'Data tunjangan wijaya berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $TunjanganWijaya = TunjanganWijaya::findOrFail($id);
        return view('TunjanganWijaya.edit', compact('TunjanganWijaya'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tunjangan' => 'required',
            'total' => 'required',
        ]);

        $tunjanganWijaya = TunjanganWijaya::findOrFail($id);
        $tunjanganWijaya->update($request->all());
        alert()->success('Success!', 'Data berhasil diupdate');
        return redirect('/TunjanganWijaya')->with('success', 'Data tunjangan wijaya berhasil diupdate!');
    }

    public function destroy($id)
    {
        $tunjanganWijaya = TunjanganWijaya::findOrFail($id);
        $tunjanganWijaya->delete();
        alert()->success('Success!', 'Data berhasil dihapus');
        return redirect('/TunjanganWijaya')->with('success', 'Data tunjangan wijaya berhasil dihapus!');
    }
}
