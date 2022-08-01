<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::directive('admin', function () {
            $isAdmin = false;

            // check if the user authenticated is admin
            if (auth()->user() && auth()->user()->user_type == 1) {

                $isAdmin = true;
            }
            
            //returns if statement with validation
            return "<?php if (" . intval($isAdmin) . ") { ?>";
        });

        Blade::directive('endadmin', function () {
            return "<?php } ?>";
        });
    
    }
}