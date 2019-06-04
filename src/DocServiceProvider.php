<?php
/**
 * Created by PhpStorm.
 * User: Dean
 * Email: 1602264241@qq.com
 * Date: 2019-06-04
 * Time: 09:31
 */

namespace Dean\ApiDoc;

use Illuminate\Support\ServiceProvider;

class DocServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    
    }
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dean');
        
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../storage/doc' => storage_path('doc')], 'dean-apidoc');
        }
    }
}