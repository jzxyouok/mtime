<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>添加演员</title>
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
				<p style="font-size:16px;">添加演员<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Actor/add" method="post" class="form-horizontal"  enctype="multipart/form-data">
					<div class="form-group">
						<label for="nam" class="col-md-2">演员名称:</label>
						<div class="col-md-4">
							<input type="text" name="actor_name" class="form-control" id="nam" value="" placeholder="请输入演员名称">
						</div>
					</div>
					<div class="form-group">
						<label for="enam" class="col-md-2">演员英文名称:</label>
						<div class="col-md-4">
							<input type="text" name="actor_ename" class="form-control" id="enam" value="" placeholder="请输入演员英文名称">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">演员图片:</label>
						<div class="col-md-4">
							<input type="file" name="actor_pic" class="form-control"  value="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">身份:</label>
						<div class="col-md-8">
							<ul style="list-style:none;padding:0px;">
							<?php if(is_array($iden)): foreach($iden as $key=>$ident): ?><li style="display:inline-block;margin-right:20px;" id="">
									<input type="checkbox" name="air_name[]"  value="<?php echo ($ident['identify_id']); ?>">
									<span style="padding-left:10px;"><?php echo ($ident['identify_name']); ?></span>
								</li><?php endforeach; endif; ?>
							</ul>
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
			window.location.href="<?php echo U('actorlist');?>";
		});
	</script>

</html>