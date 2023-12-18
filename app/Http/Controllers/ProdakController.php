<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodak;
use SweetAlert;
use Yajra\DataTables\Facades\DataTables;

class ProdakController extends Controller
{
    public function prodaks()
    {
        $prodaks = Prodak::latest()->paginate(5);
        return view('prodak.index', compact('prodaks'));
    }

    public function getProdak()
    {
        $prodak = Prodak::select([
            'id', 'name', 'price', 'nama_proses', 'klasifikasi_perubahan', 'pelaksanaan2ndQA',
            'item_perubahan', 'no_lembar_instruksi', 'tanggal_produksi_saat_perubahan', 'shift',
            'part_number_finish_good', 'kualitas', 'fakta_ng', 'pcdt', 'tanggal_perubahan_pcdt',
            'instruksi_kerja', 'tanggal_perubahan_instruksi_kerja', 'isir', 'tanggal_perubahan_isir',
            'pemahaman'
        ]);

        return DataTables::of($prodak)
            ->addColumn('action', function ($prodak) {
                // Add your action buttons or links here
                return '<button class="btn btn-sm btn-danger delete_prodak" data-id="' . $prodak->id . '">Delete</button>';
            })
            ->make(true);
    }
    public function addProdak(Request $request)
    {
        $prodak = new Prodak();
        $prodak->name = $request->name;
        $prodak->price = $request->price;
        // Tambahkan pengisian nilai untuk field lainnya sesuai dengan kebutuhan
        $prodak->nama_proses = $request->nama_proses;
        $prodak->klasifikasi_perubahan = $request->klasifikasi_perubahan;
        $prodak->pelaksanaan2ndQA = $request->pelaksanaan2ndQA;
        $prodak->item_perubahan = $request->item_perubahan;
        $prodak->no_lembar_instruksi = $request->no_lembar_instruksi;
        $prodak->tanggal_produksi_saat_perubahan = $request->tanggal_produksi_saat_perubahan;
        $prodak->shift = $request->shift;
        $prodak->part_number_finish_good = $request->part_number_finish_good;
        $prodak->kualitas = $request->kualitas;
        $prodak->fakta_ng = $request->fakta_ng;
        $prodak->pcdt = $request->pcdt;
        $prodak->tanggal_perubahan_pcdt = $request->tanggal_perubahan_pcdt;
        $prodak->instruksi_kerja = $request->instruksi_kerja;
        $prodak->tanggal_perubahan_instruksi_kerja = $request->tanggal_perubahan_instruksi_kerja;
        $prodak->isir = $request->isir;
        $prodak->tanggal_perubahan_isir = $request->tanggal_perubahan_isir;
        $prodak->pemahaman = $request->pemahaman;

        $prodak->save();

        return response()->json(['success' => "Berhasil menyimpan data"]);
    }


