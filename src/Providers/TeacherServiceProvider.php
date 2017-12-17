<?php
/**
 * Created by PhpStorm.
 * User: thai
 * Date: 17/12/2017
 * Time: 11:26 AM
 */

namespace Thaile\Teacher\Providers;

use Illuminate\Support\ServiceProvider;
use Thaile\Teacher\Services\TeacherService;
use Thaile\Teacher\Repositories\TeacherRepository;
use Thaile\Teacher\Services\TeacherServiceContract;
use Thaile\Teacher\Repositories\TeacherRepositoryContract;
class TeacherServiceProvider  extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $package_name = "teacher";
        //routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        //view
        $this->loadViewsFrom(__DIR__.'/../resources/views', $package_name);
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/' . $package_name),
        ]);
        //migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        /*
        |--------------------------------------------------------------------------
        | Route Providers need on boot() method, others can be in register() method
        |--------------------------------------------------------------------------
        */
        $this->app->register(RouteServiceProvider::class);
    }
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // Binding from part 9
        $this->app->bind(TeacherRepositoryContract::class, TeacherRepository::class);
        $this->app->bind(TeacherServiceContract::class, TeacherService::class);
    }
}