<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

// Normalize headings like "Sub SKU" → "sub_sku"
HeadingRowFormatter::default('slug');

class StockTransferImport implements ToCollection, WithHeadingRow
{
    public $rows;

    public function headingRow(): int
    {
        return 1; // first row as heading
    }

    public function collection(Collection $rows)
    {
        $this->rows = $rows; // store rows to access in controller
    }
}
