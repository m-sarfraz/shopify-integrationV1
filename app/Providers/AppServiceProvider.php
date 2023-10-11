<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ProductRepositories\ProductRepositoryInterface;
use App\Repositories\ProductRepositories\EloquentProductRepository;
use App\Repositories\CustomerRepositories\CustomerRepositoryInterface;
use App\Repositories\CustomerRepositories\EloquentCustomerRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductRepositoryInterface::class, EloquentProductRepository::class);
        $this->app->bind(CustomerRepositoryInterface::class, EloquentCustomerRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
