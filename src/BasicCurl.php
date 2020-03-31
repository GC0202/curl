<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */


namespace LiGuAngChUn\Curl;

/**
 * 中间件
 * Class BasicIp
 * @package LiGuAngChUn\Ip
 */
class BasicCurl
{
    /**
     * 定义当前版本
     */
    const VERSION = '1.0.4';

    /**
     * 配置
     * @var
     */
    public $config;

    /**
     * Base constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->config = new DataArray($options);
    }
}
