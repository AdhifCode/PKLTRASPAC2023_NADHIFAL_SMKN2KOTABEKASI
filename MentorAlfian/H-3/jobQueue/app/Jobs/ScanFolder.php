<?php

namespace App\Jobs;

use Http\Controllers\FolderScanController;
use Illuminate\Support\Facades\File;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ScanFolder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    
    public function handle()
    {
        $path = $this->path;
        $items = [];

        if (is_dir($path)) {
            $directory = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS);
            $iterator = new RecursiveIteratorIterator($directory);

            foreach ($iterator as $file) {
                $items[] = $file->getFilename();
            }
        }

        Log::info('Items in folder ' . $path . ': ' . implode(', ', $items));
    }
}
