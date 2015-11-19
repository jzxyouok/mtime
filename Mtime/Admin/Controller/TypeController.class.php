<?php

namespace Admin\Controller;
use Think\Controller;

class TypeController extends LockController{
	
	public function typelist(){
		$type = M("Type");
		$count = $type->count();
		$page = new \Think\Page($count,9);
		$show = $page->show();
		$rows = $type->order("type_id asc")->limit($page->firstRow,$page->listRows)->select();
		$this->assign("rows",$rows);
		$this->assign('page',$show);
		$this->display();
	}
	
	public function addtype(){
		$this->display();
	}
	
	public function add(){
		$type = M("Type");
		if($type->create()){
			if($type->add()){
				$this->success("添加成功！",U('typelist'));
			}else{
				$this->error("添加失败！",U('addtype'));
			}			
		}else{
			$this->error("添加失败！",U('addtype'));
		}
	}
	
	public function del(){
		$id = I("id");
		$type = M("Type");
		if($type->delete($id)){
			$this->success("删除成功！",U("typelist"));
		}else{
			$this->error("删除失败！",U('typelist'));
		}
	}
	
	public function edit(){
		$id = I("id");
		$type = M("Type");
		$row = $type->where("type_id = {$id}")->find();
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
	}
}