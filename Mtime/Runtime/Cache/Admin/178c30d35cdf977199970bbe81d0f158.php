<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>添加幻灯片</title>
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
				<p style="font-size:16px;">添加首页幻灯片<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Slide/add" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nam" class="col-md-2">幻灯片名称:</label>
						<div class="col-md-4">
							<input type="text" name="slide_name" class="form-control" id="nam" value="" placeholder="请输入幻灯片名称">
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-md-2">图片地址:</label>
						<div class="col-md-4">
							<input type="file" name="pic[]" class="form-control" id="address" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="bg" class="col-md-2">图片背景:</label>
						<div class="col-md-4">
							<input type="file" name="pic[]" class="form-control" id="bg" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="mid" class="col-md-2">电影名称:</label>
						<div class="col-md-4">
							<select name="slide_mid" class="form-control">
								<option>---------请选择所属电影----------</option>
								<?php if(is_array($arrs)): foreach($arrs as $key=>$arr): ?><option value="<?php echo ($arr['movie_id']); ?>"><?php echo ($arr['movie_name']); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="dat" class="col-md-2">出现时间:</label>
						<div class="col-md-4">
							<input type="date" name="slide_time" class="form-control" id="dat" value="">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-1 col-md-offset-2">
							<button type="submit" class="btn btn-info">添加</button>
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
			window.location.href="<?php echo U('slidelist');?>";
		});
	</script>

</html>