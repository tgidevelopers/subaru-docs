<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index(Request $request) {
        if ($request->input('path')) {
            $inputDirectory = $request->input('path');
        } else {
            $inputDirectory="doc";
        }

        $directories = Storage::directories($inputDirectory);
        $files = Storage::files($inputDirectory);
        $fileReport = collect();
        foreach ($directories as $directory) {
            $localfiles = Storage::files($directory);
            $count=count($localfiles);
            $item=[
                "dir"=>$directory,
                "count"=>$count,
            ];
            $fileReport->push($item);
            //Storage::disk('local')->append('doc/report.csv', $directory.','.$count);
        }
        //$path=Storage::disk('local')->put("doc/report.json", json_encode($fileReport));
        return view('files', ['directories'=>$fileReport, 'files'=>$files]);
    }


}
