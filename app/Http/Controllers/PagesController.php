<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function superadmin()
    {
        return view('pages.superadmin.index');
    }

    public function officer()
    {
        return view('pages.officer.index');
    }

    public function vendor()
    {
        return view('pages.vendor.index');
    }
}
