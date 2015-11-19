<?php

namespace Home\Controller;
use Think\Controller;


class CommentController extends Controller{
	
	public function longcomment(){
		$movie = M("Movie");
		$filmd = M("Filmdirector");
		$filma = M("Filmactor");
		$movie = M("Movie");
		$comgrade = M("Comgrade");
		
		$mid = I("mid");
		
		if(!empty($_SESSION['comgrade_grade'])){
			$pf = $_SESSION['comgrade_grade'];
		}else{
			if(!empty($_GET['pf'])){
				$pf = I("pf").".0";
			}else{
				$grade = $comgrade->field("comgrade_grade")->where("comgrade_mid = {$mid} and comgrade_uid = {$_SESSION['member_id']}")->find();
				$pf = $grade['comgrade_grade'].'.0';
			}
			
		}
		$mrow = $movie->field("movie_id,movie_name,movie_start,movie_pic")->where("movie_id = {$mid}")->find();
		$dnames = $filmd->field("a.actor_name")->table("m_filmdirector d,m_actor a")->where("d.filmd_mid = {$mid} and d.filmd_aid = a.actor_id")->select();
		$anames = $filma->field("a.actor_name")->table("m_filmactor d,m_actor a")->where("d.filma_mid = {$mid} and d.filma_aid = a.actor_id")->select();
		$this->assign("mrow",$mrow);
		$this->assign("dnames",$dnames);
		$this->assign("anames",$anames);
		$this->assign("pf",$pf);
		$this->display();
	}
	
	public function Vcode(){
		$config = array(
				'length' => 4,
				'fontSize' => 19,
			);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}

	public function do_code(){
		$code = I('code');
		$verify = new \Think\Verify();
		$data = $verify->check($code);
		return $data;
	}
	
	public function addcomment(){
		$id = I("comment_mid");
		$data = $this->do_code();
		
		
		if($data){
			$longcomment = M("Longcomment");
			if($longcomment->create()){
				$longcomment->comment_uid = $_SESSION['member_id'];
				$longcomment->comment_time = strtotime($longcomment->comment_time);
				$longcomment->add();
				$comgrade = M("Comgrade");
				$crow = $comgrade->where("comgrade_mid = {$id} and comgrade_uid = {$_SESSION['member_id']}")->find();
				
				if(isset($crow)){
					$comid = $crow['comgrade_id'];
					$comgrade->comgrade_grade = I("comgrade_grade");
					$comgrade->where("comgrade_id = {$comid}")->save();
				}else{
					$dat['comgrade_mid'] = $id;
					$dat['comgrade_uid'] = $_SESSION['member_id'];
					$dat['comgrade_grade'] = I("comgrade_grade");
					$comgrade->data($dat)->add();
				}
				
				$_SESSION['comment_title'] = "";
				$_SESSION['comment_text'] = "";
				$_SESSION['comgrade_grade'] = "";
				$this->success("发表成功！",U("Movie/movieindex","id={$id}"));
			}else{
				$_SESSION['comgrade_grade'] = I("comgrade_grade");
				$_SESSION['comment_title'] = I("comment_title");
				$_SESSION['comment_text'] = I("comment_text");
				$this->error("发表失败,您输入的验证码错误!",U("Comment/longcomment","mid={$id}"));
			}
		}else{
			$_SESSION['comgrade_grade'] = I("comgrade_grade");
			$_SESSION['comment_title'] = I("comment_title");
			$_SESSION['comment_text'] = I("comment_text");
			$this->error("发表失败,您输入的验证码错误!",U("Comment/longcomment","mid={$id}"));
		}
	}
	
