<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
        $this->mapAdminRoutes();
        $this->mapUserRoutes();
        $this->mapRefereeRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    //Admin Routes
    protected function mapAdminRoutes()
    {
        Route::middleware(['web','auth','auth.admin'])
            ->namespace($this->namespace."\admin")
            ->prefix('admin')
            ->group(base_path('routes/admin/admin.php'));
    }


    //User Routes
    protected function mapUserRoutes()
    {
        Route::middleware(['web','auth','auth.user'])
            ->namespace($this->namespace)
            ->prefix('panel')
            ->group(base_path('routes/user/user.php'));
    }

    //Referee Routes
    protected function mapRefereeRoutes()
    {
        Route::middleware(['web','auth','auth.referee'])
            ->namespace($this->namespace."\Referee")
            ->prefix('referee')
            ->group(base_path('routes/referee/referee.php'));
    }
}
