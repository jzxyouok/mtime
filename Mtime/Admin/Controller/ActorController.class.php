<?php

namespace Admin\Controller;
use Think\Controller;

class ActorController extends LockController{
	
	public function actorlist(){
		$actor = M("Actor");
		$count = $actor->count();
		$page = new \Think\Page($count,5);
		$show = $page->show();
		$rows = $actor->order("actor_id asc")->limit($page->firstRow,$page->listRows)->select();
		$this->assign("rows",$rows);
		$this->assign('page',$show);
		$this->display();
	}
	
	public function addactor(){
		$ident = M("Identify");
		$iden = $ident->select();
		$this->assign("iden",$iden);
		$this->display();
	}
	
	public function add(){
		if(!empty($_FILES['actor_pic']['name'])){
			$upload = new \Think\Upload();
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath = 'Public/';  
			$upload->savePath  = 'Uploads/'; 
			$info   =   $upload->upload();
			if(!$info) {// 上传错误提示错误信息    
				$this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息    
				$actor_pic = $info['actor_pic']['savepath'].$info['actor_pic']['savename'];		
			}
		}else{
			$actor_pic = "";
		}
		
		$actor = M("Actor");
		$air = M("Airelation");
		if($actor->create()){
			$actor->actor_pic = $actor_pic;
			$aid = $actor->add();
			$fid = I("air_name");
				foreach($fid as $id){
					$data['aid'] = $aid; 
					$data['fid'] = $id; 
					$air->add($data);
				}	
			$this->success("添加成功！",U('actorlist'));		
		}else{
			$this->error("添加失败！",U('addactor'));
		}
	}
	
	public function del(){
		$id = I("id");
		$actor = M("Actor");
		if($actor->delete($id)){
			$this->success("删除成功！",U("actorlist"));
		}else{
			$this->error("删除失败！",U('actorlist'));
		}
	}
	
	public function editactor(){
		$id = I("id");
		$actor = M("Actor");
		$row = $actor->where("actor_id = {$id}")->find();
		$this->assign("row",$row);
		$this->display();
	}
	
	public function update(){
		$actor = M("Actor");
		if($actor->create()){
			if($actor->save()){
				$this->success("修改成功！",U("actorlist"));
			}else{
				$this->success("修改失败！",U("actorlist"));
			}
		}else{
			$this->success("修改失败！",U("actorlist"));
		}
	}
}