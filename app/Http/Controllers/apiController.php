<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ident;

class apiController extends Controller
{
    public function displayAll()
    {
        $products = DB::table('products')->join('idents', function ($join) {
            $join->on('idents.id', '=', 'products.ident_id');
        })
            ->select(
                'products.naziv as naziv',
                'idents.naziv as ident',
                'products.zaloga as zaloga',
                'products.stevilkaNarocila as stevilkaNarocila',
                'products.lokacija1 as lokacija1',
                'products.lokacija2 as lokacija2',
                'products.lokacija3 as lokacija3',
                'products.kolicina as kolicina',
            )->get();

        return response()->json($products);
    }

    public function search($query)
    {

        $products = DB::table('products')->join('idents', function ($join) {
            $join->on('idents.id', '=', 'products.ident_id');
        })->select(
            'products.naziv as naziv',
            'idents.naziv as ident',
            'products.zaloga as zaloga',
            'products.stevilkaNarocila as stevilkaNarocila',
            'products.lokacija1 as lokacija1',
            'products.lokacija2 as lokacija2',
            'products.lokacija3 as lokacija3',
            'products.kolicina as kolicina',
        )->where('idents.naziv', 'LIKE', $query)
            ->orWhere('products.naziv', 'LIKE', $query)
            ->orWhere('products.stevilkaNarocila', 'LIKE', $query)
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

            $identID = $ident->id;
        } else {

            $ident = ident::where('naziv', strtoupper($request['ident']))->first();
            $identID = $ident->id;
        }

        $product->ident_id = $identID;
        $product->zaloga = strtoupper($request['zaloga']);
        $product->stevilkaNarocila = strtoupper($request['stevilkaNarocila']);
        $product->kolicina = strtoupper($request['kolicina']);
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
