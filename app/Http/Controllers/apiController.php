<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

use App\Models\ident;

class apiController extends Controller
{
    public function displayAll()
    {
        $products = product::all();
        return response()->json($products);
    }

    public function displaySingle($id)
    {
        $product = product::findOrFail($id);
        return response()->json($product);
    }


    public function search($query)
    {
        $products = product::where('ident', 'LIKE', $query)
            ->orWhere('naziv', 'LIKE', $query)
            ->orWhere('stevilkaNarocila', 'LIKE', $query)
            ->get();

        return response()->json($products);
    }


    public function import(Request $request)
    {
        $product = new product();
        $product->naziv = strtoupper($request['naziv']);

        //get ident search query
        $identSearch = ident::where('naziv', $request['ident'])->get();
        $searchCount = $identSearch->count();

        if ($searchCount == 0) {
            //if it doesn't exist create new one
            $ident = new ident();
            $ident->naziv = strtoupper($request['ident']);
            $ident->save();

            $product->ident_id = $ident->id;
        } else {

            $ident = ident::where('naziv', strtoupper($request['ident']))->first();
            $product->ident_id = $ident->id;
        }


        $product->zaloga = strtoupper($request['zaloga']);
        $product->stevilkaNarocila = strtoupper($request['stevilkaNarocila']);
        $product->lokacija1 = strtoupper($request['lokacija1']);
        $product->lokacija2 = strtoupper($request['lokacija2']);
        $product->lokacija3 = strtoupper($request['lokacija3']);
        $product->save();

        $message = "success";
        return response()->json($message, 200);
    }

    public function export(Request $request)
    {
        $product = product::findOrFail($request['id']);
        $product->zaloga =  $product->zaloga - $request['vrednostIzvoza'];
        $product->stevilkaNarocila = "";
        $product->save();

        $message = "success";
        return response()->json($message, 200);
    }
}
