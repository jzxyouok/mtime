<?php

namespace Admin\Controller;
use Think\Controller;

class CinemaController extends LockController{
	
	public function cinemalist(){
		$cinema = M("Cinema");
		$count = $cinema->count();
		$page = new \Think\Page($count,6);
		$show = $page->show();
		$rows = $cinema->field("cinema_id,cinema_name,cinema_address,cinema_tel,cinema_time,cinema_logo,cinema_num,cinema_like")->order("cinema_id asc")->page($_GET['p'],'6')->select();
		$p = $page->nowPage;
		$this->assign("rows",$rows);
		$this->assign('page',$show);
		$this->assign('p',$p);
		$this->display();
	}
	
	public function addcinema(){
		$this->display();
	}
	
	public function add(){
		$upload = new \Think\Upload();
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath = 'Public/';  
		$upload->savePath  = 'Uploads/'; 
		$info   =   $upload->uploadOne($_FILES['cinema_logo']);
		if(!$info) {// 上传错误提示错误信息    
			$this->error($upload->getError());
		}else{// 上传成功 获取上传文件信息    
			$cinema_logo = $info['savepath'].$info['savename'];
		}
		
		$cinema = M("Cinema");
		if($cinema->create()){
			$cinema->cinema_logo = $cinema_logo;
			$cinema->add();
			$this->success("影院添加成功！",U("cinemalist"));
		}else{
			$this->error("影院添加失败！",U("addcinema"));
		}
	}
	
	public function edit(){
		$id = I("id");
		$p = I("p");
		$cinema = M("Cinema");
		$row = $cinema->where("cinema_id = {$id}")->find();
		$this->assign("row",$row);
		$this->assign("p",$p);
		$this->display();
	}
	
	public function update(){
		$p = I("p");
		$cinema = M("Cinema");
		if($cinema->create()){
			if($cinema->save()){
				$this->success("修改成功！",U("cinemalist","p={$p}"));
			}else{
				$this->error("修改失败!",U("cinemalist","p={$p}"));
			}
		}else{
			$this->error("修改失败!",U("cinemalist","p={$p}"));
		}
	}
	
	public function del(){
		$id = I("id");
		$p = I("p");
		$cinema = M("Cinema");
		if($cinema->delete($id)){
			$this->success("删除成功！",U("cinemalist","p={$p}"));
		}else{
			$this->error("删除失败！",U('cinemalist',"p={$p}"));
		}
	}
	
	public function addpic(){
		$cinema = M("Cinema");
		
		$r = $cinema->field("cinema_id,cinema_name")->select();
		$this->assign("r",$r);
		
		$this->display();
	}
	
	public function tjpic(){
		$upload = new \Think\Upload();
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath = 'Public/';  
		$upload->savePath  = 'Uploads/'; 
		$info   =   $upload->uploadOne($_FILES['cinemapic_address']);
		if(!$info) {// 上传错误提示错误信息    
			$this->error($upload->getError());
		}else{// 上传成功 获取上传文件信息    
			$cinemapic_address = $info['savepath'].$info['savename'];
		}
		
		$cinemapic = M("Cinemapic");
		if($cinemapic->create()){
			$cinemapic->cinemapic_address = $cinemapic_address;
			if($cinemapic->add()){
				$this->success("添加成功！",U("addpic"));
			}else{
				$this->success("添加成功！",U("addpic"));
			}
		}else{
			$this->error("添加失败！",U("addpic"));
		}
	}
	
	public function piclist(){
		$cinema = M("Cinema");
		$cinemapic = M("Cinemapic");
		
		
		$r = $cinema->field("cinema_id,cinema_name")->select();
		$this->assign("r",$r);
		
		$id = I("cinema_cid");
		
		if(isset($id) && !empty($id)){
			$cid = $id;
			$count = $cinemapic->where("cinema_cid = {$cid}")->count();
			$page = new \Think\Page($count,6);
			$show = $page->show();
			$rows = $cinemapic->where("cinema_cid = {$cid}")->page($_GET['p'],'6')->select();
			$p = $page->nowPage;
			$this->assign("rows",$rows);
			$this->assign("p",$p);
			$this->assign("show",$show);
		}
		$this->display();
	}
	
	public function delpic(){
		$cid = I("cid");
		$p = I("page");
		$id = I("id");
		
		$cinemapic = M("Cinemapic");
		if($cinemapic->delete($id)){
			$this->success("删除成功！",U("piclist","p={$p} & cinema_cid={$cid}"));
		}else{
			$this->error("删除失败！",U("piclist","p={$p} & cinema_cid={$cid}"));
		}
	}
	
	public function adddetail(){
		$cinema = M("Cinema");
		
		$r = $cinema->field("cinema_id,cinema_name")->select();
		$this->assign("r",$r);
		
		$this->display();
	}
	
	
	public function tjdetail(){
		$cinemadetail = M("Cinemadetail");
		if($cinemadetail->create()){
			$cinemadetail->add();
			$this->success("添加成功",U("detaillist"));
		}else{
			$this->success("添加失败",U("detaillist"));
		}
	}
	
