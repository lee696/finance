<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . '/controllers/Base.php';

class Welcome extends Base {

    public function index()
    {
		redirect('/Admin');
        //echo "<h1>财税后台管理系统 <a href='/admin'> 点击跳转</a></h1>";
    }

}
