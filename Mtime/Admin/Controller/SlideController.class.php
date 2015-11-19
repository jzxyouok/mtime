<?php

namespace Admin\Controller;
use Think\Controller;

class SlideController extends LockController{
	
	public function slidelist(){
		$slide = M("Slide");
		$rows = $slide->field("slide.slide_id,slide.slide_name,slide.slide_bg,slide.slide_pic,slide_time,movie.movie_name")->table("m_slide slide,m_movie movie")->where("movie.movie_id = slide.slide_mid")->select();
		$this->assign("rows",$rows);
		$this->display();
	}
	
	public function addslide(){
		$movie = M("Movie");
		$arrs = $movie->field("movie_id,movie_name")->select();
		$this->assign("arrs",$arrs);
		$this->display();
	}
	
	public function add(){
		$upload = new \Think\Upload();
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath = 'Public/';  
		$upload->savePath  = 'Uploads/'; 
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息    
			$this->error($upload->getError());
		}else{// 上传成功 获取上传文件信息    
			$slide_pic = $info[0]['savepath'].$info[0]['savename'];
			$slide_bg = $info[1]['savepath'].$info[1]['savename'];		
		}
		
		$slide = M("Slide");
		if($slide->create()){
			$slide->slide_time = strtotime($_POST['slide_time']);
			$slide->slide_pic = $slide_pic;
			$slide->slide_bg = $slide_bg;
			if($slide->add()){
				$this->success("添加成功！",U("slidelist"));
			}else{
				$this->error("添加失败！",U("addslide"));
			}
		}else{
			$this->error("添加失败！",U("addslide"));
		}
	}
	
	public function del(){
		$id = I("id");
		$slide = M("Slide");
		if($slide->delete($id)){
			$this->success("删除成功！",U("slidelist"));
		}else{
			$this->error("删除失败！",U('slidelist'));
		}
	}
	
	public function editslide(){
		$id = I("id");
		$slide = M("Slide");
		$movie = M("Movie");
		$array = $movie->field("movie_id,movie_name")->select();
		$row = $slide->field("slide_id,slide_name,slide_time,slide_mid")->where("slide_id = {$id}")->find();
		$this->assign("array",$array);
		$this->assign("row",$row);
		$this->display();
	}
	
	public function update(){
		$slide = M("Slide");
		if($slide->create()){
			$slide->slide_time = strtotime($slide->slide_time);
			if($slide->save()){
				$this->success("修改成功！",U("slidelist"));
			}else{
				$this->success("修改失败！",U("slidelist"));
			}
		}else{
			$this->success("修改失败！",U("slidelist"));
		}
	}
}