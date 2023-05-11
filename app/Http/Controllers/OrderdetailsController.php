<?php

namespace App\Http\Controllers;

use App\Models\Orderdetails;
use Illuminate\Http\Request;

class OrderdetailsController extends Controller
{
    function orderdetailsDB(){

        $page_title = 'Order Details';
        $db = Orderdetails::all();

        return view ('/orderdetails', compact('page_title','db'));
    }
}
