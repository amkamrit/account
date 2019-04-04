<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\AdminRepository;
use App\Repositories\EloquentGroup;
use App\Repositories\EloquentLadger;
use App\Repositories\LadgerRepository;
use App\Repositories\EntryRepository;
use App\Repositories\EloquentEntry;
use App\Repositories\OrderRepository;
use App\Repositories\EloquentOrder;
use App\Repositories\OrderUserRepository;
use App\Repositories\EloquentOrderUser;

class AppServiceProvider extends ServiceProvider
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

        $this->app->singleton(AdminRepository::class, EloquentGroup::class);
        $this->app->singleton(LadgerRepository::class, EloquentLadger::class);
        $this->app->singleton(EntryRepository::class, EloquentEntry::class);
        $this->app->singleton(OrderRepository::class, EloquentOrder::class);
        $this->app->singleton(OrderUserRepository::class, EloquentOrderUser::class);

    }
}
