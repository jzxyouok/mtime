<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>添加影院热映场次</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Bootstrap/css/bootstrap.min.css">
		<script src="/mtime/Public/Bootstrap/js/jquery-1.11.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/bootstrap.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/holder.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/application.js"></script>
		
	</head>
	<body>
		
	<div class="container">
		<div class="panel panel-info">
			<div class="panel-heading">
				<p style="font-size:16px;">添加影院热映场次</p>
			</div>
			<div class="panel-body">
				<p><span style="color:#31708F;">查看影院热映电影</span></p>
				<form action="/mtime/index.php/Admin/Cinema/addcz" method="get" class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2">影院名称:</label>
						<div class="col-md-4">
							<select name="cm_cid" class="form-control">
								<option value="0">---请选择---</option>
								<?php if(is_array($r)): foreach($r as $key=>$m): ?><option value="<?php echo ($m['cinema_id']); ?>"><?php echo ($m['cinema_name']); ?></option><?php endforeach; endif; ?>
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
							<input type="submit" class="btn btn-info" name="sub" value="选择">
						</div>
					</div>
				</form>
			</div>
			<table class="table table-hover table-striped table-bordered">
				<tr class="success">
					<th>影院ID</th>
					<th>影片ID</th>
					<th>影片名称</th>
					<th>日期</th>
					<th>添加场次</th>
					<th>删除</th>
				</tr>
				<?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
						<td><?php echo ($row['cm_cid']); ?></td>
						<td><?php echo ($row['movie_id']); ?></td>
						<td><?php echo ($row['movie_name']); ?></td>
						<td><?php echo (date("Y-m-d",$row['cm_time'])); ?></td>
						<td><a href="/mtime/index.php/Admin/Cinema/tjcz/cid/<?php echo ($row['cm_cid']); ?>/mid/<?php echo ($row['movie_id']); ?>/time/<?php echo ($row['cm_time']); ?>">添加场次</a></td>
						<td>
							<a href="/mtime/index.php/Admin/Cinema/delcinemafilm/cid/<?php echo ($row['cm_cid']); ?>/mid/<?php echo ($row['movie_id']); ?>/time/<?php echo ($row['cm_time']); ?>" onclick="javascript:return confirm('你确定删除？');">删除</a>
						</td>
					</tr><?php endforeach; endif; ?>
			</table>
		</div>			
	</div>

		
	</body>
		
</html>