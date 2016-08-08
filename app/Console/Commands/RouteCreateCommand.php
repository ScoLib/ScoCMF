<?php

namespace Sco\Console\Commands;

use Illuminate\Console\Command;
use Sco\Repositories\RouteRepository;
use Symfony\Component\Console\Input\InputOption;

class RouteCreateCommand extends Command
{
    /**
     * The name of the console command.
     *
     * @var string
     */
    protected $name = 'route:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new route file';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {

        if (!$this->option('force') && file_exists(app_path('Http/routes.php'))) {
            $this->error('route file already exists!');

            return false;
        }

        $routes = app(RouteRepository::class)->getValidRouteList();
        
        $content = "<?php" . PHP_EOL;
        foreach ($routes as $route) {
            $content .= "// {$route->title}" . PHP_EOL;
            $content .= "Route::{$route->method}('{$route->uri}', '{$route->action}')" . PHP_EOL
                     . "->name('{$route->name}')";

            if (!empty($route->middleware)) {
                $middleware = str_replace('|', "','", $route->middleware);
                $content .= PHP_EOL . "->middleware(['{$middleware}'])";
            }
            $content .= ";" . PHP_EOL . PHP_EOL;
        }
        file_put_contents(
            app_path('Http/routes.php'),
            $content
        );

        $this->info('route file created successfully.');
    }

    /**
     * The array of command options.
     *
     * @return array
     */
    public function getOptions()
    {
        return [
            [
                'force',
                'f',
                InputOption::VALUE_NONE,
                'Force the creation if file already exists.',
                null
            ],
        ];
    }
}
