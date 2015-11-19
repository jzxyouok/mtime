<?php

namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
	
	public function login(){
		if(!empty($_SESSION['admin_login'])){
			$this->redirect('Index/index');
		}else{
			$this->display();
		}
	}
	
	public function do_login(){
		$data = $this->do_code();
		if($data){
			$admin = M("Admin");
		
			$admin_name = $_POST['admin_name'];
			$admin_pass = md5($_POST['admin_pass']);
			if($admin->where("admin_name='{$admin_name}' and admin_pass='{$admin_pass}' and admin_status=1")->find()){
				session('admin_name',$admin_name);
				session('admin_login','1');
				$this->success("登录成功！",U("Index/index"));
			}else{
				$this->error("登录失败！",U("login"));
			}
		}else{
			$this->error("输入验证码有误！",U("login"));
		}
	}
	
	public function Vcode(){
		$config = array(
				'length' => 4,
				'fontSize' => 19,
			);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}
	
	public function do_code(){
		$code = I('code');
		$verify = new \Think\Verify();
		$data = $verify->check($code);
		return $data;
	}
	
	 public function layout(){
    	//清空当前内存中的session数组中的数据
    	$_SESSION=array();

    	//删除客户端cookie文件
    	setcookie('PHPSESSID','',time()-3600,'/');	

    	//删除服务器上session文件
    	session_destroy();

    	$this->success('退出成功!',U('login'));
    }
	
}