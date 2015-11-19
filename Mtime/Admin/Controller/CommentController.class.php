<?php
	namespace Admin\Controller;
	use Think\Controller;
	
	class CommentController extends LockController{
		
		public function addmediacomment(){
			$movie  = M("Movie");
			$arrs = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
			$this->assign("arrs",$arrs);
			$this->display();
		}
		
		public function addmedia(){
			$mediacomment = M("Mediacomment");
			if($mediacomment->create()){
				$mediacomment->media_time = strtotime($mediacomment->media_time);
				$mediacomment->add();
				$this->success("添加成功！",U("addmediacomment"));
			}else{
				$this->error("添加失败！",U("addmediacomment"));
			}
		}
		
		public function mediacommentlist(){
			$movie  = M("Movie");
			$arrs = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
			$this->assign("arrs",$arrs);
			$id = I("media_mid");
			if(isset($id) && !empty($id)){
				$mediacomment = M("Mediacomment");
				$rows = $mediacomment->where("media_mid = {$id}")->select();
				$this->assign("rows",$rows);
			}
			$this->display();
		}
		
		public function delmedia(){
			$id = I("id");
			$mid = I("mid");
			$mediacomment = M("Mediacomment");
			if($mediacomment->delete($id)){
				$this->success("删除成功！",U("mediacommentlist","media_mid={$mid}"));
			}else{
				$this->error("删除失败！",U("mediacommentlist","media_mid={$mid}"));
			}	
		}
		
		public function editmedia(){
			$id = I("id");
			$mediacomment = M("Mediacomment");
			$row = $mediacomment->where("media_id = {$id}")->find();
			$this->assign("row",$row);
			$this->display();
		}
		
		public function updatemedia(){
			$mid = I("media_mid");
			$mediacomment = M("Mediacomment");
			if($mediacomment->create()){
				$mediacomment->media_time = strtotime($mediacomment->media_time);
				$mediacomment->save();
				$this->success("修改成功！",U("mediacommentlist","media_mid={$mid}"));
			}else{
				$this->error("修改失败！",U("mediacommentlist","media_mid={$mid}"));
			}
		}
		
		public function longcommentlist(){
			$movie  = M("Movie");
			$arrs = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
			$this->assign("arrs",$arrs);
			$id = I("comment_mid");
			if(isset($id) && !empty($id)){
				$longcomment = M("Longcomment");
				$count = $longcomment->count();
				$page = new \Think\Page($count,6);
				$show = $page->show();
				$rows = $longcomment->field("comment_mid,comment_id,comment_title,comment_time,comment_status")->where("comment_mid = {$id} and comment_type = 1")->order("comment_time desc")->page($_GET['p'],'6')->select();
				$p = $page->nowPage;
				$mrow = $rows['0']['comment_mid'];
				$this->assign("rows",$rows);
				$this->assign("mrow",$mrow);
				$this->assign("p",$p);
				$this->assign("show",$show);
			}
			$this->display();
		}
		
		public function lookcomment(){
			$p = I("p");
			$id = I("id");
			$longcomment = M("Longcomment");
			$row = $longcomment->field("comment_id,comment_mid,comment_title,comment_text,comment_status")->where("comment_id = {$id}")->find();
			
			$this->assign("row",$row);
			$this->assign("p",$p);
			$this->display();
		}
		
		public function editcommentstatus(){
			$p = I("p");
			$mid = I("comment_mid");
			$longcomment = M("Longcomment");
			if($longcomment->create()){
				$longcomment->save();
				$this->success("修改成功！",U("longcommentlist","comment_mid={$mid}&p={$p}"));
			}else{
				$this->error("修改失败！",U("longcommentlist","comment_mid={$mid}&p={$p}"));
			}
		}
		
		public function deletecomment(){
			$p = I("p");
			$mid = I("mid");
			$id = I("id");
			$longcomment = M("Longcomment");
			if($longcomment->delete($id)){
				$this->success("删除成功！",U("longcommentlist","comment_mid={$mid}&p={$p}"));
			}else{
				$this->error("删除失败！",U("longcommentlist","comment_mid={$mid}&p={$p}"));
			}	
		}
		
		public function sortcommentlist(){
			$movie  = M("Movie");
			$arrs = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
			$this->assign("arrs",$arrs);
			$id = I("comment_mid");
			if(isset($id) && !empty($id)){
				$longcomment = M("Longcomment");
				$count = $longcomment->count();
				$page = new \Think\Page($count,6);
				$show = $page->show();
				$rows = $longcomment->field("comment_mid,comment_id,comment_title,comment_time,comment_status,comment_text")->where("comment_mid = {$id} and comment_type = 0")->order("comment_time desc")->page($_GET['p'],'6')->select();
				$p = $page->nowPage;
				$mrow = $rows['0']['comment_mid'];
				$this->assign("rows",$rows);
				$this->assign("mrow",$mrow);
				$this->assign("p",$p);
				$this->assign("show",$show);
			}
			$this->display();
		}
		
		public function deletesortcomment(){
			$p = I("p");
			$mid = I("mid");
			$id = I("id");
			$longcomment = M("Longcomment");
			if($longcomment->delete($id)){
				$this->success("删除成功！",U("sortcommentlist","comment_mid={$mid}&p={$p}"));
			}else{
				$this->error("删除失败！",U("sortcommentlist","comment_mid={$mid}&p={$p}"));
			}	
		}
		
		
		public function updatestatus(){
			$longcomment = M("Longcomment");
			$p = I("p");
			$mid = I("mid");
			$id = I("id");
			$longcomment->comment_status = I("status");
			
			if($longcomment->where("comment_id = {$id}")->save()){
				$this->success("修改成功！",U("sortcommentlist","comment_mid={$mid}&p={$p}"));
			}else{
				$this->error("修改失败！",U("sortcommentlist","comment_mid={$mid}&p={$p}"));
			}	
		}
		
		
		public function lookcommentreplay(){
			$recomid = I("id");
			$recomment = M("Recomment");
			$longcomment = M("Longcomment");
			//查询评论的标题
			$comtitle = $longcomment->field("comment_title")->where("comment_id = {$recomid}")->find();
			//查询评论回复
			$count = $recomment->where("recomment_cid = {$recomid}")->count();
			$page = new \Think\Page($count,10);
			$show = $page->show();
			$p = $page->nowPage;
			$recoms = $recomment->field("recomment_id,recomment_time,recomment_text,recomment_status")->where("recomment_cid = {$recomid}")->order("recomment_time desc")->page($_GET['p'],'10')->select();
			
			
			$this->assign("recoms",$recoms);
			$this->assign("comtitle",$comtitle);
			$this->assign("show",$show);
			$this->assign("p",$p);
			$this->display();
		}
		
		public function updatecheck(){
			$recomment = M("Recomment");
			$id = I("recomment_id");
			$date['recomment_status'] = I("status");
			if($recomment->where("recomment_id = {$id}")->save($date)){
				echo 1;
			}else{
				echo 0;
			}
		}
		
		public function lookrecommentreplay(){
			$recomid = I("id");
			$recomment = M("Recomment");
			$longcomment = M("Longcomment");
			
			//查询评论回复
			$count = $recomment->where("recomment_pid = {$recomid}")->count();
			$page = new \Think\Page($count,10);
			$show = $page->show();
			$p = $page->nowPage;
			$recoms = $recomment->field("recomment_id,recomment_time,recomment_text,recomment_status")->where("recomment_pid = {$recomid}")->order("recomment_time desc")->page($_GET['p'],'10')->select();
			
			
			$this->assign("recoms",$recoms);
			$this->assign("show",$show);
			$this->assign("p",$p);
			$this->display();
		}
		
		//删除评论的回复
		public function deleterecomment(){
			$rid = I("recomment_id");
			$recomment = M("Recomment");
			if($recomment->delete($rid)){
				$recomment->where("recomment_pid = {$rid}")->delete();
				echo 1;
			}else{
				echo 0;
			}	
		}
		
		
	}