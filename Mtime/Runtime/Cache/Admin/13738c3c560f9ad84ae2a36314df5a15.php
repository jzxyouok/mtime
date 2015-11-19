<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>添加电影视频</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Bootstrap/css/bootstrap.min.css">
		<script src="/mtime/Public/Bootstrap/js/jquery-1.11.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/bootstrap.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/holder.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/application.js"></script>
		
	<style>
		textarea{
			resize:none;
		}
	</style>

	</head>
	<body>
		
	<div class="container">
		<div class="panel panel-success">
			<div class="panel-heading">
				<p style="font-size:16px;">添加电影视频<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Movie/tjvideo" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-md-2">电影名称:</label>
						<div class="col-md-4">
							<select name="video_mid" class="form-control">
								<option>---请选择---</option>
								<?php if(is_array($r)): foreach($r as $key=>$row): ?><option value="<?php echo ($row['movie_id']); ?>"><?php echo ($row['movie_name']); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">视频名称:</label>
						<div class="col-md-4">
							<input type="text" name="video_name" class="form-control" placeholder="请输入视频名称">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2">视频时间:</label>
						<div class="col-md-4">
							<input type="text" name="video_time" class="form-control" placeholder="请输入视频时间">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2">视频图片:</label>
						<div class="col-md-4">
							<input type="file" name="video_pic" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2">上传视频:</label>
						<div class="col-md-4">
							<input type="file" name="video_address" class="form-control" placeholder="请输入视频地址">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-1 col-md-offset-2">
							<button type="submit" class="btn btn-info">添加</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

		
	</body>
		
</html>