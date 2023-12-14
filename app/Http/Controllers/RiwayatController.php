<?php

// app/Http/Controllers/RiwayatController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Riwayat;

class RiwayatController extends Controller
{
    public function index()
    {
        return view('riwayat.index');
    }

    public function getData()
    {
        $riwayat = Riwayat::select('*');

        return DataTables::of($riwayat)
            ->addColumn('aksi', function ($row) {
                return '<button type="button" class="btn btn-warning btn-sm" onclick="editData(' . $row->id . ')">Edit</button>';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }
    public function store(Request $request)
    {
        $riwayat = riwayat::create($request->all());
        return response()->json($riwayat);
    }
    // app/Http/Controllers/RiwayatController.php

    public function edit($id)
    {
        $riwayat = Riwayat::findOrFail($id);

        return response()->json(['data' => $riwayat]);
    }

    public function update(Request $request)
    {
        $riwayat = Riwayat::findOrFail($request->edit_id);

        $riwayat->update($request->all());

        return response()->json(['message' => 'Data berhasil diperbarui']);
    }
}
