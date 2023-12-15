<?php

namespace App\Http\Controllers;

use App\Models\DepartemenWijaya;
use Illuminate\Http\Request;
use Yajra\Datatables\DatatablesServiceProvider;
use SweetAlert;

class DepartemenWijayaController extends Controller
{
    public function index()
    {
        $DepartemenWijaya = DepartemenWijaya::all();
        return view('DepartemenWijaya.index', compact('DepartemenWijaya'));
    }
    public function create()
    {
        return view('DepartemenWijaya.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'departemen'   => 'required'
        ]);

        DepartemenWijaya::create($data);
        return redirect('/DepartemenWijaya')->with('success', 'Data departemen wijaya berhasil ditambahkan!');
    }

    public function show($id)
    {
        $DepartemenWijaya = DepartemenWijaya::findOrFail($id);
        return view('DepartemenWijaya.show', compact('DepartemenWijaya'));
    }

    public function edit($id)
    {
        $DepartemenWijaya = DepartemenWijaya::findOrFail($id);
        return view('DepartemenWijaya.edit', compact('DepartemenWijaya'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'departemen'   => 'required'
        ]);

        DepartemenWijaya::whereId($id)->update($data);
        return redirect('/DepartemenWijaya')->with('success', 'Data departemen wijaya berhasil diupdate!');
    }

    public function destroy($id)
    {
        $DepartemenWijaya = DepartemenWijaya::findOrFail($id);
        $DepartemenWijaya->delete();
        return redirect('/DepartemenWijaya')->with('success', 'Data departemen wijaya berhasil dihapus!');
    }
    public function tambahData(Request $request)
    {
        $validated = $request->validate([
            'departemen' => 'required|max:255'
        ]);

        DepartemenWijaya::create($validated);

        return redirect('/DepartemenWijaya')->with('success', 'Data departemen Wijaya berhasil ditambahkan!');
    }
    public function editData(Request $request, $id)
    {
        $validated = $request->validate([
            'departemen' => 'required|max:255'
        ]);

        DepartemenWijaya::findOrFail($id)->update($validated);

        return redirect('/DepartemenWijaya')->with('success', 'Data departemen Wijaya berhasil diubah!');
    }
}
