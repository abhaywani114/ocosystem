<?php

namespace App\Classes;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class MonthlySalesStatement implements  FromView,ShouldAutoSize
{
    protected $data;
    protected $subCats;

    public function __construct($data,$subcat)
    {
        $this->data = $data;
        $this->subCats = $subcat;
    }
    public function view():View
    {
        return view('analytics.cash_salesmonthly_statement_excel', [
            'data' => $this->data,
            'subCats' => $this->subCats,
        ]);
    }


}
