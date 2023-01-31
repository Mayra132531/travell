<?php

namespace App\Http\Controllers;
use App\Models\Pemesanan;
use App\Models\Detail_Pemesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Detail_PemesananController extends Controller
{
    public function index(Request $request)
    {
        $detail_pemesanan = Detail_Pemesanan::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $detail_pemesanan = Detail_Pemesanan::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('detail_pemesanan.index', compact('detail_pemesanan'));
    }//end method

    public function create()
    {
        $pemesanan= Pemesanan::get();
        return view('detail_pemesanan.create', compact('pemesanan'));
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $model = new Detail_Pemesanan;
        $model->pemesanan_id = $request->pemesanan_id;
        $model->pesawat = $request->pesawat;
        $model->tanggal_beli = $request->tanggal_beli;
        $model->tanggal_berangkat = $request->tanggal_berangkat;
        $model->bandara_asal = $request->bandara_asal;
        $model->bandara_tujuan = $request->bandara_tujuan;

        $model->save();

        return redirect()->route('detail_pemesanan.index');
    }//end method


    public function destroy($id)
    {
        $data = Detail_Pemesanan::findOrFail($id);
        $data->delete();
        return redirect()->route('detail_pemesanan.index');
    }//end method


    public function show($id)
    {
        $detail_pemesanan = Detail_Pemesanan::findOrFail($id);
        return view('detail_pemesanan.show',compact('detail_pemesanan'));
    }


    public function edit($id)
    {
        $pemesanan = Pemesanan::all();
        $detail_pemesanan = Detail_Pemesanan::findOrFail($id);
        return view('detail_pemesanan.edit',compact('detail_pemesanan','pemesanan'));
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
        $model = Detail_Pemesanan::find($id);
        // $model = $request->all();
        $model->pemesanan_id = $request->pemesanan_id;
        $model->pesawat = $request->pesawat;
        $model->tanggal_berangkat = $request->tanggal_berangkat;
        $model->tanggal_beli = $request->tanggal_beli;
        $model->bandara_tujuan = $request->bandara_tujuan;
        $model->bandara_asal = $request->bandara_asal;

        $model->save();

       return redirect()->route('detail_pemesanan.index');
    }

}
