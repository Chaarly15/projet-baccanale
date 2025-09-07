<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeViewCommand extends Command
{
    protected $signature = 'make:view {name}';
    protected $description = 'Créer un fichier Blade dans resources/views';

    public function handle()
    {
        $name = $this->argument('name');
        $path = resource_path("views/{$name}.blade.php");

        if (File::exists($path)) {
            $this->error("La vue {$name} existe déjà !");
            return;
        }

        File::ensureDirectoryExists(dirname($path));
        File::put($path, "<!-- Vue {$name} -->");

        $this->info("Vue créée : resources/views/{$name}.blade.php");
    }
}
