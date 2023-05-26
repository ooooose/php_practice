<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ContactRepositoryInterface;
use App\Repositories\ContactRepository;
use App\Services\ContactServiceInterface;
use App\Services\ContactService;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(
            ContactServiceInterface::class,
            function ($app) {
                return new ContactService(
                    $app->make(ContactRepositoryInterface::class)
                );
            },
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
