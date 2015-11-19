<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>添加媒体评论</title>
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
				<p style="font-size:16px;">添加媒体评论<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Comment/addmedia" method="post" class="form-horizontal">
					<div class="form-group">
						<label for="nam" class="col-md-2">媒体名称:</label>
						<div class="col-md-4">
							<input type="text" name="media_name" class="form-control" id="nam" value="" placeholder="请输入媒体名称">
						</div>
					</div>
					<div class="form-group">
						<label for="mid" class="col-md-2">电影名称:</label>
						<div class="col-md-4">
							<select name="media_mid" class="form-control">
								<option>---------请选择电影----------</option>
								<?php if(is_array($arrs)): foreach($arrs as $key=>$arr): ?><option value="<?php echo ($arr['movie_id']); ?>"><?php echo ($arr['movie_name']); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="dat" class="col-md-2">评论内容:</label>
						<div class="col-md-4">
							<textarea class="form-control" name="media_content" rows="6" placeholder="请输入评论内容"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="dat" class="col-md-2">评论时间:</label>
						<div class="col-md-4">
							<input type="date" name="media_time" class="form-control" id="dat" value="">
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