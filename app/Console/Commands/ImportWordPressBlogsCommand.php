<?php

namespace App\Console\Commands;

use App\Services\Blog\WordPressBlogImporter;
use Illuminate\Console\Command;

class ImportWordPressBlogsCommand extends Command
{
    protected $signature = 'blog:import-wordpress
        {path : Absolute path to the WordPress WXR (.xml) export}
        {--skip-images : Import posts without downloading images}';

    protected $description = 'Import published WordPress posts (and images) into the Laravel blog CMS';

    public function handle(WordPressBlogImporter $importer): int
    {
        $path = (string) $this->argument('path');

        if (! is_file($path)) {
            $this->error("File not found: {$path}");

            return self::FAILURE;
        }

        $this->info('Importing published WordPress posts...');

        $result = $importer->import($path, downloadImages: ! $this->option('skip-images'));

        $this->table(
            ['Metric', 'Count'],
            [
                ['Imported', $result['imported']],
                ['Updated', $result['updated']],
                ['Skipped', $result['skipped']],
                ['Images downloaded', $result['images_downloaded']],
                ['Errors', count($result['errors'])],
            ],
        );

        foreach ($result['errors'] as $error) {
            $this->warn($error);
        }

        $this->info('WordPress blog import complete.');

        return self::SUCCESS;
    }
}
