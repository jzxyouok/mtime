<?php
	
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;

class UserController extends Controller{

	public function register(){
		$this->display();
	}

	public function email_register(){
		$d = $this->do_code();
		if($d){
			$user = D("Member");
			$member = M("Memberdetail");
			$res = $user->create();
			if($res){
				$user->member_pass = md5($_POST['member_pass']);
				$code = md5(rand());
				$user->code = $code;
				$i = $user->add();
				$m['member_id'] = $i;
				$m['member_nickname'] = I("member_name");
				$member->data($m)->add();
$message = <<<EOT
<html>
<head><meta charset="utf-8"></head>
<body>
<h3>你好！{$m['member_nickname']}</h3>
<h1><b>欢迎注册时光网</b></h1>
<h3>请点击如下地址激活帐号</h3>
<p>http://172.31.1.43/mtime/index.php/User/register_active/mid/{$i}/code/{$code}</p>
</body>
</html>
EOT;
				if(SendMail($_POST['member_name'],"时光网会员激活",$message)) {
					$this->success("恭喜你，注册成功,请登录邮箱激活！",U("User/register"));
				} else {
					$this->error("对不起,注册失败，您的邮箱有问题！",U("User/register"));
				}
			
				
			}else{
				$this->error("对不起，注册失败！",U("User/register"));
			}		
		}else{
			$this->error("注册失败，验证码错误",U("User/register"));
		}
		
	}

	public function phone_register(){

		$user = M("Member");
		
		$map['member_name'] = $_POST['phone_name'];
		$map['member_pass'] = md5($_POST['member_pass']);
		$s = $user->data($map)->add();
		if($s){
			$this->add();
			$this->success("恭喜你，注册成功！",U("User/register"));
		}else{
			$this->error("对不起，注册失败！",U("User/register"));
		}
			
		
	}

	//ajax判断用户名是否 已经被注册
	public function select(){
		$u = M("Member");
		$map['member_name']= $_GET['emailname'];
		//var_dump($map['member_name']);
		$rows = $u->where($map)->find();
		//var_dump($rows);
		if($rows){
			echo 1;
		}else{
			echo 0;
		}
	}

	public function do_login(){
		$user = M("Member");
		$map['member_name'] = $_POST['email'];
		$map['member_pass'] = md5($_POST['pass']);
		$data = $user->where($map)->find();
		
		if($data){
			if($data['member_status']==1){
				$member = M("Memberdetail");
				$d = $member->field("member_nickname,member_pic")->where("member_id = {$data['id']}")->find();
				$_SESSION['member_login'] = 1;
				$_SESSION['member_name'] = $data['member_name'];
				$_SESSION['member_nickname'] = $d['member_nickname'];
				$_SESSION['member_pic'] = $d['member_pic'];
				$_SESSION['member_id'] = $data['id'];
				$this->success("登录成功！",U("Index/index"));
			}else{
				$this->error("对不起，您的帐号被禁用或者未激活！",U("User/register"));
			}
		}else{
			$this->error("登录失败！用户名不存在或密码错误！",U("User/register"));
		}
	}

	public function Vcode(){
		$config = array(
				'length' => 4,
				'imageH' =>40,
				'imageW' => 140,
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
	
	public function do_layout(){
		//清空当前内存中的session数组中的数据
    	$_SESSION=array();

    	//删除客户端cookie文件
    	setcookie('PHPSESSID','',time()-3600,'/');	

    	//删除服务器上session文件
    	session_destroy();

    	$this->success('退出成功!',U('Index/index'));
	}
	
	//用户帐号激活
	public function register_active(){
		$user = M("Member");
		$mid = $_GET['mid'];
		$code = $_GET['code'];
		$row = $user->field("id")->where("id = {$mid} and code = '{$code}'")->find();
		if($row['id']){
			$data['member_status'] = 1;
			$user->where("id = {$row['id']}")->save($data);
			$this->success("帐号激活成功！",U("User/register"));
		}else{
			$this->error("帐号激活失败！",U("User/register"));
		}
	}

}