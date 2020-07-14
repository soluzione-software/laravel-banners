<?php

namespace SoluzioneSoftware\Banners;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use SoluzioneSoftware\Banners\Contracts\Banner as BannerContract;
use SoluzioneSoftware\Banners\Contracts\BannersGroup as BannersGroupContract;
use SoluzioneSoftware\Banners\Contracts\Manager as ManagerContract;
use SoluzioneSoftware\Banners\Models\Banner;
use SoluzioneSoftware\Banners\Models\BannersGroup;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        $this->registerManager();
    }

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->bootMigrations();
    }

    private function bootMigrations()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/' => App::databasePath('migrations')
        ], ['migrations', 'banners', 'banners-migrations']);

        $this->loadMigrationsFrom([
            __DIR__ . '/../database/migrations/2020_01_01_000000_create_banners_groups_table.php',
            __DIR__ . '/../database/migrations/2020_01_01_000000_create_banners_table.php',
        ]);
    }

    protected function registerBindings()
    {
        $this->app->bind(BannerContract::class, Banner::class);
        $this->app->bind(BannersGroupContract::class, BannersGroup::class);
    }

    protected function registerManager()
    {
        $this->app->singleton(ManagerContract::class, function () {
            return new Manager();
        });
    }
}
