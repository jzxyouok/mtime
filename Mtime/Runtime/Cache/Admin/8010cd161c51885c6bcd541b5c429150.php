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
				<p style="font-size:16px;">电影列表</p>
			</div>
			<div class="panel-body">
				<p><span style="color:#31708F;">近期上映的最新电影</span></p>
			</div>
			<table class="table table-hover table-striped table-bordered">
				<tr class="success">
					<th width="3%">电影ID</th>
					<th width="10%">电影名称</th>
					<th width="12%">英文名称</th>
					<th width="9%">上映时间</th>
					<th width="5%">发行国家</th>
					<th width="20%">电影简述</th>
					<th width="8%">电影评分</th>
					<th width="8%">电影票房</th>
					<th width="5%">电影热映</th>
					<th width="5%">超前预售</th>
					<th width="5%">首页推荐</th>
					<th width="5%">状态</th>
					<th width="5%">修改</th>
					<th width="5%">删除</th>
				</tr>
				<?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
						<td><?php echo ($row['movie_id']); ?></td>
						<td><?php echo ($row['movie_name']); ?></td>
						<td><?php echo ($row['movie_ename']); ?></td>
						<td><?php echo (date("Y-m-d",$row['movie_start'])); ?></td>
						<td><?php echo ($row['movie_country']); ?></td>
						<td><?php echo ($row['movie_resume']); ?></td>
						<td><?php echo ($row['movie_graded']); ?></td>
						<td><?php echo ($row['movie_office']); ?></td>
						<td>
							<?php if($row['movie_hot'] == 1): ?>是
							<?php else: ?>
								否<?php endif; ?>
						</td>
						<td>
							<?php if($row['movie_presell'] == 1): ?>是
							<?php else: ?>
								否<?php endif; ?>
						</td>
						<td>
							<?php if($row['movie_big'] == 1): ?>是
							<?php else: ?>
								否<?php endif; ?>
						</td>
						<td>
							<?php if($row['movie_status'] == 1): ?><span style="color:green;">正常</span>
							<?php else: ?>
								<span style="color:red;">下线</span><?php endif; ?>
						</td>
						<td><a href="/mtime/index.php/Admin/Movie/edit/id/<?php echo ($row['movie_id']); ?>">修改</a></td>
						<td><a href="/mtime/index.php/Admin/Movie/del/id/<?php echo ($row['movie_id']); ?>" onclick="javascript:return confirm('你确定删除？');">删除</a></td>
					</tr><?php endforeach; endif; ?>
			</table>
			<div class="panel-footer text-right" style="padding-right:70px;"><?php echo ($page); ?></div>
		</div>			
	</div>

		
	</body>
		
</html>