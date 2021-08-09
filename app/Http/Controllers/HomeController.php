<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class HomeController extends Controller
{
    //
    public function showHomepage() {
        $package = Package::all()->take(6);
        return view('index')
            ->with('packages', $package);
    }
}
