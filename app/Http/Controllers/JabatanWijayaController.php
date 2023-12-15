<?php

namespace App\Http\Controllers;

use App\Models\JabatanWijaya;
use App\Models\DepartemenWijaya;
use App\Models\TunjanganWijaya;
use Illuminate\Http\Request;
use SweetAlert;

class JabatanWijayaController extends Controller
{
    public function index()
    {
        $jabatanwijayas = JabatanWijaya::all();
        return view('jabatanwijaya.index', compact('jabatanwijayas'));
    }
    public function dashboard()
    {
        $JabatanWijaya_list = JabatanWijaya::all();
        $TunjanganWijaya_list = TunjanganWijaya::all();
        $DepartemenWijaya_list = DepartemenWijaya::all();
        $total_JabatanWijaya = $JabatanWijaya_list->count();
        $total_TunjanganWijaya = $TunjanganWijaya_list->count();
        $total_DepartemenWijaya = $DepartemenWijaya_list->count();

        return view('dashboard', compact('total_JabatanWijaya', 'total_TunjanganWijaya', 'total_DepartemenWijaya'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'jabatan'   => 'required',
            'deskripsi' => 'required',
            'gaji'      => 'required|integer'
        ]);
        alert()->success('Success!', 'Data berhasil ditambahkan');

        JabatanWijaya::create($data);
        return redirect('/jabatanwijaya')->with('success', 'Data jabatan wijaya berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $jabatanwijaya = JabatanWijaya::findOrFail($id);
        return view('jabatanwijaya.edit', compact('jabatanwijaya'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'jabatan'   => 'required',
            'deskripsi' => 'required',
            'gaji'      => 'required|integer'
        ]);
        alert()->success('Success!', 'Data berhasil diupdate');

        JabatanWijaya::whereId($id)->update($data);
        return redirect('/jabatanwijaya');
    }

    public function destroy($id)
    {
        $jabatanwijaya = JabatanWijaya::findOrFail($id);
        $jabatanwijaya->delete();
        alert()->success('Success!', 'Data berhasil dihapus');
        return redirect('/jabatanwijaya');
    }

    public function updateJabatan(Request $request)
    {
        JabatanWijaya::whereId($request->up_id)->update([
            'jabatan' => $request->up_jabatan,
            'deskripsi' => $request->up_deskripsi,
            'gaji' => $request->up_gaji,
        ]);

        return response()->json([
            'status' => 'success'
        ]);
    }
}
