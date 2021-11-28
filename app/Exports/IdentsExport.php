<?php

namespace App\Exports;

use App\Models\ident;
use App\Models\product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Concerns\WithHeadings;

class IdentsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $idents = product::select('idents.naziv', DB::raw('SUM(products.zaloga) As zaloga'))
            ->leftJoin('idents', 'idents.id', '=', 'products.ident_id')
            ->groupBy('idents.naziv')
            ->get();

        return $idents;
    }

    public function headings(): array
    {
        return [
            'ident',
            'zaloga'
        ];
    }
}
