<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace DtApp\Curl;

/**
 * 处理错误
 * Class Exception
 * @package DtApp\Curl
 */
class Exception extends \Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
