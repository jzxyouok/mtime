<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>添加影院热映电影</title>
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
				<p style="font-size:16px;">添加影院热映电影<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Cinema/tjfilm" method="post" class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2">影院名称:</label>
						<div class="col-md-4">
							<select name="cm_cid" class="form-control">
								<option>---请选择---</option>
								<?php if(is_array($r)): foreach($r as $key=>$row): ?><option value="<?php echo ($row['cinema_id']); ?>"><?php echo ($row['cinema_name']); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影名称:</label>
						<div class="col-md-4">
							<select name="cm_mid" class="form-control">
								<option>---请选择---</option>
								<?php if(is_array($mr)): foreach($mr as $key=>$mrow): ?><option value="<?php echo ($mrow['movie_id']); ?>"><?php echo ($mrow['movie_name']); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">日期:</label>
						<div class="col-md-4">
							<input type="date" name="cm_time" value="" class="form-control">
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