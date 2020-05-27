<?php

namespace Supto\LaravelPreset;

use Illuminate\Support\ServiceProvider;

class SuptoServiceProvider extends ServiceProvider
{
    use Laravel\Ui\UiCommand;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('supto', function ($command) {
            Preset::install();

            $command->info('All finished! Please compile your assets, and you are all set to go!');
        });
    }


}
