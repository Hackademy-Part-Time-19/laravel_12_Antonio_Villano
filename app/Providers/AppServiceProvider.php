<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
        //controllo se esiste la tabella delle categorie altrimenti non eseguo lo share delle categorie alle viste
        if(Schema::hasTable('categories') ){
            View::share('categories',Category::all() );
        }
       
   
    }
}
