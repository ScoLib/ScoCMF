<?php

namespace Sco\Repositories;

use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Events\RepositoryEntityUpdated;
use Prettus\Repository\Traits\CacheableRepository;
use Sco\Models\Config;

class ConfigRepository extends BaseRepository implements CacheableInterface
{
    use CacheableRepository;

    protected $cacheExcept = ['all'];

    public function model()
    {
        return Config::class;
    }

    /**
     * 获取配置
     *
     * @return array
     */
    public function getConfigs()
    {
        $key   = $this->getCacheKey('configs');
        $value = $this->getCacheRepository()->rememberForever($key, function () {
            $collection = collect();
            $this->all()->each(function ($item) use ($collection) {
                $collection->put($item->name, $item->value);
            });
            return $collection->all();
        });

        return $value;

    }

    public function saveConfigs($configs)
    {
        foreach ($configs as $name => $value) {
            $this->update(['value' => $value], $name);
        }
        return true;
    }

    /**
     * 获取配置值
     *
     * @param string $name
     *
     * @return string|null
     */
    public function getConfigValue($name)
    {
        $configs = $this->getConfigs();
        return isset($configs[$name]) ? $configs[$name] : null;
    }

}