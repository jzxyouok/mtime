<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>修改角色信息</title>
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
				<p style="font-size:16px;">修改角色信息<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Movie/updateactor" method="post" class="form-horizontal" enctype="multipart/form-data">
					<input type="hidden" name="filma_mid" value="<?php echo ($row['filma_mid']); ?>">
					<input type="hidden" name="p" value="<?php echo ($p); ?>">
					<div class="form-group">
						<label for="nam" class="col-md-2">角色ID:</label>
						<div class="col-md-4">
							<input type="text" name="filma_id" class="form-control" id="nam" value="<?php echo ($row['filma_id']); ?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-md-2">角色名称:</label>
						<div class="col-md-4">
							<input type="text" name="filma_name" class="form-control" id="name" value="<?php echo ($row['filma_name']); ?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="dat" class="col-md-2">角色图片:</label>
						<div class="col-md-4">
							<input type="file" name="filma_pic" class="form-control" id="dat">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-1 col-md-offset-2">
							<button type="submit" class="btn btn-info">修改</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

		
	</body>
		
</html>