<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function cetakPdf(transaksi $transaksi)
    {
    $transaksi = $transaksi::all();
    $pdf = PDF::loadView('transaksi.cetak_pdf', compact('transaksi'))->output();

    // Mengirimkan PDF sebagai respons
    return response($pdf, 200)
        ->header('Content-Type', 'application/pdf')
        ->header('Content-Disposition', 'attachment; filename="transaksi.pdf"');
    // $pdf = PDF::loadView('transaksi.cetak_pdf',compact('transaksi'))->response()->stream();
    // return response()->streamDownload(
    //     $pdf->download('transaksi.pdf')
    }
}

