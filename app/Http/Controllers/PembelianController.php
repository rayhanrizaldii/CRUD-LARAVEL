<?php

namespace App\Http\Controllers;

use App\Models\obat;
use App\Models\pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    //read data
    public function adminEditBuy($id)
    {
        $dataedit = pembelian::find($id);
        $editobat = obat::all();
        return view('pembelian.editBuy', ['data' => $dataedit, 'dataobat' => $editobat]);
        
    }
    
    public function adminAddBuy()
    {
        $data = obat::all();
        return view('pembelian.addBuy', compact('data'));
    }

    //create data
    public function AddAdminBuy(Request $request)
    {
        $newData = new pembelian();
        $newData->nama_pembeli = $request->nama_pembeli;
        $newData->jumlah = $request->jumlah;
        $newData->id_obat = $request->id_obat;

        //Total Harga
        $obat = obat::findOrFail($request->id_obat);
        $totalharga = $obat->harga_obat * $request->jumlah;
        $newData->total = $totalharga;

        $newData->save();

        return redirect('listBuy');
    }

    //update data
    public function EditAdminBuy(Request $request)
    {

        pembelian::where('id', $request->id)->update(
            [
                'nama_pembeli' => $request->nama_pembeli,
                'jumlah' => $request->jumlah,
                'id_obat' => $request->id_obat,
            ]
        );
        
        return redirect()->route('listBuy');
    }

    //delete data
    public function DeleteAdminBuy($id)
    {
        $dataDelete = pembelian::find($id);
        $dataDelete->delete();
        return redirect()->route('listBuy');
    }
}