    public function updateProdak(Request $request)
    {
        $request->validate(
            [
                'up_name' => 'required|unique:prodaks,name,' . $request->up_id,
                'up_price' => 'required',
                'nama_proses' => 'required',
                'klasifikasi_perubahan' => 'required|in:design,proses',
                'pelaksanaan2ndQA' => 'required|in:ada,tidak',
                'item_perubahan' => 'required',
                'no_lembar_instruksi' => 'nullable',
                'tanggal_produksi_saat_perubahan' => 'required|date',
                'shift' => 'required|in:sift1,sift2',
                'part_number_finish_good' => 'required',
                'kualitas' => 'required|in:ok,ng',
                'fakta_ng' => 'nullable',
                'pcdt' => 'required|in:resived,not resived',
                'tanggal_perubahan_pcdt' => 'nullable|date',
                'instruksi_kerja' => 'required|in:resived,not resived',
                'tanggal_perubahan_instruksi_kerja' => 'nullable|date',
                'isir' => 'required|in:resived,not resived',
                'tanggal_perubahan_isir' => 'nullable|date',
                'pemahaman' => 'required|in:paham,kurang paham,tidak paham sama sekali',
                // Tambahkan validasi untuk field lainnya sesuai dengan kebutuhan
            ],
            [
                'up_name.required' => 'Name is required',
                'up_name.unique' => 'Prodak Already Exists',
                'up_price.required' => 'Price is required',
                'nama_proses.required' => 'Nama Proses is required',
                'klasifikasi_perubahan.required' => 'Klasifikasi Perubahan is required',
                'klasifikasi_perubahan.in' => 'Klasifikasi Perubahan harus design atau proses',
                'pelaksanaan2ndQA.required' => 'Pelaksanaan 2nd QA is required',
                'pelaksanaan2ndQA.in' => 'Pelaksanaan 2nd QA harus ada atau tidak',
                'item_perubahan.required' => 'Item Perubahan is required',
                'tanggal_produksi_saat_perubahan.required' => 'Tanggal Produksi Saat Perubahan is required',
                'tanggal_produksi_saat_perubahan.date' => 'Tanggal Produksi Saat Perubahan harus dalam format tanggal yang valid',
                'shift.required' => 'Shift is required',
                'shift.in' => 'Shift harus sift1 atau sift2',
                'part_number_finish_good.required' => 'Part Number Finish Good is required',
                'kualitas.required' => 'Kualitas is required',
                'kualitas.in' => 'Kualitas harus ok atau ng',
                'fakta_ng.nullable' => 'Fakta NG harus null atau string',
                'pcdt.required' => 'PCDT is required',
                'pcdt.in' => 'PCDT harus resived atau not resived',
                'tanggal_perubahan_pcdt.nullable' => 'Tanggal Perubahan PCDT harus null atau dalam format tanggal yang valid',
                'instruksi_kerja.required' => 'Instruksi Kerja is required',
                'instruksi_kerja.in' => 'Instruksi Kerja harus resived atau not resived',
                'tanggal_perubahan_instruksi_kerja.nullable' => 'Tanggal Perubahan Instruksi Kerja harus null atau dalam format tanggal yang valid',
                'isir.required' => 'ISIR is required',
                'isir.in' => 'ISIR harus resived atau not resived',
                'tanggal_perubahan_isir.nullable' => 'Tanggal Perubahan ISIR harus null atau dalam format tanggal yang valid',
                'pemahaman.required' => 'Pemahaman is required',
                'pemahaman.in' => 'Pemahaman harus paham, kurang paham, atau tidak paham sama sekali',
                // Tambahkan pesan validasi untuk field lainnya sesuai dengan kebutuhan
            ]
        );

        Prodak::whereId($request->up_id)->update([
            'name' => $request->up_name,
            'price' => $request->up_price,
            // Tambahkan pengisian nilai untuk field lainnya sesuai dengan kebutuhan
            'nama_proses' => $request->nama_proses,
            'klasifikasi_perubahan' => $request->klasifikasi_perubahan,
            'pelaksanaan2ndQA' => $request->pelaksanaan2ndQA,
            'item_perubahan' => $request->item_perubahan,
            'no_lembar_instruksi' => $request->no_lembar_instruksi,
            'tanggal_produksi_saat_perubahan' => $request->tanggal_produksi_saat_perubahan,
            'shift' => $request->shift,
            'part_number_finish_good' => $request->part_number_finish_good,
            'kualitas' => $request->kualitas,
            'fakta_ng' => $request->fakta_ng,
            'pcdt' => $request->pcdt,
            'tanggal_perubahan_pcdt' => $request->tanggal_perubahan_pcdt,
            'instruksi_kerja' => $request->instruksi_kerja,
            'tanggal_perubahan_instruksi_kerja' => $request->tanggal_perubahan_instruksi_kerja,
            'isir' => $request->isir,
            'tanggal_perubahan_isir' => $request->tanggal_perubahan_isir,
            'pemahaman' => $request->pemahaman,
            // Tambahkan pengisian nilai untuk field lainnya sesuai dengan kebutuhan
        ]);

        return response()->json([
            'status' => 'success'
        ]);
    }


    public function deleteProdak(Request $request)
    {
        Prodak::find($request->prodak_id)->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }
}
