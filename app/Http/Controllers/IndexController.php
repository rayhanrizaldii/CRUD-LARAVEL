<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;
use App\Models\pembelian;

class IndexController extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function addMed()
    {
        return view('obat.addMed');
    }

    public function listMed(Request $request)
    {
        if ($request->has('search')) {
            $allData = obat::where('nama_obat', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $allData = obat::paginate(5);
        }
        return view('obat.listMed', ['data' => $allData]);
    }

    public function addBuy()
    {
        $data = obat::all();
        return view('pembelian.addBuy', compact('data'));
    }
    public function listBuy()
    {
        $allData = pembelian::all();

        // Hitung total harga untuk setiap pembelian
        foreach ($allData as $data) {
            $obat = obat::findOrFail($data->id_obat);
            $totalharga = $obat->harga_obat * $data->jumlah;
            $data->totalharga = $totalharga;
        }

        return view('pembelian.listBuy', ['data' => $allData]);
    }
}
