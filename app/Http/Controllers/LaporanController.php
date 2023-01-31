<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\transaksi;
use \PDF;

class LaporanController extends Controller
{
    public function index()
    {
    	$transaksi = Transaksi::all();
    	return view('laporan.index',['transaksi'=>$transaksi]);
    }

    public function cetak_pdf()
    {
    	$transaksi = Transaksi::all();

    	$pdf = PDF::loadview('laporan.pdf',['transaksi'=>$transaksi]);
    	return $pdf->download('laporan.pdf');
    }
}
