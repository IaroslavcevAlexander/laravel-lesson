<?php

namespace App\Providers;

use App\View\Composers\UserComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
        Route::pattern('slug', '[a-z0-9]+');

//        View::share('random_joke', $this->getRandomJoke());
        view()->share('random_joke', $this->getRandomJoke());

//        View::composer(['user.login', 'user.create'], UserComposer::class);
//        View::composer(['user.*'], UserComposer::class);
//        View::composer(['*'], UserComposer::class);
//        View::composer(['layouts.incs.navbar'], UserComposer::class);
//        View::composer(['*'], function (\Illuminate\View\View $view) {
//            $view->with('users_cnt', 125);
//        });
    }

    protected function getRandomJoke(): string
    {
        $data = json_decode(file_get_contents('https://official-joke-api.appspot.com/random_joke'));
        return $data->setup . ' - ' . $data->punchline; // и опечатка: panchline → punchline
    }
}