	public function longcommentdetail(){
		$id = I("comid");
		$longcomment = M("Longcomment");
		$recomment = M("Recomment");
		$row = $longcomment->field("m.movie_name,m.movie_id,m.movie_pic,m.movie_ename,m.movie_start,d.member_nickname,d.member_pic,l.comment_title,l.comment_text,l.comment_time,l.comment_zs,l.comment_id")->table("m_longcomment l,m_memberdetail d,m_movie m")->where("l.comment_id = {$id} and l.comment_mid = m.movie_id and l.comment_uid = d.member_id")->find();
		
		$comrows = $longcomment->table("m_longcomment l,m_memberdetail d,m_comgrade g")->field("g.comgrade_grade,l.comment_title,l.comment_text,d.member_nickname,l.comment_id,g.comgrade_grade")->where("g.comgrade_uid = l.comment_uid and l.comment_uid = d.member_id and l.comment_status = 1 and l.comment_type = 1 and g.comgrade_mid = {$row['movie_id']}")->limit(5)->select();
		
		$comnum = $longcomment->where("comment_status = 1 and comment_type = 1")->count();
		
		$renum = $recomment->where("recomment_cid = {$id} and recomment_status = 1")->count();
		
		$rerows = $recomment->table("m_memberdetail d,m_recomment r")->field("d.member_nickname,d.member_id,d.member_pic,r.recomment_id,r.recomment_text,r.recomment_time")->where("r.recomment_cid = {$id} and r.recomment_uid = d.member_id and r.recomment_status = 1 and r.recomment_pid = 0")->order("r.recomment_time desc")->limit(15)->select();
		foreach($rerows as &$rerow){
			$reid = $rerow['recomment_id'];
			$replay = $recomment->table("m_recomment r,m_memberdetail d")->field("d.member_pic,d.member_nickname,r.recomment_text,r.recomment_time")->where("r.recomment_pid = {$reid} and r.recomment_status = 1 and r.recomment_uid = d.member_id")->order("r.recomment_time desc")->select();
			$rerow['replaycom'] = $replay;
		}
		foreach($rerows as &$rerow){
			$recomid = $rerow['recomment_id'];
			$replaynum = $recomment->where("recomment_pid = {$recomid}  and recomment_status = 1")->count();
			$rerow['replaynum'] = $replaynum;
		}
		
	
	
		$this->assign("row",$row);
		$this->assign("comrows",$comrows);
		$this->assign("rerows",$rerows);
		$this->assign("comnum",$comnum);
		$this->assign("renum",$renum);
		$this->display();
	}
	
	public function Plcode(){
		$config = array(
				'length' => 4,
				'fontSize' => 19,
			);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}

	public function do_plcode(){
		$code = I('plcode');
		$verify = new \Think\Verify();
		$data = $verify->check($code);
		return $data;
	}
	
	public function Dplcode(){
		$config = array(
				'length' => 4,
				'fontSize' => 19,
			);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}

	public function do_dplcode(){
		$code = I('dplcode');
		$verify = new \Think\Verify();
		$data = $verify->check($code);
		return $data;
	}
	
	public function updatedz(){
		$date['comment_zs'] = I("comment_zs");
		$id = I("comment_id");
		$longcomment = M("Longcomment");
		if($longcomment->where("comment_id = {$id}")->save($date)){
			echo 1;
		}
	}
	
	public function sortcomment(){
		
		$date['comment_text'] = I("comment_text");
		$grade['comgrade_mid'] = $date['comment_mid'] = I("comment_mid");
		$date['comment_status'] = 1;
		$date['comment_time'] = time();
		$grade['comgrade_uid'] = $date['comment_uid'] = $_SESSION['member_id'];
		$grade['comgrade_grade'] = I("comment_grade");
		$longcomment = M("Longcomment");
		$comgrade = M("comgrade");
		$cid = $longcomment->data($date)->add();
		$g = $comgrade->field("comgrade_id")->where("comgrade_mid = {$grade[comgrade_mid]} and comgrade_uid = {$grade[comgrade_uid]}")->find();
		if(!empty($g['comgrade_id'])){
			$comgrade->where("comgrade_id = {$g[comgrade_id]}")->save($grade);
			$gid = $g['comgrade_id'];
		}else{
			$gid = $comgrade->data($grade)->add();
		}
		if($cid && $gid){
			echo $cid;
		}else{
			echo 0;
		}
		
	}
	
