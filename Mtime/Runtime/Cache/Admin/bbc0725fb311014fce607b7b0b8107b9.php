<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>幻灯片列表</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Bootstrap/css/bootstrap.min.css">
		<script src="/mtime/Public/Bootstrap/js/jquery-1.11.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/bootstrap.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/holder.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/application.js"></script>
		
	<style>
		.panel-footer .num,.panel-footer .current{
			border:1px solid #ddd;
			margin:0 5px;
			padding:5px;
		}
		.panel-footer .current{
			background:#0081bc;
			color:#fff;
		}
	</style>	

	</head>
	<body>
		
	<div class="container">
		<div class="panel panel-info">
			<div class="panel-heading">
				<p style="font-size:16px;">幻灯片列表</p>
			</div>
			<div class="panel-body">
				<p><span style="color:#31708F;">用于管理网站主页的幻灯片</span></p>
			</div>
			<table class="table table-hover table-striped table-bordered">
				<tr>
					<th>幻灯片ID</th>
					<th>幻灯片名称</th>
					<th>电影名称</th>
					<th>幻灯片图片地址</th>
					<th>幻灯片背景地址</th>
					<th>幻灯片出现时间</th>
					<th>修改</th>
					<th>删除</th>
				</tr>
				<?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
						<td><?php echo ($row['slide_id']); ?></td>
						<td><?php echo ($row['slide_name']); ?></td>
						<td><?php echo ($row['movie_name']); ?></td>
						<td><?php echo ($row['slide_pic']); ?></td>
						<td><?php echo ($row['slide_bg']); ?></td>
						<td><?php echo (date("Y-m-d",$row['slide_time'])); ?></td>
						<td><a href="/mtime/index.php/Admin/Slide/editslide/id/<?php echo ($row['slide_id']); ?>">修改</a></td>
						<td><a href="/mtime/index.php/Admin/Slide/del/id/<?php echo ($row['slide_id']); ?>" onclick="javascript:return confirm('你确定删除？');">删除</a></td>
					</tr><?php endforeach; endif; ?>
			</table>
		</div>			
	</div>

		
	</body>
		
</html>