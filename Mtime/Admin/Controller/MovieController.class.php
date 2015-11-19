<?php

namespace Admin\Controller;
use Think\Controller;

class MovieController extends LockController{
	
	public function movielist(){
		$movie = M("Movie");
		$count = $movie->count();
		$page = new \Think\Page($count,6);
		$show = $page->show();
		$rows = $movie->field("movie_id,movie_name,movie_ename,movie_start,movie_country,movie_resume,movie_graded,movie_office,movie_hot,movie_presell,movie_big,movie_status")->where("movie_status = 1")->order("movie_id asc")->limit($page->firstRow,$page->listRows)->select();
		$this->assign("rows",$rows);
		$this->assign('page',$show);
		$this->display();
	}
	
	public function addMovie(){
		$type = M("Type");
		$t = $type->select();
		$this->assign("t",$t);
		$this->display();
	}
	
	public function add(){
		$upload = new \Think\Upload();
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath = 'Public/';  
		$upload->savePath  = 'Uploads/'; 
		$info   =   $upload->uploadOne($_FILES['movie_pic']);
		if(!$info) {// 上传错误提示错误信息    
			$this->error($upload->getError());
		}else{// 上传成功 获取上传文件信息    
			$movie_pic = $info['savepath'].$info['savename'];
		}
		$movie = M("Movie");
		$mt = M("Mtrelation");
		if($movie->create()){
			$movie->movie_pic = $movie_pic;
			$movie->movie_start = strtotime($movie->movie_start);
			$mid = $movie->add();
			$tid = I("movie_type");
			foreach($tid as $id){
				$data['mid'] = $mid; 
				$data['tid'] = $id; 
				$mt->add($data);
			}
			$this->success("电影添加成功！",U("movielist"));
		}else{
			$this->error("电影添加失败！",U("addmovie"));
		}
	}
	
	public function del(){
		$id = I("id");
		$movie = M("Movie");
		if($movie->delete($id)){
			$this->success("删除成功！",U("movielist"));
		}else{
			$this->error("删除失败！",U('movielist'));
		}
	}
	
	public function edit(){
		$id = I("id");
		$movie = M("Movie");
		$row = $movie->where("movie_id = {$id}")->find();
		$this->assign("row",$row);
		$this->display();
	}
	
	public function update(){
		$movie = M("Movie");
		if($movie->create()){
			$movie->movie_start = strtotime($movie->movie_start);
			if($movie->save()){
				$this->success("修改成功！",U("movielist"));
			}else{
				$this->error("修改失败!",U("movielist"));
			}
		}else{
			$this->error("修改失败!",U("movielist"));
		}
	}
	
	public function addactor(){
		$movie = M("Movie");
		$actor = M("Actor");
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$a = $actor->table("m_actor actor,m_airelation rel")->field("actor_id,actor_name")->where("rel.fid = 1 and rel.aid = actor.actor_id")->select();
		
		$this->assign("r",$r);
		$this->assign("a",$a);
		
		$this->display();
	}
	
	public function tjactor(){
		if(!empty($_FILES['filma_pic']['name'])){
			$upload = new \Think\Upload();
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath = 'Public/';  
			$upload->savePath  = 'Uploads/'; 
			$info   =   $upload->uploadOne($_FILES['filma_pic']);
			if(!$info) {// 上传错误提示错误信息    
				$this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息    
				$filma_pic = $info['savepath'].$info['savename'];
			}
		}else{
			$filma_pic = ""; 
		}
		$filma = M("Filmactor");
		if($filma->create()){
			$filma->filma_pic = $filma_pic;
			if($filma->add()){
				$this->success("添加成功！",U("addactor"));
			}else{
				$this->error("添加失败！",U("addactor"));
			}
		}else{
			$this->error("添加失败！",U("addactor"));
		}
	}
	
	public function adddirector(){
		$movie = M("Movie");
		$actor = M("Actor");
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$d = $actor->table("m_actor actor,m_airelation rel")->field("actor_id,actor_name")->where("rel.fid = 2 and rel.aid = actor.actor_id")->select();
		
		$this->assign("r",$r);
		$this->assign("d",$d);
		
		$this->display();
	}
	
