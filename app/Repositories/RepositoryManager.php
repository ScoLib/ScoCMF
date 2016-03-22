<?php


namespace Sco\Repositories;

use InvalidArgumentException;

/**
 * Repository管理
 *
 * @package Sco\Repositories
 */
class RepositoryManager
{
    /**
     * The application instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * The array of resolved repositories.
     *
     * @var array
     */
    protected $repositories = [];

    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * get a repository instance.
     *
     * @param string $name
     *
     * @return \Prettus\Repository\Contracts\RepositoryInterface
     */
    public function create($name)
    {
        return $this->repositories[$name] = $this->get($name);
    }

    /**
     * Attempt to get the repository from the local cache.
     *
     * @param string $name
     *
     * @return \Prettus\Repository\Contracts\RepositoryInterface
     */
    protected function get($name)
    {
        return isset($this->repositories[$name]) ? $this->repositories[$name] : $this->resolve($name);
    }

    /**
     * Resolve the given repository.
     *
     * @param string $name
     *
     * @return \Prettus\Repository\Contracts\RepositoryInterface
     * @throws \InvalidArgumentException
     */
    protected function resolve($name)
    {
        $model = "Sco\\Repositories\\{$name}Repository";
        if (class_exists($model)) {
            return new $model($this->app);
        } else {
            throw new InvalidArgumentException("Repository [{$name}] is not defined.");
        }

    }

}