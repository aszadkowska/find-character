<?php

namespace App\Providers;

use App\Model\Person\People;
use App\Repositories\PersonNameRepository;
use Illuminate\Support\ServiceProvider;

class PersonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            People::class, PersonNameRepository::class
        );
    }
}