	public function tjdirector(){
		$filmd = M("Filmdirector");
		if($filmd->create()){
			$filmd->add();
			$this->success("添加成功！",U("adddirector"));
		}else{
			$this->error("添加失败！",U("adddirector"));
		}
	}
	
	public function addeditor(){
		$movie = M("Movie");
		$actor = M("Actor");
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$e = $actor->table("m_actor actor,m_airelation rel")->field("actor_id,actor_name")->where("rel.fid = 3 and rel.aid = actor.actor_id")->select();
		
		$this->assign("r",$r);
		$this->assign("e",$e);
		
		$this->display();
	}
	
	public function tjeditor(){
		$filme = M("Filmeditor");
		if($filme->create()){
			$filme->add();
			$this->success("添加成功！",U("addeditor"));
		}else{
			$this->error("添加失败！",U("addeditor"));
		}
	}
	
	public function addvideo(){
		$movie = M("Movie");
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$this->assign("r",$r);
		
		$this->display();
	}
	
	public function tjvideo(){
		$upload = new \Think\Upload();
		if(strstr($_FILES['video_pic']['type'],'/',true)=='image'){
			$upload->maxSize   =     3145728  ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath = 'Public/';  
			$upload->savePath  = 'Uploads/'; 
			$info   =   $upload->uploadOne($_FILES['video_pic']);
			if(!$info) {// 上传错误提示错误信息    
				$this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息    
				$video_pic = $info['savepath'].$info['savename'];
			}
		}
		if(strstr($_FILES['video_address']['type'],'/',true)=='video'){
			$upload->maxSize   =     15728640 ;// 设置附件上传大小
			$upload->exts      =     array('mp4');// 设置附件上传类型
			$upload->rootPath = 'Public/';  
			$upload->savePath  = 'Video/'; 
			$info   =   $upload->uploadOne($_FILES['video_address']);
			if(!$info) {// 上传错误提示错误信息    
				$this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息    
				$video_address = $info['savepath'].$info['savename'];
			}	
		}
	
		$video = M("Video");
		if($video->create()){
			$video->video_pic = $video_pic;
			$video->video_address = $video_address;
			$video->video_addtime = time();
			if($video->add()){
				$this->success("添加成功！",U("addvideo"));
			}else{
				$this->success("添加成功！",U("addvideo"));
			}
		}else{
			$this->error("添加失败！",U("addvideo"));
		}
	}
	
	public function addpic(){
		$movie = M("Movie");
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$this->assign("r",$r);
		
		$this->display();
	}
	
	public function tjpic(){
		$upload = new \Think\Upload();
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath = 'Public/';  
		$upload->savePath  = 'Uploads/'; 
		$info   =   $upload->uploadOne($_FILES['pic_address']);
		if(!$info) {// 上传错误提示错误信息    
			$this->error($upload->getError());
		}else{// 上传成功 获取上传文件信息    
			$pic_address = $info['savepath'].$info['savename'];
		}
		
		$pic = M("Picture");
		if($pic->create()){
			$pic->pic_address = $pic_address;
			if($pic->add()){
				$this->success("添加成功！",U("addpic"));
			}else{
				$this->success("添加成功！",U("addpic"));
			}
		}else{
			$this->error("添加失败！",U("addpic"));
		}
	}
	
	public function piclist(){
		$movie = M("Movie");
		$pic = M("Picture");
		
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$this->assign("r",$r);
		
		$id = I("movie_id");
		
		if(isset($id) && !empty($id)){
		/*	添加自定义类
			$picture = M();
			$mid = $id;
			$count = $pic->where("pic_mid = {$mid}")->count();
			$page = new \Org\Util\Page($count,6);
			
			$rows =$picture->query("select * from m_picture where pic_mid = {$mid} {$page->limit}");
				
			$show = $page->fpage();
			$p = $page->page;
			$this->assign("show",$show);
			$this->assign("p",$p);
			$this->assign("rows",$rows);*/
			
			$mid = $id;
			$count = $pic->where("pic_mid = {$mid}")->count();
			$page = new \Think\Page($count,6);
			$show = $page->show();
			$rows = $pic->where("pic_mid = {$mid}")->page($_GET['p'],'6')->select();
			$p = $page->nowPage;
			$this->assign("rows",$rows);
			$this->assign("p",$p);
			$this->assign("show",$show);
		}
		$this->display();
	}
	
