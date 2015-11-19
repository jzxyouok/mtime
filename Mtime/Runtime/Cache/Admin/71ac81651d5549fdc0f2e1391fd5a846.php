<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>添加电影图片</title>
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
				<p style="font-size:16px;">添加电影图片<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Movie/tjpic" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-md-2">电影名称:</label>
						<div class="col-md-4">
							<select name="pic_mid" class="form-control">
								<option>---请选择---</option>
								<?php if(is_array($r)): foreach($r as $key=>$row): ?><option value="<?php echo ($row['movie_id']); ?>"><?php echo ($row['movie_name']); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2">上传剧照:</label>
						<div class="col-md-4">
							<input type="file" name="pic_address" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2">图片尺寸:</label>
						<div class="col-md-1">
							<input type="radio" name="pic_big" value="0" checked id="s"><label for="s">小图<label>
						</div>
						<div class="col-md-1">
							<input type="radio" name="pic_big" value="1" id="b"><label for="b">大图</label>
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