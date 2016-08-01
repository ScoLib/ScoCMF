<?php

namespace Sco\Console\Commands;

use Illuminate\Console\Command;
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

        file_put_contents(
            app_path('Http/routes.php'),
            file_get_contents(__DIR__ . '/../stubs/route.stub')
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
