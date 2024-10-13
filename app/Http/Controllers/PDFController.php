<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Perkara;

class PDFController extends Controller
{
    //
    public function index ()
    {
        $perkara = Perkara::all();
        $pdf = Pdf::loadView('pdf', ['perkara' => $perkara]);


        // return $pdf->stream('test.pdf');
        return $pdf->download('test.pdf');
    }
}