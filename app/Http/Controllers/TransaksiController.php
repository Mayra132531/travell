<?php

namespace App\Http\Controllers;
use App\Models\Pemesanan;
use App\Models\Detail_Pemesanan;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        $transaksi = Transaksi::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $transaksi = Transkasi::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('transaksi.index', compact('transaksi'));
    }//end method

    public function create()
    {
        $pemesanan= Pemesanan::get();
        $detail_pemesanan= Detail_Pemesanan::get();
        return view('transaksi.create', compact('pemesanan','detail_pemesanan'));
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $model = new Transaksi;
        $model->pemesanan_id = $request->pemesanan_id;
        $model->detail_pemesanan_id = $request->detail_pemesanan_id;
        $model->harga = $request->harga;
        $model->pembayaran = $request->pembayaran;
        $model->status = $request->status;

        $model->save();



        return redirect()->route('transaksi.index');
    }//end method


    public function destroy($id)
    {
        $data = Transaksi::findOrFail($id);
        $data->delete();
        return redirect()->route('transaksi.index');
    }//end method


    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show',compact('transaksi'));
    }


    public function edit($id)
    {
        $pemesanan= Pemesanan::get();
        $detail_pemesanan= Detail_Pemesanan::get();
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit',compact('transaksi','pemesanan','detail_pemesanan'));
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
        $model = Transaksi::findOrFail($id);
        $model->pemesanan_id = $request->pemesanan_id;
        $model->detail_pemesanan_id = $request->detail_pemesanan_id;
        $model->harga = $request->harga;
        $model->pembayaran = $request->pembayaran;
        $model->status = $request->status;

        $model->save();

       return redirect()->route('transaksi.index');
    }

}
