<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>修改电影竞猜</title>
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
				<p style="font-size:16px;">修改电影竞猜<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Movie/updateguess" method="post" class="form-horizontal" enctype="multipart/form-data">
					<input type="hidden" name="guess_mid" value="<?php echo ($row['guess_mid']); ?>">
					<input type="hidden" name="p" value="<?php echo ($p); ?>">
					<div class="form-group">
						<label for="nam" class="col-md-2">ID:</label>
						<div class="col-md-4">
							<input type="text" name="guess_id" class="form-control" id="nam" value="<?php echo ($row['guess_id']); ?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-md-2">竞猜题目:</label>
						<div class="col-md-4">
							<input type="text" name="guess_title" class="form-control" id="name" value="<?php echo ($row['guess_title']); ?>">
						</div>
					</div>
					
					<div class="form-group">
						<label for="dat" class="col-md-2">竞猜图片:</label>
						<div class="col-md-4">
							<input type="file" name="guess_pic" class="form-control" id="dat">
						</div>
					</div>
					
					<div class="form-group">
						<label  class="col-md-2">竞猜选项1:</label>
						<div class="col-md-4">
							<input type="text" name="guess_sel1" class="form-control" value="<?php echo ($row['guess_sel1']); ?>">
						</div>
					</div>
					
					<div class="form-group">
						<label  class="col-md-2">竞猜选项2:</label>
						<div class="col-md-4">
							<input type="text" name="guess_sel2" class="form-control" value="<?php echo ($row['guess_sel2']); ?>">
						</div>
					</div>
					
					<div class="form-group">
						<label  class="col-md-2">竞猜选项3:</label>
						<div class="col-md-4">
							<input type="text" name="guess_sel3" class="form-control" value="<?php echo ($row['guess_sel3']); ?>">
						</div>
					</div>
					
					<div class="form-group">
						<label  class="col-md-2">竞猜选项4:</label>
						<div class="col-md-4">
							<input type="text" name="guess_sel4" class="form-control" value="<?php echo ($row['guess_sel4']); ?>">
						</div>
					</div>
					
					<div class="form-group">
						<label  class="col-md-2">竞猜答案:</label>
						<div class="col-md-4">
							<input type="text" name="guess_result" class="form-control" value="<?php echo ($row['guess_result']); ?>">
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