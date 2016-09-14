<?php
namespace App\Repositorys;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider{

    public function register()
    {
        $this->app->bind('App\Repositories\UserRepository');
    }
}