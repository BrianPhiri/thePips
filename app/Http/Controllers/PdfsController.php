<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PDF;
use App;
use App\Products;

class PdfsController extends Controller
{
    public function downloadPDF()
    {
//        $pdf = App::make('dompdf.wrapper');
//        $pdf->loadHTML('<h1>Test</h1>');
//        return $pdf->stream();
        $pdf = PDF::loadView('pdfs.index');
        return $pdf->download('catalogue.pdf');
    }
    
    public function getProducts()
    {
        $product = Products::all();
        $pdf = PDF::loadView('pdfs.index', ['product' => $product]);
        return $pdf->download('catalogue.pdf');
    }
    public function getPDF()
    {
        $pdf = PDF::loadView('pdfs.index');
        return $pdf->download('catalogue.pdf');
    }
}
