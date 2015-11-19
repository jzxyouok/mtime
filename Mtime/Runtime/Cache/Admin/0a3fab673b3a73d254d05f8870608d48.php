<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>修改电影</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Bootstrap/css/bootstrap.min.css">
		<script src="/mtime/Public/Bootstrap/js/jquery-1.11.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/bootstrap.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/holder.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/application.js"></script>
		
	</head>
	<body>
		
	<div class="container">
		<div class="panel panel-success">
			<div class="panel-heading">
				<p style="font-size:16px;">修改电影<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Movie/update" method="post" class="form-horizontal">
					<div class="form-group">
						<label for="cid" class="col-md-2">电影ID:</label>
						<div class="col-md-4">
							<input type="text" name="movie_id" class="form-control" id="cid" value="<?php echo ($row['movie_id']); ?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="chn" class="col-md-2">电影名称:</label>
						<div class="col-md-4">
							<input type="text" name="movie_name" class="form-control" id="chn" value="<?php echo ($row['movie_name']); ?>" placeholder="请输入电影名称">
						</div>
					</div>
					<div class="form-group">
						<label for="enn" class="col-md-2">英文名称:</label>
						<div class="col-md-4">
							<input type="text" name="movie_ename" class="form-control" id="enn" value="<?php echo ($row['movie_ename']); ?>" placeholder="请输入电影英文名称">
						</div>
					</div>
					<div class="form-group">
						<label for="mt" class="col-md-2">电影时长:</label>
						<div class="col-md-4">
							<input type="text" name="movie_time" class="form-control" id="mt" value="<?php echo ($row['movie_time']); ?>" placeholder="请输入电影时长">
						</div>
					</div>
					<div class="form-group">
						<label for="mc" class="col-md-2">发行公司:</label>
						<div class="col-md-4">
							<input type="text" name="movie_company" class="form-control" id="mc" value="<?php echo ($row['movie_company']); ?>" placeholder="请输入电影发行公司">
						</div>
					</div>
					<div class="form-group">
						<label for="mcon" class="col-md-2">发行国家:</label>
						<div class="col-md-4">
							<input type="text" name="movie_country" class="form-control" id="mcon" value="<?php echo ($row['movie_country']); ?>" placeholder="请输入电影发行国家">
						</div>
					</div>
					<div class="form-group">
						<label for="mtime" class="col-md-2">上映时间:</label>
						<div class="col-md-4">
							<input type="date" name="movie_start" class="form-control" id="mtime" value="<?php echo (date('Y-m-d',$row['movie_start'])); ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="mr" class="col-md-2">电影简述:</label>
						<div class="col-md-4">
							<input type="text" name="movie_resume" class="form-control" id="mr" value="<?php echo ($row['movie_resume']); ?>" placeholder="请输入电影的简述">
						</div>
					</div>
					<div class="form-group">
						<label for="mg" class="col-md-2">电影评分:</label>
						<div class="col-md-4">
							<input type="text" name="movie_graded" class="form-control" id="mg" value="<?php echo ($row['movie_graded']); ?>" placeholder="用户对电影的评分">
						</div>
					</div>
					<div class="form-group">
						<label for="mo" class="col-md-2">电影票房:</label>
						<div class="col-md-4">
							<input type="text" name="movie_office" class="form-control" id="mo" value="<?php echo ($row['movie_office']); ?>" placeholder="电影票房">
						</div>
					</div>
					<div class="form-group">
						<label for="mother" class="col-md-2">电影其他片名:</label>
						<div class="col-md-4">
							<input type="text" name="movie_othername" class="form-control" id="mother" value="<?php echo ($row['movie_othername']); ?>" placeholder="该电影其他片名">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影票音乐评分:</label>
						<div class="col-md-4">
							<input type="text" name="movie_music" class="form-control" value="<?php echo ($row['movie_music']); ?>" placeholder="对该电影的音乐评分（百分制）">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影片画面评分:</label>
						<div class="col-md-4">
							<input type="text" name="movie_hm" class="form-control" value="<?php echo ($row['movie_hm']); ?>" placeholder="对该电影的画面评分（百分制）">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影片导演评分:</label>
						<div class="col-md-4">
							<input type="text" name="movie_dy" class="form-control"  value="<?php echo ($row['movie_dy']); ?>" placeholder="对该电影的导演评分（百分制）">
						</div>
					</div>
					<div class="form-group">
						<label  class="col-md-2">影票故事情节评分:</label>
						<div class="col-md-4">
							<input type="text" name="movie_gsqj" class="form-control"  value="<?php echo ($row['movie_gsqj']); ?>" placeholder="对该电影的故事情节评分（百分制）">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否热映:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_hot" value="1" <?php echo ($row['movie_hot']==1 ? "checked" : ""); ?>><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_hot" value="0" <?php echo ($row['movie_hot']==0 ? "checked" : ""); ?>><span style="padding-left:10px;" >否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否有IMAX:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_imax" value="1" <?php echo ($row['movie_imax']==1 ? "checked" : ""); ?>><span style="padding-left:10px;" >是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_imax" value="0" <?php echo ($row['movie_imax']==0 ? "checked" : ""); ?>><span style="padding-left:10px;" >否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否有3D:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_3d" value="1"  <?php echo ($row['movie_3d']==1 ? "checked" : ""); ?>><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_3d" value="0" <?php echo ($row['movie_3d']==0 ? "checked" : ""); ?>><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否有IMAX3D:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_imax3d" value="1" <?php echo ($row['movie_imax3d']==1 ? "checked" : ""); ?>><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_imax3d" value="0" <?php echo ($row['movie_imax3d']==0 ? "checked" : ""); ?>><span style="padding-left:10px;" >否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否巨屏:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_screen" value="1" <?php echo ($row['movie_screen']==1 ? "checked" : ""); ?>><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_screen" value="0" <?php echo ($row['movie_screen']==0 ? "checked" : ""); ?>><span style="padding-left:10px;" >否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否超前预售:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_presell" value="1" <?php echo ($row['movie_presell']==1 ? "checked" : ""); ?>><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_presell" value="0" <?php echo ($row['movie_presell']==0 ? "checked" : ""); ?>><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否主页推荐:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_big" value="1" <?php echo ($row['movie_big']==1 ? "checked" : ""); ?>><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_big" value="0" <?php echo ($row['movie_big']==0 ? "checked" : ""); ?>><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影状态:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_status" value="1" <?php echo ($row['movie_status']==1 ? "checked" : ""); ?>><span style="padding-left:10px;">正常</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_status" value="0" <?php echo ($row['movie_status']==0 ? "checked" : ""); ?>><span style="padding-left:10px;">下线</span>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-1 col-md-offset-2">
							<button type="submit" class="btn btn-info">修改</button>
						</div>
						<div class="col-md-1 col-md-offset-1">
							<button type="button" class="btn btn-danger" id="fh">返回</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

		
	</body>
		
	<script>
		$("#fh").click(function(){
			window.location.href="<?php echo U('movielist');?>";
		});
	</script>

</html>