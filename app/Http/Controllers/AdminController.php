<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function layout()
    {
        $organisation = Organisation::all();
        return view('layouts.admin')->with('organisation',$organisation);
    }
}
