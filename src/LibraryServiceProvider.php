<?php

namespace Andrisunardi\Library;

use Illuminate\Support\ServiceProvider;

class LibraryServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'components');
    }

    public function register(): void
    {
    }
}
