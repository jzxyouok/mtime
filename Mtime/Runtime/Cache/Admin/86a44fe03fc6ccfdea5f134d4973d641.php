<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>分类列表</title>
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
				<p style="font-size:16px;">电影分类</p>
			</div>
			<div class="panel-body">
				<p><span style="color:#31708F;">用于管理网站所有的电影分类</span></p>
			</div>
			<table class="table table-hover table-striped">
				<tr>
					<th>类型ID</th>
					<th>类型名称</th>
					<th>修改</th>
					<th>删除</th>
				</tr>
				<?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
						<td><?php echo ($row['type_id']); ?></td>
						<td><?php echo ($row['type_name']); ?></td>
						<td><a href="/mtime/index.php/Admin/Type/edit/id/<?php echo ($row['type_id']); ?>">修改</a></td>
						<td><a href="/mtime/index.php/Admin/Type/del/id/<?php echo ($row['type_id']); ?>" onclick="javascript:return confirm('你确定删除？');">删除</a></td>
					</tr><?php endforeach; endif; ?>
			</table>
			<div class="panel-footer text-right" style="padding-right:70px;"><?php echo ($page); ?></div>
		</div>			
	</div>

		
	</body>
		
</html>