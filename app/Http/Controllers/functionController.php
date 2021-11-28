<?php

namespace App\Http\Controllers;

use App\Exports\IdentsExport;
use Illuminate\Http\Request;

use App\Models\product;
use App\Models\ident;
use Illuminate\Support\Facades\DB;

use Excel;



class functionController extends Controller
{
    public function displayData()
    {
        $idents = product::select('idents.naziv', DB::raw('SUM(products.zaloga) As zaloga'))
            ->leftJoin('idents', 'idents.id', '=', 'products.ident_id')
            ->groupBy('idents.naziv')
            ->get();
        return view('admin.ident')->with('idents', $idents);
    }

    public function export()
    {
        return Excel::download(new IdentsExport, 'identi.xlsx');
    }

    public function test($ident)
    {

        $identSearch = ident::where('naziv', $ident)->get();

        $searchCount = $identSearch->count();

        return $searchCount;
    }
}
