<?php

namespace Home\Controller;
use Think\Controller;

class LockController extends Controller{
	
	public function _initialize(){
		if(empty($_SESSION['member_login'])){
    		$this->error('请您先登录!',U('User/register'));
    		exit;
    	}
	}
}