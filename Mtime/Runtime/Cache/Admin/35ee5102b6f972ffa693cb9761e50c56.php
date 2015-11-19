<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>媒体评论列表</title>
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
				<p style="font-size:16px;">媒体评论列表</p>
			</div>
			<div class="panel-body">
				<p><span style="color:#31708F;">查看电影的媒体评论</span></p>
				<form action="/mtime/index.php/Admin/Comment/mediacommentlist" method="get" class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2">电影名称:</label>
						<div class="col-md-4">
							<select name="media_mid" class="form-control">
								<option>---请选择---</option>
								<?php if(is_array($arrs)): foreach($arrs as $key=>$arr): ?><option value="<?php echo ($arr['movie_id']); ?>"><?php echo ($arr['movie_name']); ?></option><?php endforeach; endif; ?>
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
					<th width="10%">评论ID</th>
					<th width="10%">评论媒体</th>
					<th width="40%">评论内容</th>
					<th width="20%">评论时间</th>
					<th width="10%">修改</th>
					<th width="10%">删除</th>
				</tr>
				<?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
						<td><?php echo ($row['media_id']); ?></td>
						<td><?php echo ($row['media_name']); ?></td>
						<td><?php echo ($row['media_content']); ?></td>
						<td><?php echo (date("Y-m-d",$row['media_time'])); ?></td>
						<td>
							<a href="/mtime/index.php/Admin/Comment/editmedia/id/<?php echo ($row['media_id']); ?>">修改</a>
						</td>
						<td>
							<a href="/mtime/index.php/Admin/Comment/delmedia/id/<?php echo ($row['media_id']); ?>/mid/<?php echo ($row['media_mid']); ?>" onclick="javascript:return confirm('你确定删除？');">删除</a>
						</td>
					</tr><?php endforeach; endif; ?>
			</table>
		</div>			
	</div>

		
	</body>
		
</html>