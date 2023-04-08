<?php

namespace App\Http\Controllers;
use App\Models\Staff;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    function staffDB(){

        $page_title = 'Staff';
        $db = Staff::all();

        return view ('/staff', compact('page_title','db'));
    }
}
