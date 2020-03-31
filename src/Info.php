<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace LiGuAngChUn\Curl;

/**
 * 信息
 * Class Info
 * @package LiGuAngChUn\Curl
 */
class Info extends BasicCurl
{
    /**
     * 取域名地址
     * @return string
     */
    public function getWebsiteAddress()
    {
        $http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
        return $http_type . $_SERVER['HTTP_HOST'] . "/";
    }

    /**
     * 返回成功
     * @param array $data
     * @param string $msg
     * @param int $code
     */
    public function retJsonSuccess(array $data = [], string $msg = 'success', int $code = 0)
    {
        date_default_timezone_set('Asia/Shanghai');
        header('Content-Type:application/json; charset=utf-8');
        echo json_encode(['code' => $code, 'msg' => $msg, 'time' => time(), 'data' => $data]);
        exit;
    }

    /**
     * 返回失败
     * @param string $msg
     * @param int $code
     * @param array $data
     */
    public function retJsonError(string $msg = 'error', int $code = 1, array $data = [])
    {
        date_default_timezone_set('Asia/Shanghai');
        header('Content-Type:application/json; charset=utf-8');
        echo json_encode(['code' => $code, 'msg' => $msg, 'time' => time(), 'data' => $data]);
        exit;
    }
}
