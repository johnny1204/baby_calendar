<?php

namespace App\Providers;

use App\Repositories\Diary\ContentRepository;
use App\Repositories\Diary\ContentSqlRepositoryImpl;
use App\Repositories\User\UserRegisterSqlRepositoryImpl;
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
        $this->app->bind(UserRegisterRepository::class, UserRegisterSqlRepositoryImpl::class);
        $this->app->bind(ContentRepository::class, ContentSqlRepositoryImpl::class);
    }
}
