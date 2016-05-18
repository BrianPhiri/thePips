<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Products;

use Intervention\Image\Facades\Image;

class DisplayProductsController extends Controller
{
    public function index()
    {
    	$products = Products::All();
    	$img = Image::make('image_uploads/uploads/image_1.jpg')->resize(1280, 600);
    	// return $img->response('jpg');
    	return view('homepage.index',compact('products','img'));
    }
}
