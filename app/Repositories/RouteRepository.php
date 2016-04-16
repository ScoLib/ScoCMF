<?php


namespace Sco\Repositories;


use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;
use Sco\Models\Route;

class RouteRepository extends BaseRepository implements CacheableInterface
{
    protected $cacheOnly = ['all'];

    use CacheableRepository;

    public function model()
    {
        return Route::class;
    }
    
}