<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    public function index(Request $request)
    {
        $pemesanan = Pemesanan::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $pemesanan = Pemesanan::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('pemesanan.index', compact('pemesanan'));
    }//end method

    public function create()
    {

        return view('pemesanan.create');
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $model = new Pemesanan;
        $model->name = $request->name;
        $model->email = $request->email;
        $model->no_telp = $request->no_telp;
        $model->kota_asal = $request->kota_asal;

        $model->save();


        return redirect()->route('pemesanan.index');
    }//end method


    public function destroy($id)
    {
        $data = Pemesanan::findOrFail($id);
        $data->delete();
        return redirect()->route('pemesanan.index');
    }//end method


    public function show($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        return view('pemesanan.show',compact('pemesanan'));
    }


    public function edit($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        return view('pemesanan.edit',compact('pemesanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $model = Pemesanan::findOrFail($id);
    $model->name = $request->name;
    $model->email = $request->email;
    $model->no_telp = $request->no_telp;
    $model->kota_asal = $request->kota_asal;
    $model->save();

       return redirect()->route('pemesanan.index');
    }

}
