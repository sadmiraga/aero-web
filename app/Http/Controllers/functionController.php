<?php

namespace App\Http\Controllers;

use App\Exports\IdentsExport;
use Illuminate\Http\Request;

use App\Models\product;
use App\Models\ident;
use App\Models\message;
use Illuminate\Support\Facades\DB;

use Excel;



class functionController extends Controller
{
    public function identi()
    {
        $idents = product::select('idents.naziv', DB::raw('SUM(products.zaloga) As zaloga'))
            ->leftJoin('idents', 'idents.id', '=', 'products.ident_id')
            ->groupBy('idents.naziv')
            ->get();
        return view('admin.ident')->with('idents', $idents);
    }

    public function messages(){
        $messages = message::all();
        return view('admin.messages')->with('messages',$messages);
    }

    public function deleteMessage($messageID){
        $message = message::findOrFail($messageID);
        $message->delete();
        return redirect()->back();
    }

    public function admin()
    {
        return redirect('/identi');
    }

    public function export()
    {
        return Excel::download(new IdentsExport, 'identi.xlsx');
    }

}
