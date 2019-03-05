<?php

namespace Laravolt\Etalase;

use Faker\Factory;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class PackageServiceProvider
 *
 * @package Laravolt\Ui
 * @see http://laravel.com/docs/master/packages#service-providers
 * @see http://laravel.com/docs/master/providers
 */
class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->singleton('laravolt.etalase', function(){
            return new Etalase();
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(realpath(__DIR__.'/../resources/views'), 'etalase');
        $this->loadRoutes();
        $this->registerMenu();
        $this->registerBlade();
        $this->registerVariables();

        //auth()->login(User::first());
    }

    protected function loadRoutes()
    {
        require __DIR__.'/../routes/web.php';
    }

    protected function registerMenu()
    {
        if ($this->app->bound('laravolt.menu')) {
            $parent = $this->app['laravolt.menu']->add('Sample UI')->data('icon', 'puzzle');

            $menu = $parent->add('UI Element')->data('icon', 'puzzle');
            $menu->add('Button', url('etalase/button'));
            $menu->add('Definition', url('etalase/definition'));
            $menu->add('Table', url('etalase/table'));
            $menu->add('Form', url('etalase/form'));
            $menu->add('Flash Message', url('etalase/flash'));
            $menu->add('Breadcrumb', url('etalase/breadcrumb'));

            $menu = $parent->add('Layout')->data('icon', 'block layout');
            $menu->add('Full', url('etalase/layout/full'));
            $menu->add('Boxed', url('etalase/layout/boxed'));

            $menu = $parent->add('Utility')->data('icon', 'high battery');
            $menu->add('Text Color', url('etalase/text'));
            $menu->add('Spacing', url('etalase/spacing'));

            $menu = $parent->add('Sample Page')->data('icon', 'browser');
            $menu->add('Dashboard', url('etalase/dashboard'));
            $menu->add('Control Panel', url('etalase/dashboard/control-panel'));
            $menu->add('Launcher', url('etalase/launcher'));
            $menu->add('Summary Board', url('etalase/dashboard/summary'));
            $menu->add('Inbox', url('etalase/inbox'));
            $menu->add('Dropdown Shipping', url('etalase/shipping'));

            $parent = $this->app['laravolt.menu']->add('Kitchen Sink', url('etalase/kitchen-sink'))->data('icon', 'th');
        }
    }

    protected function registerBlade()
    {

        Blade::directive('etalase', function($expression) {
            return "<?php echo app('laravolt.etalase')->start($expression); ?>";
        });

        Blade::directive('endetalase', function($expression) {
            return "<?php echo app('laravolt.etalase')->stop(); ?>";
        });
    }

    protected function registerVariables()
    {
        View::composer('etalase::*', function($view){
            $faker = Factory::create();
            $view->with('faker', $faker);
        });
    }
}
