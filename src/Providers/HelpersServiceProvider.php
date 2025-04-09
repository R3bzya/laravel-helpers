<?php

namespace R3bzya\Helpers\Providers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->bootPublishes();
    }

    public function register(): void
    {
        $this->registerMergers();
    }

    private function bootPublishes(): void
    {
        $this->publishes([
            __DIR__ . '/../config/pagination.php' => config_path('pagination.php'),
        ], 'pagination-config');

        $this->publishes([
            __DIR__ . '/../lang/ru' => lang_path('ru'),
            __DIR__ . '/../lang/ru.json' => lang_path('ru.json'),
        ], 'lang-ru');
    }

    private function registerMergers(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/pagination.php', 'pagination'
        );
    }
}