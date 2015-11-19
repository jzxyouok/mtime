<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>电影图片列表</title>
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
				<p style="font-size:16px;">电影图片列表</p>
			</div>
			<div class="panel-body">
				<p><span style="color:#31708F;">查看已添加的电影图片</span></p>
				<form action="/mtime/index.php/Admin/Movie/piclist" method="get" class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2">电影名称:</label>
						<div class="col-md-4">
							<select name="movie_id" class="form-control">
								<option>---请选择---</option>
								<?php if(is_array($r)): foreach($r as $key=>$m): ?><option value="<?php echo ($m['movie_id']); ?>"><?php echo ($m['movie_name']); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-1 col-md-offset-2">
							<button type="submit" class="btn btn-info">查看</button>
						</div>
					</div>
				</form>
			</div>
			<table class="table table-hover table-striped table-bordered">
				<tr class="success">
					<th>图片ID</th>
					<th>图片</th>
					<th>图片尺寸</th>
					<th>删除</th>
				</tr>
				<?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
						<td><?php echo ($row['pic_id']); ?></td>
						<td>
							<img src="/mtime/Public/<?php echo ($row['pic_address']); ?>">
						</td>
						<td>
							<?php if($row['pic_big'] == 1): ?>大图
							<?php else: ?>
								小图<?php endif; ?>
						</td>
						<td>
							<a href="/mtime/index.php/Admin/Movie/delpic/id/<?php echo ($row['pic_id']); ?>/page/<?php echo ($p); ?>/mid/<?php echo ($row['pic_mid']); ?>" onclick="javascript:return confirm('你确定删除？');">删除</a>
						</td>
					</tr><?php endforeach; endif; ?>
			</table>
			<div class="panel-footer text-right" style="padding-right:70px;"><?php echo ($show); ?></div>
		</div>			
	</div>

		
	</body>
		
</html>