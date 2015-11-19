<?php

namespace Admin\Controller;
use Think\Controller;

class LockController extends Controller{
	
	public function _initialize(){
		if(empty($_SESSION['admin_login'])){
    		$this->error('请您先登录!',U('Login/login'));
    		exit;
    	}
	}
}