	public function detaillist(){
		$cinema = M("Cinema");
		$cinemadetail = M("Cinemadetail");
		
		
		$r = $cinema->field("cinema_id,cinema_name")->select();
		$this->assign("r",$r);
		
		$id = I("cinema_cid");
		if(isset($id) && !empty($id)){
			$row = $cinemadetail->where("cinema_cid = {$id}")->find();
			$this->assign("row",$row);
		}

		$this->display();
	}
	
	public function editdetail(){
		$cinema_cid = I("cid");
		$cinemadetail = M("Cinemadetail");
		
		if($cinemadetail->create()){
			$cinemadetail->cinema_cid = $cinema_cid;
			
			$cinemadetail->save();
			$this->success("修改成功！",U("detaillist","cinema_cid={$cinema_cid}"));
		}else{
			$this->error("修改失败！",U("detaillist","cinema_cid={$cinema_cid}"));
		}
	}
	
	public function addfilm(){
		$movie = M("Movie");
		$cinema = M("Cinema");
		$mr = $movie->where("movie_status = 1")->select();
		$r = $cinema->select();
		$this->assign("r",$r);
		$this->assign("mr",$mr);
		$this->display();
	}
	
	public function tjfilm(){
		$cmrelation = M("Cmrelation");
		$cmrelation->create();
		if($cmrelation->create()){
			$cmrelation->cm_time = strtotime($cmrelation->cm_time);
			$cmrelation->add();
			$this->success("添加成功！",U("addfilm"));
		}else{
			$this->error("添加失败！",U("addfilm"));
		}
	}
	
	public function addcz(){
		$cmrelation = M("Cmrelation");
		$cinema = M("Cinema");
		$movie = M("Movie");
		$det  = M();
		$r = $cinema->select();
		$this->assign("r",$r);
		
		$cid = I("cm_cid");
		$time = strtotime(I("cm_time"));
	
		if(isset($cid) &&($cid != 0) && isset($time) && !empty($time)){
		
			$rows = $det->query("select movie_id,movie_name,cm_cid,cm_time from m_movie,m_cmrelation where m_cmrelation.cm_cid = {$cid} and m_cmrelation.cm_time = {$time} and m_movie.movie_id = m_cmrelation.cm_mid order by cm_id");
			
			$this->assign("rows",$rows);	
		}
		$this->display();
	}
	
	public function tjcz(){
		$cid = I("cid");
		$mid = I("mid");
		$time = I("time");
		$this->assign("cid",$cid);
		$this->assign("mid",$mid);
		$this->assign("time",$time);
		$this->display();
	}
	
	public function deltjcz(){
		$cid = I("cz_cid");
		$t = I("cz_time");
		$time = strtotime(I("cz_time"));
		$cinemacz = M("Cinemacz");
		if($cinemacz->create()){
			$cinemacz->cz_time = strtotime($cinemacz->cz_time);
			$cinemacz->cz_start = strtotime($cinemacz->cz_start);
			$cinemacz->add();
			$this->success("添加成功！",U("addcz","cm_cid={$cid}&cm_time={$t}"));
		}else{
			$this->error("添加失败！",U("addcz","cm_cid={$cid}&cm_time={$t}"));
		}
	}
	
	public function delcinemafilm(){
		$cid = I("cid");
		$mid = I("mid");
		$time = I("time");
		$t = date("Y-m-d",I("time"));

		$cmrelation = M("Cmrelation");
		$cinemacz = M("Cinemacz");
		if($cmrelation->where("cm_cid = {$cid} and cm_mid = {$mid} and cm_time= {$time}")->delete()){
			$cinemacz->where("cz_cid = {$cid} and cz_mid = {$mid} and cz_time= {$time}")->delete();
			$this->success("删除成功！",U("addcz","cm_cid={$cid}&cm_time={$t}"));
		}else{
			$this->error("删除失败！",U("addcz","cm_cid={$cid}&cm_time={$t}"));
		}
	}
	
	public function cinemaczlist(){
		$cinema = M("Cinema");
		$r = $cinema->select();
		$this->assign("r",$r);
		
		$cid = I("cz_cid");
		$time = strtotime(I("cz_time"));
		
		if(isset($cid) &&($cid != 0) && isset($time) && !empty($time)){
			$cinemacz = M("Cinemacz");
			$rows = $cinemacz->field("m.movie_name,c.cz_cid,c.cz_id,c.cz_time,c.cz_start,c.cz_language,c.cz_tx,c.cz_yt,c.cz_money")->table("m_cinemacz c,m_movie m")->where("m.movie_id = c.cz_mid and c.cz_cid = {$cid} and c.cz_time = {$time}")->order("c.cz_mid asc")->select();
			$this->assign("rows",$rows);
		}
		
		$this->display();
		
	}
	
	public function deletecz(){
		$id = I("id");
		$cid = I("cid");
		$time = I("time");
		$t = date("Y-m-d",I("time"));
		$cinemacz = M("Cinemacz");
		if($cinemacz->delete($id)){
			$this->success("删除成功！",U("cinemaczlist","cz_cid={$cid}&cz_time={$t}"));
		}else{
			$this->success("删除失败！",U("cinemaczlist","cz_cid={$cid}&cz_time={$t}"));
		}
	}
} 