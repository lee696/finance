<?php

/*
 * 描述TODO
 * @author:jacky Version 1.0.0 2017-11-1
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Login extends CI_Controller {

    protected $need_login = false;

    /**
     * 登陆页面
     */
    public function index()
    {
        //判断是否已经是登录状态
        if ($this->session->userdata('uid') > 0) {
            redirect('/admin');
        }
        $this->data['title'] = '登陆';
        $this->twig->render('admin/login/login', $this->data);
    }

    /**
     * 客户详情单页 登录页面
     */
    public function single_index()
    {
        $this->data['title'] = '登陆';
        $this->twig->render('admin/login/login_detail', $this->data);
    }

    /**
     * 客户详情单页 登录页面
     */
    public function customer_detail()
    {
        $this->data['title'] = '客户单页';
        $this->twig->render('admin/login/customer_detail', $this->data);
    }
}


