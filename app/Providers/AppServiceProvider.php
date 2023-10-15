<?php

namespace App\Providers;

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
        $quizzes = [
            [
                'name' => 'Quiz 1',
                'photo' => 'quiz1.jpg',
                'status' => 'completed'
            ],
            [
                'name' => 'Quiz 2',
                'photo' => 'quiz2.jpg',
                'status' => 'pending'
            ]
        ];
    
        view()->share('quizzes', $quizzes);
    }
}
