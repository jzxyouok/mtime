<?php

namespace Home\Controller;
use Think\Controller;


class ProfileController extends LockController{
	
	public function basic(){
		$member = M("Member");
		
		$row = $member->table("m_member m,m_memberdetail d")->where("m.id = d.member_id and m.id = {$_SESSION['member_id']}")->find();
		$this->assign("row",$row);
			/*echo "<pre>";
			print_r($row);
			echo "</pre>";*/
		
		$this->display();
	}
	
	public function update(){
		$memberdetail = M("Memberdetail");
		if($memberdetail->create()){
			
			$memberdetail->save();
			$this->success("保存成功！",U("basic"));
		}else{
			$this->success("保存失败！",U("basic"));
		}
	}
	
	public function avatar(){
		$memberdetail = M("Memberdetail");
		$row = $memberdetail->field("m_id,member_pic")->where("member_id = {$_SESSION['member_id']}")->find();
		$this->assign("row",$row);
		$this->display();
	}
	
	public function upload(){
		$x1 = I("x1");
		$y1 = I("y1");
		
		$upload = new \Think\Upload();
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath = 'Public/';  
		$upload->savePath  = 'Uploads/'; 
		$info   =   $upload->uploadOne($_FILES['member_pic']);
		if(!$info) {// 上传错误提示错误信息    
			$this->error($upload->getError());
		}else{// 上传成功 获取上传文件信息    
			$member_pic = $info['savepath'].$info['savename'];
		}
			$member_p = "./Public/".$info['savepath'].$info['savename'];
		
		$image = new \Think\Image(); 
		$image->open($member_p);
		$image->crop(128,128,$x1,$y1)->save($member_p);
		
		$memberdetail = M("Memberdetail");
		if($memberdetail->create()){
			$memberdetail->member_pic = $member_pic;
			$memberdetail->save();
			$_SESSION['member_pic'] = $member_pic;
			$this->success("头像修改成功！",U("avatar"));
		}else{
			$this->error("头像修改失败！",U("avatar"));
		}
		
		
	}
	
	public function security(){
		$this->display();
	}
	
	public function password(){
		$this->display();
	}
	
	public function findpass(){
		$member = M("Member");
		$map['member_pass']= md5($_GET['pass']);
		$map['id'] = $_SESSION['member_id'];
		$rows = $member->where($map)->find();
		if($rows){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	public function updatepass(){
		$member = M("Member");
		if($member->create()){
			$member->save();
			$this->success("密码修改成功！",U("password"));
		}else{
			$this->error("密码修改失败！",U("password"));
		}
	}
}