	public function delpic(){
		$mid = I("mid");
		$p = I("page");
		$id = I("id");
		
		$pic = M("Picture");
		if($pic->delete($id)){
			$this->success("删除成功！",U("piclist","p={$p} & movie_id={$mid}"));
		}else{
			$this->error("删除失败！",U("piclist","p={$p} & movie_id={$mid}"));
		}
	}
	
	public function videolist(){
		$movie = M("Movie");
		$video = M("Video");
		
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$this->assign("r",$r);
		
		$id = I("movie_id");
		
		if(isset($id) && !empty($id)){	
			$mid = $id;
			$count = $video->where("video_mid = {$mid}")->count();
			$page = new \Think\Page($count,6);
			$show = $page->show();
			$rows = $video->where("video_mid = {$mid}")->page($_GET['p'],'6')->select();
			$p = $page->nowPage;
			$this->assign("rows",$rows);
			$this->assign("p",$p);
			$this->assign("show",$show);
		}
		$this->display();
	}
	
	public function delvideo(){
		$mid = I("mid");
		$p = I("page");
		$id = I("id");
		
		$video = M("Video");
		if($video->delete($id)){
			$this->success("删除成功！",U("videolist","p={$p} & movie_id={$mid}"));
		}else{
			$this->error("删除失败！",U("videolist","p={$p}"));
		}
	}
	
	public function addsecret(){
		$movie = M("Movie");
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$this->assign("r",$r);
		
		$this->display();
	}
	
	public function tjsecret(){
		$secret = M("Secret");
		if($secret->create()){
			$secret->add();
			$this->success("添加成功！",U("addsecret"));
		}else{	
			$this->error("添加失败！",U("addsecret"));
		}
	}
	
	public function secretlist(){
		$movie = M("Movie");
		$secret = M("Secret");
		
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$this->assign("r",$r);
		
		$id = I("movie_id");
		
		if(isset($id) && !empty($id)){	
			$mid = $id;
			$count = $secret->where("secret_mid = {$mid}")->count();
			$page = new \Think\Page($count,6);
			$show = $page->show();
			$rows = $secret->where("secret_mid = {$mid}")->page($_GET['p'],'6')->select();
			$p = $page->nowPage;
			$this->assign("rows",$rows);
			$this->assign("p",$p);
			$this->assign("show",$show);
		}
		$this->display();
	}
	
	public function delsecret(){
		$mid = I("mid");
		$p = I("page");
		$id = I("id");
		
		$secret = M("Secret");
		if($secret->delete($id)){
			$this->success("删除成功！",U("secretlist","p={$p} & movie_id={$mid}"));
		}else{
			$this->error("删除失败！",U("secretlist","p={$p}"));
		}
	}
	
	public function addabstract(){
		$movie = M("Movie");
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$this->assign("r",$r);
		
		$this->display();
	}
	
	public function tjabstract(){
		$abstract = M("Abstract");
		if($abstract->create()){
			$abstract->add();
			$this->success("添加成功！",U("addabstract"));
		}else{	
			$this->error("添加失败！",U("addabstract"));
		}
	}
	
	public function abstractlist(){
		$movie = M("Movie");
		$abstract = M("Abstract");
		
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$this->assign("r",$r);
		
		$id = I("movie_id");
		
		if(isset($id) && !empty($id)){	
			$mid = $id;
			$count = $abstract->where("abstract_mid = {$mid}")->count();
			$page = new \Think\Page($count,6);
			$show = $page->show();
			$rows = $abstract->where("abstract_mid = {$mid}")->page($_GET['p'],'6')->select();
			$p = $page->nowPage;
			$this->assign("rows",$rows);
			$this->assign("p",$p);
			$this->assign("show",$show);
		}
		$this->display();
	}
	
