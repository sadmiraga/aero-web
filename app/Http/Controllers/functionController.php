<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use App\Models\ident;

class functionController extends Controller
{
    public function displayData()
    {

        $products = product::all();
    }

    public function test($ident)
    {

        $identSearch = ident::where('naziv', $ident)->get();

        $searchCount = $identSearch->count();

        return $searchCount;
    }
}
