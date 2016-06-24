<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PDF;
use App;
use App\Products;
use App\Categories;
use App\Subcategories;

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

    public function downloadCategoryPdf(){
      $categories = Categories::all();
      $pdf = PDF::loadView('pdfs.categories', ['categories' => $categories]);
      return $pdf->download('categories.pdf');
    }
    public function downloadSubcategoryPdf(){
      $subcategories = Categories::with('category')->get();
      $pdf = PDF::loadView('pdfs.subcategories', ['subcategories' => $subcategories]);
      return $pdf->download('subcategories.pdf');
    }
    // TODO: add pdf for customers
    // TODO: add pdf for orders
}