	public function delabstract(){
		$mid = I("mid");
		$p = I("page");
		$id = I("id");
		
		$abstract = M("Abstract");
		if($abstract->delete($id)){
			$this->success("删除成功！",U("abstractlist","p={$p} & movie_id={$mid}"));
		}else{
			$this->error("删除失败！",U("abstractlist","p={$p}"));
		}
	}
	
	public function actorlist(){
		$movie = M("Movie");
		$filma = M("Filmactor");
		$actor = M("Actor");
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$this->assign("r",$r);
		
		$id = I("movie_id");
		
		if(isset($id) && !empty($id)){
			$mid = $id;
			$count = $filma->where("filma_mid = {$mid}")->count();
			$page = new \Think\Page($count,9);
			$show = $page->show();
			$rows = $filma->field("f.filma_id,f.filma_mid,f.filma_name,f.filma_pic,a.actor_name")->table("m_filmactor f,m_actor a")->where("f.filma_mid = {$mid} and a.actor_id = f.filma_aid")->page($_GET['p'],'9')->select();
			$mrow = $rows[0]['filma_mid'];
			$p = $page->nowPage;
			$this->assign("rows",$rows);
			$this->assign("p",$p);
			$this->assign("show",$show);
			$this->assign("mrow",$mrow);
		}
		$this->display();
	}
	
	public function editactor(){
		$id = I("id");
		$p = I("p");
		$filma = M("Filmactor");
		$row = $filma->field("filma_id,filma_name,filma_mid")->where("filma_id = {$id}")->find();
		$this->assign("row",$row);
		$this->assign("p",$p);
		$this->display();
	}
	
	public function updateactor(){
		$filma = M("Filmactor");
		$id = I("filma_id");
		$mid = I("filma_mid");
		$p = I("p");
		if(!empty($_FILES['filma_pic']['name'])){
			$upload = new \Think\Upload();
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath = 'Public/';  
			$upload->savePath  = 'Uploads/'; 
			$info   =   $upload->uploadOne($_FILES['filma_pic']);
			if(!$info) {// 上传错误提示错误信息    
				$this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息    
				$filma_pic = $info['savepath'].$info['savename'];
			}
		}else{
			$filma_pic = $filma->field("filma_pic")->where("filma_id = {$id}")->find();
		}
		
		if($filma->create()){
			$filma->filma_pic = $filma_pic;
			$filma->save();
			$this->success("修改成功！",U("actorlist","movie_id={$mid}&p={$p}"));
		}else{
			$this->error("修改失败！",U("actorlist","movie_id={$mid}&p={$p}"));
		}
	}
	
	public function deleteactor(){
		$id = I("id");
		$mid = I("mid");
		$p = I("p");
		$filma = M("Filmactor");
		if($filma->delete($id)){
			$this->success("删除成功！",U("actorlist","movie_id={$mid}&p={$p}"));
		}else{
			$this->error("删除失败！",U("actorlist","movie_id={$mid}&p={$p}"));
		}
	}
	
	public function directorlist(){
		$movie = M("Movie");
		$filmd = M("Filmdirector");
		$actor = M("Actor");
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$this->assign("r",$r);
		
		$id = I("movie_id");
		
		if(isset($id) && !empty($id)){
			$mid = $id;
			$rows = $filmd->field("f.filmd_id,f.filmd_mid,a.actor_name")->table("m_filmdirector f,m_actor a")->where("f.filmd_mid = {$mid} and a.actor_id = f.filmd_aid")->select();
			$mrow = $rows[0]['filmd_mid'];
			$this->assign("rows",$rows);
			$this->assign("mrow",$mrow);
		}
		$this->display();
	}
	
	public function deletedirector(){
		$id = I("id");
		$mid = I("mid");
		$filmd = M("Filmdirector");
		if($filmd->delete($id)){
			$this->success("删除成功！",U("directorlist","movie_id={$mid}"));
		}else{
			$this->error("删除失败！",U("directorlist","movie_id={$mid}"));
		}
	}
	
	public function editorlist(){
		$movie = M("Movie");
		$filme = M("Filmeditor");
		$actor = M("Actor");
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$this->assign("r",$r);
		
		$id = I("movie_id");
		
		if(isset($id) && !empty($id)){
			$mid = $id;
			$rows = $filme->field("f.filme_id,f.filme_mid,a.actor_name")->table("m_filmeditor f,m_actor a")->where("f.filme_mid = {$mid} and a.actor_id = f.filme_aid")->select();
			$mrow = $rows[0]['filme_mid'];
			$this->assign("rows",$rows);
			$this->assign("mrow",$mrow);
		}
		$this->display();
	}
	
