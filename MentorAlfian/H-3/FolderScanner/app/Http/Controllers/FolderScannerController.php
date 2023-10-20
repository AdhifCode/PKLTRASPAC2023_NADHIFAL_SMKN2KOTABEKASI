<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Jobs\ScanFolder;
use App\Models\ScannedFile;

class FolderScannerController extends Controller
{
    public function index()
{
    return view('folder-scanner.index');
}

private function scanFolderRecursive($folderPath) {
    $items = scandir($folderPath);

    $result = ['folder' => $folderPath, 'subfolders' => [], 'files' => []];

    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }

        $itemPath = $folderPath . '/' . $item;

        if (is_dir($itemPath)) {
            $subfolderResult = $this->scanFolderRecursive($itemPath);
            $result['subfolders'][] = $subfolderResult;
        } elseif (is_file($itemPath)) {
            $result['files'][] = $itemPath;
            $fileModel = new ScannedFile;
            $fileModel->file_name = $item;
            $fileModel->file_type = pathinfo($item, PATHINFO_EXTENSION);
            $fileModel->save();
        }
    }

    return $result;
}


public function scanFolder(Request $request) {
    $folderPath = $request->input('folder_path');
    $result = $this->scanFolderRecursive($folderPath);

    return redirect()->route('folder-scanner.index')
                     ->with('success', 'Pemindaian sedang berlangsung. Sabar Ngab.');
}

}
