<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>添加分类</title>
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
				<p style="font-size:16px;">添加电影分类<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Type/add" method="post" class="form-horizontal">
					<div class="form-group">
						<label for="nam" class="col-md-2">分类名称:</label>
						<div class="col-md-4">
							<input type="text" name="type_name" class="form-control" id="nam" value="" placeholder="请输入分类名称">
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
			window.location.href="<?php echo U('typelist');?>";
		});
	</script>

</html>