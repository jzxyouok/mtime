<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$movie = M("Movie");
		$type = M("Type");
		$mtgx = M("Mtrelation");
		$slide = M("Slide");
		$director = M("Filmdirector");
		$cinema = M("Cinema");
		$cinemacz = M("Cinemacz");
		$cmrelation = M("Cmrelation");
		
		$nowtime = strtotime(date("Y-m-d",time()));
		
		//首页幻灯片
		$sl = $slide->where("slide_time < unix_timestamp(now())")->select();
		
		//统计正在放映的电影数
		$num = $movie->where("movie_start < unix_timestamp(now()) and movie_status = 1")->count();
	
		//首页推荐电影查询
    	$data = $movie->table("m_movie movie")->where("movie.movie_big=1 and movie_start < unix_timestamp(now()) and movie_status = 1")->find();
		$bid = $data['movie_id'];	
		$arr = $type->field("t.type_name")->table("m_mtrelation g,m_type t")->where("g.mid = {$bid} and g.tid = t.type_id")->select();
		$data['type'] = $arr;
		$money = $cinemacz->where("cz_mid = {$bid} and cz_time = {$nowtime}")->min("cz_money");
		$data['money'] = $money; 
	
		//首页全部电影
		$rows = $movie->table("m_movie movie")->where("movie.movie_big = 0 and movie_start < unix_timestamp(now()) and movie_status = 1")->order("movie.movie_id asc")->select();
		foreach($rows as &$row){
			$id = $row['movie_id'];
			$t = $type->table("m_mtrelation g,m_type t")->where("g.mid = {$id} and g.tid = t.type_id")->select();
			$row['type'] = $t;
		}
		foreach($rows as &$row){
			$czid = $row['movie_id'];
			$cz = $cinemacz->where("cz_mid = {$czid} and cz_time = {$nowtime}")->group("cz_mid")->count();
			$row['cz'] = $cz;
		}
		foreach($rows as &$row){
			$yyid = $row['movie_id'];
			$y = $cmrelation->where("cm_mid = {$yyid} and cm_time = {$nowtime}")->group("cm_mid")->count();
			$row['yy'] = $y;
		}
		
		/*//首页全部电影更多查询
		$array = $movie->table("m_movie movie")->where("movie.movie_big = 0 and movie_start < unix_timestamp(now()) and movie_status = 1")->order("movie.movie_id asc")->limit(6,100)->select();
		foreach($array as &$arra){
			$ida = $arra['movie_id'];
			$ty = $type->table("m_mtrelation g,m_type t")->where("g.mid = {$ida} and g.tid = t.type_id")->select();
			$arra['type'] = $ty;
		}
		foreach($array as &$arra){
			$cz2id = $arra['movie_id'];
			$cz2 = $cinemacz->where("cz_mid = {$cz2id} and cz_time = {$nowtime}")->group("cz_mid")->count();
			$arra['cz'] = $cz2;
		}
		foreach($array as &$arra){
			$yy2id = $arra['movie_id'];
			$y2 = $cmrelation->where("cm_mid = {$yy2id} and cm_time = {$nowtime}")->group("cm_mid")->count();
			$arra['yy'] = $y2;
		}
		*/
		//首页3D电影查询
		$arr3d = $movie->table("m_movie movie")->where("movie.movie_3d = 1 and movie_start < unix_timestamp(now()) and movie_status = 1")->order("movie.movie_id asc")->select();
		foreach($arr3d as &$ar3d){
			$id3d = $ar3d['movie_id'];
			$t3d = $type->table("m_mtrelation g,m_type t")->where("g.mid = {$id3d} and g.tid = t.type_id")->select();
			$ar3d['type'] = $t3d;
		}
		foreach($arr3d as &$ar3d){
			$cz3id = $ar3d['movie_id'];
			$cz3 = $cinemacz->where("cz_mid = {$cz3id} and cz_time = {$nowtime}")->group("cz_mid")->count();
			$ar3d['cz'] = $cz3;
		}
		foreach($arr3d as &$ar3d){
			$yy3id = $ar3d['movie_id'];
			$y3 = $cmrelation->where("cm_mid = {$yy3id} and cm_time = {$nowtime}")->group("cm_mid")->count();
			$ar3d['yy'] = $y3;
		}
		
		//首页Imax电影查询
		$arrm = $movie->table("m_movie movie")->where("movie.movie_imax = 1 and movie_start < unix_timestamp(now()) and movie_status = 1")->order("movie.movie_id asc")->select();
		foreach($arrm as &$arm){
			$idm = $arm['movie_id'];
			$tm = $type->table("m_mtrelation g,m_type t")->where("g.mid = {$idm} and g.tid = t.type_id")->select();
			$arm['type'] = $tm;
		}
		foreach($arrm as &$arm){
			$cz4id = $arm['movie_id'];
			$cz4 = $cinemacz->where("cz_mid = {$cz4id} and cz_time = {$nowtime}")->group("cz_mid")->count();
			$arm['cz'] = $cz4;
		}
		foreach($arrm as &$arm){
			$yy4id = $arm['movie_id'];
			$y4 = $cmrelation->where("cm_mid = {$yy4id} and cm_time = {$nowtime}")->group("cm_mid")->count();
			$arm['yy'] = $y4;
		}
		
		//首页动作电影查询
		$arrdz = $mtgx->where("tid = 1")->order("mid asc")->select();
		foreach($arrdz as &$ardz){
			$iddz = $ardz['mid'];
			$tdz = $movie->where("movie_id = {$iddz} and movie_start < unix_timestamp(now()) and movie_status = 1")->select();
			$ardz['film'] = $tdz;
			
			foreach($ardz['film'] as &$dz){
				$dzid = $dz['movie_id'];
				$typedz = $type->table("m_mtrelation g,m_type t")->where("g.mid = {$dzid} and g.tid = t.type_id")->select();
				$dz['type'] = $typedz;
			}
			
			foreach($ardz['film'] as &$dz){
				$cz5id = $dz['movie_id'];
				$cz5 = $cinemacz->where("cz_mid = {$cz5id} and cz_time = {$nowtime}")->group("cz_mid")->count();
				$dz['cz'] = $cz5;
			}
			foreach($ardz['film'] as &$dz){
				$yy5id = $dz['movie_id'];
				$y5 = $cmrelation->where("cm_mid = {$yy5id} and cm_time = {$nowtime}")->group("cm_mid")->count();
				$dz['yy'] = $y5;
			}
		}
		
		
		//首页喜剧电影查询
		$arrxj = $mtgx->where("tid = 3")->order("mid asc")->select();
		foreach($arrxj as &$arxj){
			$idxj = $arxj['mid'];
			$txj = $movie->where("movie_id = {$idxj} and movie_start < unix_timestamp(now()) and movie_status = 1")->select();
			$arxj['film'] = $txj;
			
			foreach($arxj['film'] as &$xj){
				$xjid = $xj['movie_id'];
				$typexj = $type->table("m_mtrelation g,m_type t")->where("g.mid = {$xjid} and g.tid = t.type_id")->select();
				$xj['type'] = $typexj;
			}
			
			foreach($arxj['film'] as &$xj){
				$cz6id = $xj['movie_id'];
				$cz6 = $cinemacz->where("cz_mid = {$cz6id} and cz_time = {$nowtime}")->group("cz_mid")->count();
				$xj['cz'] = $cz6;
			}
			foreach($arxj['film'] as &$xj){
				$yy6id = $xj['movie_id'];
				$y6 = $cmrelation->where("cm_mid = {$yy6id} and cm_time = {$nowtime}")->group("cm_mid")->count();
				$xj['yy'] = $y6;
			}
		}
		
		
		//首页动画电影查询
		$arrdh = $mtgx->where("tid = 10")->order("mid asc")->select();
		foreach($arrdh as &$ardh){
			$iddh = $ardh['mid'];
			$tdh = $movie->where("movie_id = {$iddh} and movie_start < unix_timestamp(now()) and movie_status = 1")->select();
			$ardh['film'] = $tdh;
			
			foreach($ardh['film'] as &$dh){
				$dhid = $dh['movie_id'];
				$typedh = $type->table("m_mtrelation g,m_type t")->where("g.mid = {$dhid} and g.tid = t.type_id")->select();
				$dh['type'] = $typedh;
			}
			
			foreach($ardh['film'] as &$dh){
				$cz7id = $dh['movie_id'];
				$cz7 = $cinemacz->where("cz_mid = {$cz7id} and cz_time = {$nowtime}")->group("cz_mid")->count();
				$dh['cz'] = $cz7;
			}
			foreach($ardh['film'] as &$dh){
				$yy7id = $dh['movie_id'];
				$y7 = $cmrelation->where("cm_mid = {$yy7id} and cm_time = {$nowtime}")->group("cm_mid")->count();
				$dh['yy'] = $y7;
			}
		}
		
		
		//首页冒险电影查询 
		$arrmx = $mtgx->where("tid = 2")->order("mid asc")->select();
		foreach($arrmx as &$armx){
			$idmx = $armx['mid'];
			$tmx = $movie->where("movie_id = {$idmx} and movie_start < unix_timestamp(now()) and movie_status = 1")->select();
			$armx['film'] = $tmx;
			
			foreach($armx['film'] as &$mx){
				$mxid = $mx['movie_id'];
				$typemx = $type->table("m_mtrelation g,m_type t")->where("g.mid = {$mxid} and g.tid = t.type_id")->select();
				$mx['type'] = $typemx;
			}
			
			foreach($armx['film'] as &$mx){
				$cz8id = $mx['movie_id'];
				$cz8 = $cinemacz->where("cz_mid = {$cz8id} and cz_time = {$nowtime}")->group("cz_mid")->count();
				$mx['cz'] = $cz8;
			}
			foreach($armx['film'] as &$mx){
				$yy8id = $mx['movie_id'];
				$y8 = $cmrelation->where("cm_mid = {$yy8id} and cm_time = {$nowtime}")->group("cm_mid")->count();
				$mx['yy'] = $y8;
			}
		}
		
		//首页滚动
		$scrolls = $movie->table("m_movie movie")->where("movie.movie_big = 0 and movie_start > unix_timestamp(now())")->order("movie.movie_start asc")->select();
		foreach($scrolls as &$scroll){
			$id = $scroll['movie_id'];
			$typ = $type->table("m_mtrelation g,m_type t")->where("g.mid = {$id} and g.tid = t.type_id")->select();
			$dname = $director->field("a.actor_name")->table("m_filmdirector f,m_actor a")->where("f.filmd_mid = {$id} and f.filmd_aid = a.actor_id")->select();
			$scroll['type'] = $typ;
			$scroll['dir_name'] = $dname;
		}
		
		//影院查询
		$crows  = $cinema->select();
		$cnum = $cinema->count();
		
		
		//获取当前日期加一天
		$time = strtotime("+1 day");	
		
		/*
		echo "<pre>";
		print_r($arrdh);
		echo "</pre>";
		*/
	
		
		$this->assign("t",$time);
		
    	$this->assign("sl",$sl);
		
    	$this->assign("num",$num);
		
    	$this->assign("data",$data);
		
		$this->assign("rows",$rows);
		
		/*$this->assign("array",$array);*/
		
		$this->assign("arrd",$arr3d);
		
		$this->assign("arrm",$arrm);
		
		$this->assign("arrdz",$arrdz);
		
		$this->assign("arrxj",$arrxj);
		
		$this->assign("arrdh",$arrdh);
		
		$this->assign("arrmx",$arrmx);
		
		$this->assign("scrolls",$scrolls);
		
		$this->assign("crows",$crows);
		
		$this->assign("cnum",$cnum);
		

		$this->display();
   
    }
}