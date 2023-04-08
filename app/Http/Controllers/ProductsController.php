<?php

namespace App\Http\Controllers;
use App\Models\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function productsDB(){

        $page_title = 'Products';
        $db = Products::all();

        return view ('/products', compact('page_title','db'));
    }
}
