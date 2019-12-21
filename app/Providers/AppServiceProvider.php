<?php

namespace App\Providers;

use App\Repositories\AgencyRepository\AgencyRepository;
use App\Repositories\AgencyRepository\AgencyRepositoryInterface;
use App\Repositories\ExtensionRepository\ExtensionRepository;
use App\Repositories\ExtensionRepository\ExtensionRepositoryInterface;
use App\Repositories\MenuRepository\MenuRepository;
use App\Repositories\MenuRepository\MenuRepositoryInterface;
use App\Repositories\MovieCategoryRepository\MovieCategoryRepository;
use App\Repositories\MovieCategoryRepository\MovieCategoryRepositoryInterface;
use App\Repositories\MovieRepository\MovieRepository;
use App\Repositories\MovieRepository\MovieRepositoryInterface;
use App\Repositories\NewsRepository\NewsRepository;
use App\Repositories\NewsRepository\NewsRepositoryInterface;
use App\Repositories\RoomOrderRepository\RoomOrderRepository;
use App\Repositories\RoomOrderRepository\RoomOrderRepositoryInterface;
use App\Repositories\UserRepository\UserRepository;
use App\Repositories\UserRepository\UserRepositoryInterface;
use App\Services\AgencyService\AgencyService;
use App\Services\AgencyService\AgencyServiceInterface;
use App\Services\ExtensionService\ExtensionService;
use App\Services\ExtensionService\ExtensionServiceInterface;
use App\Services\MenuService\MenuService;
use App\Services\MenuService\MenuServiceInterface;
use App\Services\MovieCategoryService\MovieCategoryService;
use App\Services\MovieCategoryService\MovieCategoryServiceInterface;
use App\Services\MovieService\MovieService;
use App\Services\MovieService\MovieServiceInterface;
use App\Services\NewsService\NewsService;
use App\Services\NewsService\NewsServiceInterface;
use App\Services\RoomOrderService\RoomOrderService;
use App\Services\RoomOrderService\RoomOrderServiceInterface;
use App\Services\RoomPriceService\RoomPriceService;
use App\Services\RoomPriceService\RoomPriceServiceInterface;
use App\Services\UserService\UserService;
use App\Services\UserService\UserServiceInterface;
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
        $this->app->singleton(
            AgencyRepositoryInterface::class,
            AgencyRepository::class
        );

        $this->app->singleton(
            ExtensionRepositoryInterface::class,
            ExtensionRepository::class
        );

        $this->app->singleton(
            MenuRepositoryInterface::class,
            MenuRepository::class
        );

        $this->app->singleton(
            MovieCategoryRepositoryInterface::class,
            MovieCategoryRepository::class
        );

        $this->app->singleton(
            MovieRepositoryInterface::class,
            MovieRepository::class
        );

        $this->app->singleton(
            NewsRepositoryInterface::class,
            NewsRepository::class
        );

        $this->app->singleton(
            RoomOrderRepositoryInterface::class,
            RoomOrderRepository::class
        );

        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->singleton(
            AgencyServiceInterface::class,
            AgencyService::class
        );

        $this->app->singleton(
            ExtensionServiceInterface::class,
            ExtensionService::class
        );

        $this->app->singleton(
            MenuServiceInterface::class,
            MenuService::class
        );

        $this->app->singleton(
            MovieCategoryServiceInterface::class,
            MovieCategoryService::class
        );

        $this->app->singleton(
            MovieServiceInterface::class,
            MovieService::class
        );

        $this->app->singleton(
            NewsServiceInterface::class,
            NewsService::class
        );

        $this->app->singleton(
            RoomOrderServiceInterface::class,
            RoomOrderService::class
        );

        $this->app->singleton(
            RoomPriceServiceInterface::class,
            RoomPriceService::class
        );

        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );
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
