<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

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
        $filesAndFolders = $this->scanFolder($this->folderPath);

        foreach ($filesAndFolders as $item) {
            \Log::info($item);
        }
    }

    protected function scanFolder($path)
    {
        $result = [];

        $items = scandir($path);

        foreach ($items as $item) {
            if ($item != "." && $item != "..") {
                $fullPath = $path . DIRECTORY_SEPARATOR . $item;

                if (is_dir($fullPath)) {
                    $result[] = "Folder: " . $item;
                    $result = array_merge($result, $this->scanFolder($fullPath));
                } else {
                    $result[] = "File: " . $item;
                }
            }
        }

        return $result;
    }

}
