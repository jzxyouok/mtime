<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>会员列表</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Bootstrap/css/bootstrap.min.css">
		<script src="/mtime/Public/Bootstrap/js/jquery-1.11.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/bootstrap.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/holder.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/application.js"></script>
		
	</head>
	<body>
		
	<div class="container">
		<h2 class="page-header">会员列表</h2>
		<table class="table table-hover table-bordered table-striped">
			<tr class="danger">
				<th>会员ID</th>
				<th>会员帐号</th>
				<th>会员状态</th>
				<th>恢复会员</th>
				<th>删除</th>
			</tr>
			<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($row['id']); ?></td>
					<td><?php echo ($row['member_name']); ?></td>
					<td>
						<span style="color:red;">禁用</span>
					</td>
					<td>
						<a href="/mtime/index.php/Admin/Member/enable/id/<?php echo ($row['id']); ?>" onclick="javascript:return confirm('你确定恢复该会员帐号？');">恢复</a>
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