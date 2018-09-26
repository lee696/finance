<?php

/*
 * 描述TODO
 * @author:jacky Version 1.0.0 2016-9-18
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

    const HTTP_OK = 200;
    const HTTP_BAD_REQUEST = 400;
    protected $need_login = true;
    public $data = array();

    function __construct()
    {
        parent::__construct();
        $this->check_login();
        $this->data['version'] = '1.0.1';
        $this->data['base_url'] = base_url();
    }

    /**
     * 检测登陆状态
     */

    protected function check_login()
    {
      /*  if (!empty($_COOKIE['uid']) && !empty($_COOKIE['code'])) {
            $this->session->set_userdata(['uid' => $_COOKIE['uid']]);
        }
        if ($this->need_login) {
            if (!$this->session->userdata('uid')) { //验证是否有登录 未登录跳转到登录页面  
                redirect('/login'); //跳转到登录页面                
            }
        }*/
    }

    /*
     * api返回数据格式
     * @param type $data
     * @param type $msg
     * @param type $code
     */

    public function returnData($data = [], $msg = '', $code = self::HTTP_OK)
    {
        /* $ret_data = array(
          'code' => $code,
          'msg' => $msg,
          'data' => $data,
          ); */
        $ret_data = $data;
        echo json_encode($ret_data);
        exit;
    }

    public function returnDataCache($data, $cache_time = 60, $msg = '', $code = self::HTTP_OK)
    {
        $method = $this->input->method();
        $key = md5(uri_string() . current_url() . implode('', $this->input->$method()));
        $this->load->driver('cache', array('adapter' => 'memcached', 'backup' => 'file'));
        if ('testing' === ENVIRONMENT) {
            $this->load->driver('cache', array('adapter' => 'redis', 'backup' => 'file'));
        }

        $cache_data = [
            'data' => $data,
            'msg' => $msg,
            'code' => $code,
            'return_fun' => 'returnData',
        ];
        $this->cache->save($key, serialize($cache_data), $cache_time);
        $this->returnData($data, $msg, $code);
    }

    /**
     * 获取数据失败提示2(上一个方法提供数据给Android有时候会返回异常数据)
     * @param type $msg
     * @param type $code
     */
    public function returnError($msg = '', $code = self::HTTP_BAD_REQUEST)
    {
        $ret_data = array(
            'code' => $code,
            'msg' => $msg,
            'data' => [],
        );
        echo json_encode($ret_data);
        exit;
    }

    /**
     * 前端请求代理
     */

    public function proxy()
    {
        $param = $this->input->post();  //为保障安全，前端请求全部为post 
        $url = isset($param['request_url']) ? $param['request_url'] : '';
        $method = isset($param['method']) ? strtoupper($param['method']) : '';
        unset($param['request_url']);
        unset($param['method']);
        /* if ($method == "GET") {
          $res = curlPostdata($url, $param, $method, C('RAW_HEADER'));
          } else {
          $res = curlPostdata($url, json_encode($param), $method, C('RAW_HEADER'));
          } */
        $res = curl_postdata($url, $param, $method);
        if (empty($res) || $res['code'] !== 200) {
            writelog(['msg' => 'API接口请求异常错误!', 'param' => $param, 'data' => $res]);
            $this->returnError('API接口请求异常,请稍候再试!');
        }
        //$return_res = json_decode($res['result'], true);
        $return_res = array_merge(json_decode($res['result'], true), ['params' => ['require_url' => $url, 'method' => $method, 'post_data' => $param]]);  //临时调试用途
        $this->returnData($return_res);
    }

}
