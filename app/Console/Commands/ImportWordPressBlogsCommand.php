<?php

namespace App\Console\Commands;

use App\Services\Blog\WordPressBlogImporter;
use Illuminate\Console\Command;

class ImportWordPressBlogsCommand extends Command
{
    protected $signature = 'blog:import-wordpress
        {path? : Path to the WordPress WXR (.xml) export}
        {--skip-images : Do not download images; only link files already in storage/app/public/blogs}';

    protected $description = 'Import published WordPress posts into the Laravel blog CMS (links existing storage images by default path blogs/{Y}/{m}/{file})';

    public function handle(WordPressBlogImporter $importer): int
    {
        $path = (string) ($this->argument('path') ?: public_path('imports/spheremarketingsolutions.WordPress.2026-08-02.xml'));

        if (! is_file($path)) {
            $this->error("File not found: {$path}");

            return self::FAILURE;
        }

        $downloadImages = ! $this->option('skip-images');

        $this->info("Importing published WordPress posts from: {$path}");
        $this->info($downloadImages
            ? 'Images: link existing local files, download only if missing.'
            : 'Images: link existing local files only (no downloads).');

        $result = $importer->import($path, downloadImages: $downloadImages);

        $this->table(
            ['Metric', 'Count'],
            [
                ['Imported', $result['imported']],
                ['Updated', $result['updated']],
                ['Skipped', $result['skipped']],
                ['Images linked (local)', $result['images_linked']],
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
