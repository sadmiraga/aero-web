<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

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
        $product->naziv = $request['naziv'];
        $product->ident = $request['ident'];
        $product->zaloga = $request['zaloga'];
        $product->stevilkaNarocila = $request['stevilkaNarocila'];
        $product->lokacija1 = $request['lokacija1'];
        $product->lokacija2 = $request['lokacija2'];
        $product->lokacija3 = $request['lokacija3'];
        $product->save();

        $message = "success";
        return response()->json($message, 200);
    }

    public function export(Request $request)
    {
        $product = product::findOrFail($request['id']);
        $product->zaloga =  $product->zaloga - $request['vrednostIzvoza'];
        $product->stevilkaNarocila = null;
        $product->save();

        $message = "success";
        return response()->json($message, 200);
    }
}
