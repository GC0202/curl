<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace DtApp\Curl;

use Exception;

/**
 * 处理错误
 * Class Exception
 * @package DtApp\Curl
 */
class CurlException extends Exception
{
    public function errorMessage()
    {
        return $this->getMessage();
    }
}
