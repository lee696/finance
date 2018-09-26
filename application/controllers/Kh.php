<?php

/*
 * 描述TODO
 * @author:jacky Version 1.0.0 2017-11-1
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Kh extends CI_Controller {

    protected $need_login = false;

    

    /**
     * 客户详情单页 登录页面
     */
    public function index()
    {
        $this->data['title'] = '登陆';
        $this->twig->render('admin/login/login_detail', $this->data);
    }

  
}


