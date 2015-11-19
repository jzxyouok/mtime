<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>影院列表</title>
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
				<p style="font-size:16px;">影院列表</p>
			</div>
			<div class="panel-body">
				<p><span style="color:#31708F;">已经在时光网注册的影院</span></p>
			</div>
			<table class="table table-hover table-striped table-bordered">
				<tr class="success">
					<th width="6%">影院ID</th>
					<th width="13%">影院名称</th>
					<th width="20%">影院地址</th>
					<th width="11%">影院电话</th>
					<th width="13%">营业时间</th>
					<th width="6%">影厅数量</th>
					<th width="8%">影院受喜爱度</th>
					<th width="10%">影院LOGO</th>
					<th width="5%">修改</th>
					<th width="5%">删除</th>
				</tr>
				<?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
						<td><?php echo ($row['cinema_id']); ?></td>
						<td><?php echo ($row['cinema_name']); ?></td>
						<td><?php echo ($row['cinema_address']); ?></td>
						<td><?php echo ($row['cinema_tel']); ?></td>
						<td><?php echo ($row['cinema_time']); ?></td>
						<td><?php echo ($row['cinema_num']); ?></td>
						<td><?php echo ($row['cinema_like']); ?>%</td>
						<td>
							<img src="/mtime/Public/<?php echo ($row['cinema_logo']); ?>">
						</td>
						<td><a href="/mtime/index.php/Admin/Cinema/edit/id/<?php echo ($row['cinema_id']); ?>/p/<?php echo ($p); ?>">修改</a></td>
						<td><a href="/mtime/index.php/Admin/Cinema/del/id/<?php echo ($row['cinema_id']); ?>/p/<?php echo ($p); ?>" onclick="javascript:return confirm('你确定删除？');">删除</a></td>
					</tr><?php endforeach; endif; ?>
			</table>
			<div class="panel-footer text-right" style="padding-right:70px;"><?php echo ($page); ?></div>
		</div>			
	</div>

		
	</body>
		
</html>