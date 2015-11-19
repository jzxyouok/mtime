<?php

namespace Home\Controller;
use Think\Controller;


class MoviedetialController extends Controller{
	
	public function moviesecret(){
		$id = I("id");
		$this->movieinfo($id);
		$secret = M("Secret");
		//查询幕后揭秘的数量和信息
		$snum = $secret->where("secret_mid = {$id}")->count();
		$srow = $secret->where("secret_mid = {$id}")->select();
		$this->assign("srow",$srow);
		$this->assign("snum",$snum);	
		$this->display();
	}
	
	public function movieabstract(){
		$id = I("id");
		$this->movieinfo($id);
		$abstract = M("Abstract");
		//查询剧情介绍的信息
		$srow = $abstract->where("abstract_mid = {$id}")->select();
		$this->assign("srow",$srow);
		$this->display();
	}
	
	public function movieposter(){
		$id = I("id");
		$pic = M("Picture");
		$this->movieinfo($id);
		//查询海报的数量
		$prow = $pic->where("pic_mid = {$id} and pic_big = 1")->select();
		$this->assign("prow",$prow);
		$this->display();
	}
	
	public function movielongcomment(){
		$id = I("id");
		$this->movieinfo($id);
		$longcomment = M("Longcomment");
		$memberdetail = M("Memberdetail");
		$comgrade = M("Comgrade");
		$recomment = M("Recomment");
		
		//查询长影评数量   按赞数排序
		$page = new \Think\Page($lcnum,10);
		$show = $page->show();
		$comrows = $longcomment->field("comment_id,comment_title,comment_text,comment_time,comment_zs,comment_uid,comment_mid")->where("comment_mid = {$id} and comment_status = 1 and comment_type = 1")->order("comment_zs desc")->limit($page->firstRow,$page->listRows)->select();
		foreach($comrows as &$comrow){
			$memid = $comrow['comment_uid'];
			$mem = $memberdetail->field("member_nickname,member_pic,member_id")->where("member_id = {$memid}")->find();
			$comrow['mem'] = $mem;
		}
		foreach($comrows as &$comrow){
			$ugid = $comrow['comment_uid'];
			$mgid = $comrow['comment_mid'];
			$grade = $comgrade->field("comgrade_grade")->where("comgrade_mid = {$mgid} and comgrade_uid = {$ugid}")->find();
			$comrow['grade'] = $grade;
		}
		foreach($comrows as &$comrow){
			$comid = $comrow['comment_id'];
			$replay = $recomment->where("recomment_cid = {$comid} and recomment_status = 1")->count();
			$comrow['replaynum'] = $replay;
		}
		
		$this->assign("show",$show);	
		$this->assign("comrows",$comrows);
		$this->display();
	}
	
	public function newmovielongcomment(){
		$id = I("id");
		$this->movieinfo($id);
		$longcomment = M("Longcomment");
		$memberdetail = M("Memberdetail");
		$comgrade = M("Comgrade");
		$recomment = M("Recomment");
		
		
		//查询长影评数量   按赞数排序
		$page = new \Think\Page($lcnum,10);
		$show = $page->show();
		$comrows = $longcomment->field("comment_id,comment_title,comment_text,comment_time,comment_zs,comment_uid,comment_mid")->where("comment_mid = {$id} and comment_status = 1 and comment_type = 1")->order("comment_time desc")->limit($page->firstRow,$page->listRows)->select();
		foreach($comrows as &$comrow){
			$memid = $comrow['comment_uid'];
			$mem = $memberdetail->field("member_nickname,member_pic,member_id")->where("member_id = {$memid}")->find();
			$comrow['mem'] = $mem;
		}
		foreach($comrows as &$comrow){
			$ugid = $comrow['comment_uid'];
			$mgid = $comrow['comment_mid'];
			$grade = $comgrade->field("comgrade_grade")->where("comgrade_mid = {$mgid} and comgrade_uid = {$ugid}")->find();
			$comrow['grade'] = $grade;
		}
		foreach($comrows as &$comrow){
			$comid = $comrow['comment_id'];
			$replay = $recomment->where("recomment_cid = {$comid} and recomment_status = 1")->count();
			$comrow['replaynum'] = $replay;
		}
		
		$this->assign("show",$show);	
		$this->assign("comrows",$comrows);
		$this->display();
	}
	
	
	public function moviesortcomment(){
		$id = I("id");
		$this->movieinfo($id);
		$longcomment = M("Longcomment");
		$memberdetail = M("Memberdetail");
		$recomment = M("Recomment");
		$comgrade = M("Comgrade");
		
		//查询短影评数量   按赞数排序
		$page = new \Think\Page($scnum,10);
		$show = $page->show();
		$comrows = $longcomment->field("comment_id,comment_title,comment_text,comment_time,comment_zs,comment_uid,comment_mid")->where("comment_mid = {$id} and comment_status = 1 and comment_type = 0")->order("comment_time desc")->limit($page->firstRow,$page->listRows)->select();
		foreach($comrows as &$comrow){
			$memid = $comrow['comment_uid'];
			$mem = $memberdetail->field("member_nickname,member_pic,member_id")->where("member_id = {$memid}")->find();
			$comrow['mem'] = $mem;
		}
		foreach($comrows as &$comrow){
			$ugid = $comrow['comment_uid'];
			$mgid = $comrow['comment_mid'];
			$grade = $comgrade->field("comgrade_grade")->where("comgrade_mid = {$mgid} and comgrade_uid = {$ugid}")->find();
			$comrow['grade'] = $grade;
		}
		foreach($comrows as &$comrow){
			$comid = $comrow['comment_id'];
			$replay = $recomment->where("recomment_cid = {$comid} and recomment_status = 1")->count();
			$comrow['replaynum'] = $replay;
		}
		
		$this->assign("show",$show);	
		$this->assign("comrows",$comrows);

		$this->display();
	}
	
	public function movievideo(){	
		$id = I("id");
		$video = M("Video");
		$this->movieinfo($id);
		
		//查询视频信息
		$vrows = $video->field("video_id,video_pic,video_name,video_time")->where("video_mid = {$id}")->order("video_addtime")->select();
		$this->assign("vrows",$vrows);
		$this->display();
	}
	
	public function movieinfo($id){
		$id = $id;
		$movie = M("Movie");
		$video = M("Video");
		$pic = M("Picture");
		$actor = M("Filmactor");
		$longcomment = M("Longcomment");
		$memberdetail = M("Memberdetail");
		$comgrade = M("Comgrade");
		$recomment = M("Recomment");
		
		//电影信息
		$mrow = $movie->field("movie_id,movie_name,movie_ename,movie_start")->where("movie_id = {$id}")->find();
		
		//该电影视频数量
		$vnum = $video->where("video_mid = {$id}")->count();
		
		//该电影图片数量
		$pnum = $pic->where("pic_mid = {$id}")->count();
		
		//该电影演员数量
		$anum = $actor->where("filma_mid = {$id}")->count();
	
		//短影评数量
		$scnum = $longcomment->where("comment_mid = {$id} and comment_type = 0")->count();
	
		//长影评数量
		$lcnum = $longcomment->where("comment_mid = {$id} and comment_type = 1")->count();
		
		//影评总数量
		$cnum = $scnum+$lcnum;
		
		$this->assign("mrow",$mrow);	
		$this->assign("vnum",$vnum);
		$this->assign("pnum",$pnum);
		$this->assign("anum",$anum);	
		$this->assign("cnum",$cnum);	
		$this->assign("scnum",$scnum);	
		$this->assign("lcnum",$lcnum);		
	}
	
	
}