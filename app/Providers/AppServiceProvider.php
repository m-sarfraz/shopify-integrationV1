<?php

namespace App\Providers;

use App\Repositories\CustomerRepositories\CustomerRepositoryInterface;
use App\Repositories\CustomerRepositories\EloquentCustomerRepository;
use App\Repositories\OrderRepositories\EloquentOrderRepository;
use App\Repositories\OrderRepositories\OrderRepositoryInterface;
use App\Repositories\ProductRepositories\EloquentProductRepository;
use App\Repositories\ProductRepositories\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(OrderRepositoryInterface::class, EloquentOrderRepository::class);

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