	public function recomment(){
		$date['recomment_cid'] = I("recomment_cid");
		$date['recomment_text'] = I("recomment_text");
		$date['recomment_status'] = 1;
		$date['recomment_time'] = time();
		$date['recomment_uid'] = $_SESSION['member_id'];
		$recomment = M("Recomment");
		$cid = $recomment->data($date)->add();
		if(!empty($cid)){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	public function relongcomment(){
		$yzm = $this->do_plcode();
		if($yzm){
			$date['recomment_cid'] = I("recomment_cid");
			$date['recomment_text'] = I("recomment_text");
			$date['recomment_status'] = 1;
			$date['recomment_time'] = time();
			$date['recomment_uid'] = $_SESSION['member_id'];
			$recomment = M("Recomment");
			$cid = $recomment->data($date)->add();
			if(!empty($cid)){
				echo 1;
			}else{
				echo 0;
			}
		}else{
			echo 0;
		}	
	}
	
	
	public function relongcomment_replay(){
		$yzm = $this->do_dplcode();
		if($yzm){
			$date['recomment_pid'] = I("recomment_pid");
			$date['recomment_text'] = I("recomment_text");
			$date['recomment_status'] = 1;
			$date['recomment_time'] = time();
			$date['recomment_uid'] = $_SESSION['member_id'];
			$recomment = M("Recomment");
			$cid = $recomment->data($date)->add();
			if(!empty($cid)){
				echo 1;
			}else{
				echo 0;
			}
		}else{
			echo 0;
		}	
	}
	
	public function morelongcomment(){
		$comid = I("comid");
		
		$recomment = M("Recomment");
		$memberdetail = M("Memberdetail");
		$longcomment = M("Longcomment");
		
		$com = $longcomment->field("comment_id,comment_title")->where("comment_id = {$comid}")->find();
		
		$count = $recomment->where("recomment_cid = {$comid}")->count();
		$page = new \Think\Page($count,10);
		$show = $page->show();
		$recoms = $recomment->field("recomment_id,recomment_uid,recomment_cid,recomment_text,recomment_time")->where("recomment_cid = {$comid} and recomment_status = 1")->order()->limit($page->firstRow,$page->listRows)->select();
		foreach($recoms as &$recom){
			$uid = $recom['recomment_uid'];
			$mem = $memberdetail->field("member_nickname,member_pic")->where("member_id = {$uid}")->find();
			$recom['member'] = $mem;
		}
		foreach($recoms as &$recom){
			$id = $recom['recomment_id'];
			$replaynum = $recomment->where("recomment_pid = {$id}")->count();
			$replaycom = $recomment->table("m_recomment r,m_memberdetail d")->field("r.recomment_id,r.recomment_uid,r.recomment_cid,r.recomment_text,r.recomment_time,d.member_nickname,d.member_pic")->where("r.recomment_status = 1 and r.recomment_pid = {$id} and r.recomment_uid = d.member_id ")->select();
			
			$recom['replaynum'] = $replaynum;
			$recom['replaycom'] = $replaycom;
		}
		
		$this->assign("show",$show);
		$this->assign("recoms",$recoms);
		$this->assign("com",$com);
		
		
		$this->display();
	}
	
	
	public function morerelongcomment_replay(){
		$date['recomment_pid'] = I("recomment_pid");
		$date['recomment_text'] = I("recomment_text");
		$date['recomment_status'] = 1;
		$date['recomment_time'] = time();
		$date['recomment_uid'] = $_SESSION['member_id'];
		$recomment = M("Recomment");
		$cid = $recomment->data($date)->add();
		if(!empty($cid)){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	
	
}