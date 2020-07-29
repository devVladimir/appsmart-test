<?php

namespace Modules\ProductSearch;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ProductSearchServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/Views', 'product_search');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {}
}