<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Product $product)
    {
        // $product->load('galleries');

        // return view('pages.detail', compact('product'));
        return view('pages.detail');
    }
}
