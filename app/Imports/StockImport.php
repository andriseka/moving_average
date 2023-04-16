<?php

namespace App\Imports;

use App\Models\Stock;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class StockImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{

    use Importable, SkipsErrors, SkipsFailures;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Stock([

            'date' => $this->transformDateTime($row['date']),
            'high' => $row['high']

        ]);
    }


    public function chunkSize(): int
    {
        return 1000;
    }

    private function transformDateTime(string $value, string $format = 'Y-m-d')
    {
        try {
                return Carbon::instance(Date::excelToDateTimeObject($value))->format($format);
            } catch (\ErrorException $e) {
                return Carbon::parse($value);
            }
    }

}
