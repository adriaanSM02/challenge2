<?php

namespace App\Http\Controllers;
use App\Models\Orders;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    function ordersDB(){

        $page_title = 'Orders';
        $db = Orders::all();

        return view ('/orders', compact('page_title','db'));
    }
}
