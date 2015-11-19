<?php

namespace Admin\Controller;
use Think\Controller;

class MemberController extends LockController{
	
	public function memberlist(){
		$member = M("Member");
		$count = $member->where("member_status = 1")->count();
		$page = new \Think\Page($count,7);
		$show = $page->show();
		$rows = $member->where("member_status = 1")->order("id asc")->limit($page->firstRow,$page->listRows)->select();
		$this->assign("rows",$rows);
		$this->assign('page',$show);
		$this->display();
	}
	
	public function disableMember(){
		$member = M("Member");
		$count = $member->where("member_status = 0")->count();
		$page = new \Think\Page($count,7);
		$show = $page->show();
		$rows = $member->where("member_status = 0")->order("id asc")->limit($page->firstRow,$page->listRows)->select();
		$this->assign("rows",$rows);
		$this->assign('page',$show);
		$this->display();
	}
	
	public function del(){
		$id = I("id");
		$member = M("Member");
		if($member->delete($id)){
			$this->success("删除成功！",U("memberlist"));
		}else{
			$this->error("删除失败！",U('memberlist'));
		}
	}
	
	public function disable(){
		$id = I("id");
		$member = M("Member");
		if($member->where("id = {$id}")->setField("member_status","0")){
			$this->success("用户禁用成功！",U("memberlist"));
		}else{
			$this->error("用户禁用失败！",U("memberlist"));
		}
	}
	
	public function enable(){
		$id = I("id");
		$member = M("Member");
		if($member->where("id = {$id}")->setField("member_status","1")){
			$this->success("用户恢复成功！",U("disableMember"));
		}else{
			$this->error("用户恢复失败！",U("disableMember"));
		}
	}
	
	
	/*public function edit(){
		$id = I("id");
		$type = M("Member");
		$row = $type->where("id = {$id}")->find();
		$this->assign("row",$row);
		$this->display();
	}
	
	public function update(){
		$type = M("Type");
		if($type->create()){
			if($type->save()){
				$this->success("修改成功！",U("typelist"));
			}else{
				$this->success("修改失败！",U("typelist"));
			}
		}else{
			$this->success("修改失败！",U("typelist"));
		}
	}*/
}