<?php 
namespace Manuj\Sender;
use Illuminate\Support\ServiceProvider;

class SendServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'send'); 
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/config/send.php' => config_path('send.php'),
       ]);
    }
    public function register()
    {
        $this->mergeConfigFrom(
                   __DIR__.'/config/send.php', 'send'
               );
    }
}