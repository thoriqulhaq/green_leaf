<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\ApplicationFormObserver;
use App\Models\ApplicationForm;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ApplicationForm::observe(ApplicationFormObserver::class);
    }
}
