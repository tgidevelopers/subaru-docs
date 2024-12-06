<?php

namespace App\Imports;

use App\Models\DBDoc;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DBDataImport implements ToCollection, WithChunkReading
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows) {
        foreach ($rows as $row) {
            DBDoc::create([
                'document_id' => $row[0],
                'title' => $row[1],
                'document_code' => $row[2],
                'all_vehicles' => $row[3] == 'y',
                'visibility' => $row[4],
                'published_year' => $row[5],
                'published_month' => $row[6],
                'path' => $row[7] ? str_replace('/srv/snet/content/search/stis/', '', $row[7]) : null,
                'document_type_id' => $row[8],
                'document_type' => $row[9],
                'vehicle_type_id' => $row[13],
                'model_year' => is_numeric($row[14]) ? $row[14] : null,
                'carline' => $row[15],
                'drivetrain' => $row[17],
                'engine' => $row[18],
                'transmission' => $row[19],
                'model_code' => $row[20],
            ]);
        }
    }

    public function chunkSize(): int {
        return 1000;
    }
}
