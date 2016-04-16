<?php

namespace Sco\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Sco\Models\Config;

class ConfigRepository extends BaseRepository
{
    private $configs = null;

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
        if ($this->configs) {
            return $this->configs;
        }

        $collection = collect();
        $this->all()->each(function ($item) use ($collection) {
            $collection->put($item->name, $item->value);
        });
        return $this->configs = $collection->all();

    }

    /**
     * 保存配置
     *
     * @param array $configs 配置
     *
     * @return boolean
     */
    public function saveConfigs($configs)
    {
        foreach ($configs as $name => $value) {
            $this->update(['value' => $value], $name);
        }
        $this->flushConfigFile();
        return true;
    }

    /**
     * 刷新配置缓存文件
     */
    private function flushConfigFile()
    {
        $configs = $this->getConfigs();
        $file = config_path('sco.php');
        file_put_contents($file, sprintf('<?php return %s;', var_export($configs, true)));
    }

}