<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Perkara;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class PDFController extends Controller
{
    //
    public function aktacerai ($id)
    {
        // $perkara = Perkara::all();
        $perkara = Perkara::FindOrFail($id);
        // $pdf = Pdf::loadView('akta-cerai', ['perkara' => $perkara]);
        $pdf = Pdf::loadView('akta-cerai', ['perkara' => $perkara]);


        // return $pdf->stream('test.pdf');
        return $pdf->download('akta-cerai.pdf');
    }
    public function salput ($id)
    {
        // $perkara = Perkara::all();
        $perkara = Perkara::FindOrFail($id);
        $pdf = Pdf::loadView('salinan-putusan', ['perkara' => $perkara]);


        // return $pdf->stream('test.pdf');
        return $pdf->download('salinan-putusan.pdf');
    }

        // Contoh metode untuk memformat tanggal
        public function formatTanggal($tanggal)
        {
            return Carbon::parse($tanggal)->format('d-F-Y');
        }
}