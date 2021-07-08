<?php

namespace Modules\ExampleBinding\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\SettingManager;

class ExampleBindingServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /** Settings this integration needs to create  */
    public function createSettings()
    {
        SettingManager::register('customSetting1', '', 'string', 'examplebinding');
    }

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->createSettings();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/exampleBinding');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'exampleBinding');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'exampleBinding');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