	public function deleteeditor(){
		$id = I("id");
		$mid = I("mid");
		$filme = M("Filmeditor");
		if($filme->delete($id)){
			$this->success("删除成功！",U("editorlist","movie_id={$mid}"));
		}else{
			$this->error("删除失败！",U("editorlist","movie_id={$mid}"));
		}
	}
	
	public function addguessmovie(){
		$movie = M("Movie");
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		
		$this->assign("r",$r);
		
		$this->display();
	}
	
	public function tjguessmovie(){
		$upload = new \Think\Upload();
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath = 'Public/';  
		$upload->savePath  = 'Uploads/'; 
		$info   =   $upload->uploadOne($_FILES['guess_pic']);
		if(!$info) {// 上传错误提示错误信息    
			$this->error($upload->getError());
		}else{// 上传成功 获取上传文件信息    
			$guess_pic = $info['savepath'].$info['savename'];
		}
		
		$guess = M("Guessmovie");
		if($guess->create()){
			$guess->guess_pic = $guess_pic;
			if($guess->add()){
				$this->success("添加成功！",U("addguessmovie"));
			}else{
				$this->error("添加失败！",U("addguessmovie"));
			}
		}else{
			$this->error("添加失败！",U("addguessmovie"));
		}
	}
	
	public function guessmovielist(){
		$movie = M("Movie");
		$guess = M("Guessmovie");
		
		$r = $movie->field("movie_id,movie_name")->where("movie_status = 1")->select();
		$this->assign("r",$r);
		
		$id = I("movie_id");
		
		if(isset($id) && !empty($id)){
			$mid = $id;
			$count = $guess->where("guess_mid = {$mid}")->count();
			$page = new \Think\Page($count,9);
			$show = $page->show();
			$rows = $guess->where("guess_mid = {$mid}")->page($_GET['p'],'9')->select();
			$mrow = $rows[0]['guess_mid'];
			$p = $page->nowPage;
			$this->assign("rows",$rows);
			$this->assign("p",$p);
			$this->assign("show",$show);
			$this->assign("mrow",$mrow);
		}
		$this->display();
	}
	
	public function editguess(){
		$id = I("id");
		$p = I("p");
		$guess = M("Guessmovie");
		$row = $guess->where("guess_id = {$id}")->find();
		$this->assign("row",$row);
		$this->assign("p",$p);
		$this->display();
	}
	
	public function updateguess(){
		$guess = M("Guessmovie");
		$id = I("guess_id");
		$mid = I("guess_mid");
		$p = I("p");
		if(!empty($_FILES['guess_pic']['name'])){
			$upload = new \Think\Upload();
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath = 'Public/';  
			$upload->savePath  = 'Uploads/'; 
			$info   =   $upload->uploadOne($_FILES['guess_pic']);
			if(!$info) {// 上传错误提示错误信息    
				$this->error($upload->getError());
			}else{// 上传成功 获取上传文件信息    
				$guess_pic = $info['savepath'].$info['savename'];
			}
		}else{
			$guess_pic = $guess->field("guess_pic")->where("guess_id = {$id}")->find();
		}
		
		if($guess->create()){
			$guess->guess_pic = $guess_pic;
			$guess->save();
			$this->success("修改成功！",U("guessmovielist","movie_id={$mid}&p={$p}"));
		}else{
			$this->error("修改失败！",U("guessmovielist","movie_id={$mid}&p={$p}"));
		}
	}
	
	public function deleteguess(){
		$id = I("id");
		$mid = I("mid");
		$p = I("p");
		$guess = M("Guessmovie");
		if($guess->delete($id)){
			$this->success("删除成功！",U("guessmovielist","movie_id={$mid}&p={$p}"));
		}else{
			$this->error("删除失败！",U("guessmovielist","movie_id={$mid}&p={$p}"));
		}
	}
	
	
	
}