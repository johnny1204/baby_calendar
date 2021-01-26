<?php

namespace App\Providers;

use App\Repositories\User\UserRegisterMySqlRepositoryImpl;
use App\Repositories\User\UserRegisterRepository;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserRegisterRepository::class, UserRegisterMySqlRepositoryImpl::class);
    }
}
