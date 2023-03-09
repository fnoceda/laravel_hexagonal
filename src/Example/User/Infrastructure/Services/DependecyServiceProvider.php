<?php

namespace Src\Example\User\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;


// aqui se hace la inyeccion de dependencias
final class DependecyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app
            ->when(\Src\Example\User\Application\Find\UserFindAllUseCase::class)
            ->needs(\Src\Example\User\Domain\Contracts\UserRepositoryContract::class)
            ->give(\Src\Example\User\Infrastructure\Repository\Eloquent\UserRepository::class);

        $this->app
            ->when(\Src\Example\User\Application\Find\UserFindByIdUseCase::class)
            ->needs(\Src\Example\User\Domain\Contracts\UserRepositoryContract::class)
            ->give(\Src\Example\User\Infrastructure\Repository\Eloquent\UserRepository::class);


        $this->app
            ->when(\Src\Example\User\Application\Find\UserDeleteByIdController::class)
            ->needs(\Src\Example\User\Domain\Contracts\UserRepositoryContract::class)
            ->give(\Src\Example\User\Infrastructure\Repository\Eloquent\UserRepository::class);
        }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //  Log::info('boot');

    }
}
