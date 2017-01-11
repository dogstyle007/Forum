<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('auth.register', function($view){
            $cats = Category::all();
            $studentCats = [];
            $staffCats = [];
            foreach ($cats as $key => $category) {
                if($category->type=='student'){
                    $studentCats[]=$category;
                }
                if($category->type=='staff'){
                    $staffCats[]=$category;
                }
            }
            $view->with(['staffCats'=>$staffCats,'studentCats'=>$studentCats]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
