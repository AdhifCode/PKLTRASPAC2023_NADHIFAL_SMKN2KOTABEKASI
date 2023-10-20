<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ScanFolder;

class ScanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $path = 'C:\Games\Tlauncher\.minecraft\screenshots';
        ScanFolder::dispatch($path);
    
        return "Folder scan job dispatched.";
    }
}

