<?php

namespace Home\Controller;
use Think\Controller;

class CinemaController extends Controller{
	
	public function cinemadetail(){
		$id = I("cid");
		$cinema = M("Cinema");
		$cinemapic = M("Cinemapic");
		$movie = M("Movie");
		$type = M("Type");
		$video = M("Video");
		
		
		$mrows = $movie->field("movie_id,movie_name,movie_ename,movie_start,movie_pic")->where("movie_start > unix_timestamp(now())")->order("movie_start asc")->limit(5)->select();
		foreach($mrows as &$mrow){
			$mid = $mrow['movie_id'];
			$t = $type->field("type_name")->table("m_mtrelation g,m_type t")->where("g.mid = {$mid} and g.tid = t.type_id")->select();
			$mrow['type'] = $t;
		}
		foreach($mrows as &$mrow){
			$mid = $mrow['movie_id'];
			$v = $video->field("video_address")->where("video_mid = {$mid}")->limit(1)->select();
			$mrow['video'] = $v;
		}
		$cpic = $cinemapic->where("cinema_cid = {$id}")->select();
		$cpicnum = $cinemapic->where("cinema_cid = {$id}")->count();
		$crow = $cinema->where("cinema_id = {$id}")->find();
		
		$this->assign("crow",$crow);
		$this->assign("cpic",$cpic);
		$this->assign("cpicnum",$cpicnum);
		$this->assign("mrows",$mrows);
		
	}
	
	public function cinemamember(){	
		$id = I("cid");
		$this->cinemadetail();
		$cienamdetail = M("Cinemadetail");
		$detail = $cienamdetail->field("cinema_member")->where("cinema_cid = {$id}")->find();
		$this->assign("detail",$detail);	
		$this->display();
	}
	
	public function cinemaabstract(){	
		$id = I("cid");
		$this->cinemadetail();
		$cienamdetail = M("Cinemadetail");
		$detail = $cienamdetail->field("cinema_abstract")->where("cinema_cid = {$id}")->find();
		$this->assign("detail",$detail);	
		$this->display();
	}
	
	public function index(){
		$id = I("cid");
		$this->cinemadetail();
		$cmrelation = M("Cmrelation");
		$cinemacz = M("Cinemacz");
		$movie = M("Movie");
		$type = M("Type");
		$filmd = M("Filmdirector");
		$filma = M("Filmactor");
		$video = M("Video");
		$time = I("time");
		if(isset($time) && !empty($time)){
			$time = strtotime(I("time"));
		}else{
			$time = strtotime(date("Y-m-d",time()));
		}
		$cmnum = $cmrelation->where("cm_cid = {$id} and cm_time ={$time}")->count();
		$cmrows = $cmrelation->field("c.cm_time,m.movie_name,m.movie_ename,m.movie_pic,m.movie_start")->table("m_movie m,m_cmrelation c")->where("c.cm_cid = {$id} and c.cm_time = {$time} and c.cm_mid = m.movie_id")->select();
		
		$cznum = $cinemacz->where("cz_cid = {$id} and cz_time ={$time}")->count();
		$czrows = $cmrelation->field("m.movie_id,m.movie_name,m.movie_ename,m.movie_time,m.movie_graded")->table("m_movie m,m_cmrelation c")->where("c.cm_cid = {$id} and c.cm_time = {$time} and c.cm_mid = m.movie_id")->select();
		foreach($czrows as &$czrow){
			$moveid = $czrow['movie_id'];
			$t = $type->table("m_mtrelation g,m_type t")->where("g.mid = {$moveid} and g.tid = t.type_id")->select();
			$czrow['type'] = $t;
		}
		foreach($czrows as &$czrow){
			$mid = $czrow['movie_id'];
			$d = $filmd->field("a.actor_name")->table("m_filmdirector d,m_actor a")->where("d.filmd_mid = {$mid} and d.filmd_aid = a.actor_id")->select();
			$czrow['director'] = $d;
		}
		foreach($czrows as &$czrow){
			$moid = $czrow['movie_id'];
			$a = $filmd->field("a.actor_name")->table("m_filmactor d,m_actor a")->where("d.filma_mid = {$moid} and d.filma_aid = a.actor_id")->select();
			$czrow['actor'] = $a;
		}
		foreach($czrows as &$czrow){
			$movid = $czrow['movie_id'];
			$c = $cinemacz->where("cz_mid = {$movid} and cz_cid = {$id} and cz_time = {$time}")->order("cz_start asc")->select();
			$czrow['cz'] = $c;
		}
		foreach($czrows as &$czrow){
			$movieid = $czrow['movie_id'];
			$v = $video->field("video_address")->where("video_mid = {$movieid}")->find();
			$czrow['video'] = $v;
		}
	
		$this->assign("cmnum",$cmnum);
		$this->assign("cmrows",$cmrows);
		$this->assign("cznum",$cznum);
		$this->assign("czrows",$czrows);
		$this->assign("time",$time);
		$this->display();
	}
}