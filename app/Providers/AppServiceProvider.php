<?php

namespace App\Providers;

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
        view()->composer('*', function($view) {
            // Получаем текущий роут и его параметры (если title передаётся через контроллер)
            $route = request()->route();
            $title = $route ? ($route->getAction('title') ?? 'Default Title') : 'Default Title';
    
            // Или, если title задаётся в контроллере через view()->share():
            $title = $view->getData()['title'] ?? 'Default Title';
    
            $view->with('title', $title);
        });
    }
}
