<?php

namespace App\Providers;

use Request;
use App\Models\User;
use App\Models\Thread;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        Gate::define('threadEditDelete',function(User $user,Thread $ob){
            return $ob->user_id == $user->id;
        });




    }
}
