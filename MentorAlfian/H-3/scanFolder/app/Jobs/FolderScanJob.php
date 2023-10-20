<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Http\Controllers\ScanController;

class FolderScanJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $folderPath;

    public function __construct($folderPath)
    {
        $this->folderPath = $folderPath;
    }

    public function handle()
    {
        $contents = [];
        
        if (File::isDirectory($this->folderPath)) {
            $folders = Storage::directories($this->folderPath);
            $files = Storage::files($this->folderPath);
            $images = [];

            foreach ($files as $file) {
                if (in_array(File::extension($file), ['jpg', 'png', 'jpeg', 'gif'])) {
                    $images[] = $file;
                }
            }

            $contents = [
                'folders' => $folders,
                'files' => $files,
                'images' => $images,
            ];
        }

        Log::info('Processed folder contents: ' . $this->folderPath);
        return $contents;
    }
}
