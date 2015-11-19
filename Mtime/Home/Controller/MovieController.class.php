<?php

namespace Home\Controller;
use Think\Controller;

class MovieController extends Controller{
	public function movieindex(){
		$id = I("id");
		$uid = $_SESSION['member_id'];
		
		$movie = M("Movie");
		$filma = M("Filmactor");
		$filmd = M("Filmdirector");
		$filme = M("Filmeditor");
		$video = M("Video");
		$pic = M("Picture");
		$secret = M("Secret");
		$abstract = M("Abstract");
		$type = M("Type");
		$cinemacz = M("Cinemacz");
		$cmrelation = M("Cmrelation");
		$mediacomment = M("Mediacomment");
		$longcomment = M("Longcomment");
		$comgrade = M("Comgrade");
		$recomment = M("Recomment");
		$guessmovie = M("Guessmovie");
		
		$nowtime = strtotime(date("Y-m-d",time()));
		
		//查看电影剧情
		$arow = $abstract->where("abstract_mid = {$id}")->find();
		
		/*
		echo mb_substr(strip_tags(htmlspecialchars_decode($arow['abstract_text'])),0,20,'utf-8');
		exit;
		*/
		//查询电影幕后表
		$srow = $secret->where("secret_mid = {$id}")->find();
		$snum = $secret->where("secret_mid = {$id}")->count();
		
		//查询电影信息
		$row = $movie->where("movie_id = {$id}")->find();
		
		//查询某个会员对该电影的评分
		if($_SESSION['member_id']){
			$comnum = $comgrade->where("comgrade_mid = {$id} and comgrade_uid = {$uid}")->find();
		}
		
		//查询电影分类
		$trows = $type->field("t.type_name")->table("m_mtrelation r,m_type t")->where("r.mid = {$id} and r.tid = t.type_id")->select();
		
		
		//获取所有的演职员的数量
		$anum = $filma->where("filma_mid = {$id}")->count();
		$dnum = $filmd->where("filmd_mid = {$id}")->count();
		$enum = $filme->where("filme_mid = {$id}")->count();
		$num = $anum + $dnum + $enum;
		
		//查询演员表
		$actors = $filma->table("m_filmactor f,m_actor a")->where("f.filma_mid = {$id} and f.filma_aid = a.actor_id")->select();
		//查询导演表
		$director = $filmd->field("a.actor_id,a.actor_name")->table("m_filmdirector f,m_actor a")->where("f.filmd_mid = {$id} and f.filmd_aid = a.actor_id")->select();
		//查询编剧表
		$editors = $filme->field("a.actor_id,a.actor_name")->table("m_filmeditor f,m_actor a")->where("f.filme_mid = {$id} and f.filme_aid = a.actor_id")->select();
		
		//查询电影视频
		$vrows = $video->where("video_mid = {$id}")->order("video_addtime desc")->select();
		$vnum = $video->where("video_mid = {$id}")->count();
		
		//查询电影剧照
		$prows = $pic->where("pic_mid = {$id} and pic_big = 0")->select();
		$pnum = $pic->where("pic_mid = {$id}")->count();
		
		//查询媒体评论
		$mrows = $mediacomment->where("media_mid = {$id}")->select();
		
		//查询长影评
		$lrows = $longcomment->field("l.comment_id,l.comment_mid,l.comment_title,l.comment_text,l.comment_time,l.comment_zs,d.member_nickname,d.member_pic,g.comgrade_grade")->table("m_longcomment l,m_memberdetail d,m_comgrade g")->where("g.comgrade_uid = l.comment_uid and g.comgrade_mid = {$id} and l.comment_mid = {$id} and d.member_id = l.comment_uid and l.comment_status = 1 and l.comment_type = 1")->order("l.comment_zs desc")->limit(10)->select();
		foreach($lrows as &$lrow){
			$comid = $lrow['comment_id'];
			$replay = $recomment->where("recomment_cid = {$comid} and recomment_status = 1")->count();
			$lrow['replaynum'] = $replay;
		}
			
		//查询短影评
		$srows = $longcomment->field("l.comment_id,l.comment_mid,l.comment_uid,l.comment_title,l.comment_text,l.comment_time,l.comment_zs,d.member_nickname,d.member_pic")->table("m_longcomment l,m_memberdetail d")->where("l.comment_mid = {$id} and d.member_id = l.comment_uid and l.comment_status = 1 and l.comment_type = 0")->order("l.comment_time desc")->limit(10)->select();
		foreach($srows as &$srow){
			$cid = $srow['comment_id'];
			$repnum = $recomment->where("recomment_cid = {$cid}")->count();
			$srow['repnum'] = $repnum;
		}
		foreach($srows as &$srow){
			$commid = $srow['comment_mid'];
			$comuid = $srow['comment_uid'];
			$repgrade = $comgrade->field("comgrade_grade")->where("comgrade_mid = {$commid} and comgrade_uid = {$comuid}")->find();
			$srow['grade'] = $repgrade;
		}
				
		//查询影评数量
		$cnum = $longcomment->where("comment_mid = {$id} and comment_status = 1")->count();
		
		//查询长影评数量
		$lnum = $longcomment->where("comment_mid = {$id} and comment_status = 1 and comment_type = 1")->count();
		
		//查询该电影的竞猜
		$grow = $guessmovie->where("guess_mid = {$id}")->find();
	
		$this->assign("num",$num);
		$this->assign("vnum",$vnum);
		$this->assign("pnum",$pnum);
		$this->assign("snum",$snum);
		$this->assign("cnum",$cnum);
		$this->assign("lnum",$lnum);
		$this->assign("row",$row);
		$this->assign("srow",$srow);
		$this->assign("trows",$trows);
		$this->assign("actors",$actors);
		$this->assign("director",$director);
		$this->assign("editors",$editors);
		$this->assign("vrows",$vrows);
		$this->assign("prows",$prows);
		$this->assign("arow",$arow);
		$this->assign("nowtime",$nowtime);
		$this->assign("mrows",$mrows);
		$this->assign("lrows",$lrows);
		$this->assign("srows",$srows);
		$this->assign("comnum",$comnum);
		$this->assign("grow",$grow);
		
		$this->display();
	}
	
	public function guessmovie(){
		$guessmovie = M("Guessmovie");
		$result = I("result");
		$guessid = I("guessid");
		$res = $guessmovie->field("guess_result")->where("guess_id = {$guessid}")->find();
		if($result == $res['guess_result']){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	public function movievideo(){
		$vid = I("vid");
		$video = M("Video");
		$row = $video->table("m_movie m,m_video v")->field("movie_id,movie_name,video_name,video_address")->where("m.movie_id = v.video_mid and video_id = {$vid}")->find();
		$this->assign("row",$row);
		$this->display();
	}
}