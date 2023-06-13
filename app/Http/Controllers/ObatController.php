<?php

namespace App\Http\Controllers;
use App\Models\obat;


use Illuminate\Http\Request;

class ObatController extends Controller
{
    //read data
    public function adminEditObat($id)
    {
        $dataedit = obat::find($id);
        return view('obat.editMed', ['data' => $dataedit]);
    }
    public function adminAddObat()
    {
        return view('obat.addMed');
    }

    //create data
    public function AddAdminObat(Request $request)
    {
        $newData = new obat();
        $newData->nama_obat = $request->nama_obat;
        $newData->harga_obat = $request->harga_obat;
        $newData->jenis_obat = $request->jenis_obat;
        
        $newData->save();

        return redirect()->route('listMed');
    }

    //update data
    public function EditAdminObat(Request $request)
    {

        obat::where('id', $request->id)->update(
            [
                'nama_obat' => $request->nama_obat,
                'harga_obat' => $request->harga_obat,
                'jenis_obat' => $request->jenis_obat,
            ]
        );
        // dd($request);
        return redirect()->route('listMed');
        
    }

    //delete data
    public function DeleteAdminObat($id)
    {
        $dataDelete = obat::find($id);
        $dataDelete->delete();
        return redirect()->route('listMed');
    }
}
