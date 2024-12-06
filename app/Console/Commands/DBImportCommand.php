<?php

namespace App\Console\Commands;

use App\Imports\DBDataImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class DBImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:db-import-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import DB export by Dave';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = base_path() . "/app/console/commands/assets/STIS_Document_Export.xlsx"; // ie: /var/www/laravel/app/storage/json/filename.json
        Excel::import(new DBDataImport(), $path);
    }
}
