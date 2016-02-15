<?php

namespace Sco\Repositories;

use Sco\Models\Config;
use Cache;

class ConfigRepository extends BaseRepository
{
    public function __construct(Config $model)
    {
        $this->model = $model;
    }

    /**
     * 获取配置
     *
     * @return array
     */
    public function getConfigs()
    {
        $list = Cache::rememberForever('configs', function () {
            $collection = collect();
            $this->model->all()->each(function ($item) use ($collection) {
                $collection->put($item->name, $item->value);
            });
            return $collection->all();
        });
        return $list;
    }

    public function saveConfigs($configs)
    {
        foreach ($configs as $name => $value) {
            $config = $this->model->firstOrNew(['name' => $name]);
            if ($config) {
                $config->value = $value;
                $config->save();
            }
        }
        Cache::forget('configs');
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