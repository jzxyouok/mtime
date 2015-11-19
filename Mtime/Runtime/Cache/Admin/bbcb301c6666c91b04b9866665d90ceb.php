<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>会员列表</title>
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
		<h2 class="page-header">会员列表</h2>
		<table class="table table-hover table-bordered table-striped">
			<tr class="info">
				<th>会员ID</th>
				<th>会员帐号</th>
				<th>会员状态</th>
				<th>禁用帐号</th>
				<th>删除</th>
			</tr>
			<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($row['id']); ?></td>
					<td><?php echo ($row['member_name']); ?></td>
					<td>
						<span style="color:green;">正常</span>	
					</td>
					<td>
						<a href="/mtime/index.php/Admin/Member/disable/id/<?php echo ($row['id']); ?>" onclick="javascript:return confirm('你确定要禁用该会员帐号？');">禁用</a>
					</td>
					<td>
						<a href="/mtime/index.php/Admin/Member/del/id/<?php echo ($row['id']); ?>" onclick="javascript:return confirm('你确定删除？');">删除</a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<div class="text-right" style="padding-right:70px;"><?php echo ($page); ?></div>
	</div>

		
	</body>
		
</html>