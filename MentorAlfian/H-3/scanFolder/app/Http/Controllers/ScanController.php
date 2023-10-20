<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Jobs\FolderScanJob;

class ScanController extends Controller
{
    public function scanFolderIsi()
{
    $folderPath = "C:\Games\Tlauncher\.minecraft\screenshots";
    $result = dispatch($folderPath);

    return response()->json($result);
}
}
