<?php
	namespace Home\Model;
	use Think\Model;

	class UserModel extends  Model{

		 protected $_validate = array(
			array('member_name','','帐号名称已经存在！',0,'unique',1),   
			array('member_pass','6,20','密码长度不正确！',0,'length',3), 
 			array('repass','member_pass','两次输入不一致！',0,'confirm',3), 
 		);
	}