<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>会员长评论列表</title>
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
				<p style="font-size:16px;">会员长评论列表</p>
			</div>
			<div class="panel-body">
				<p><span style="color:#31708F;">查看电影的长评论</span></p>
				<form action="/mtime/index.php/Admin/Comment/longcommentlist" method="get" class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2">电影名称:</label>
						<div class="col-md-4">
							<select name="comment_mid" class="form-control">
								<option>---请选择---</option>
								<?php if(is_array($arrs)): foreach($arrs as $key=>$arr): ?><option value="<?php echo ($arr['movie_id']); ?>" <?php echo ($mrow['comment_mid']==$arr['movie_id']?'selected':''); ?>><?php echo ($arr['movie_name']); ?></option><?php endforeach; endif; ?>
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
					<th width="30%">评论标题</th>
					<th width="14%">评论时间</th>
					<th width="10%">评论状态</th>
					<th width="13%">查看评论内容</th>
					<th width="13%">查看评论回复</th>
					<th width="10%">删除</th>
				</tr>
				<?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
						<td><?php echo ($row['comment_id']); ?></td>
						<td><?php echo ($row['comment_title']); ?></td>
						<td><?php echo (date("Y-m-d H:i",$row['comment_time'])); ?></td>
						<td>
							<?php if($row['comment_status'] == 1): ?><span style="color:green;">审核通过</span>
							<?php else: ?>
								<span style="color:red;">未审核</span><?php endif; ?>
						</td>
						<td>
							<a href="/mtime/index.php/Admin/Comment/lookcomment/id/<?php echo ($row['comment_id']); ?>/p/<?php echo ($p); ?>">查看评论内容</a>
						</td>
						<td>
							<a href="/mtime/index.php/Admin/Comment/lookcommentreplay/id/<?php echo ($row['comment_id']); ?>/p/<?php echo ($p); ?>">查看评论回复</a>
						</td>
						<td>
							<a href="/mtime/index.php/Admin/Comment/deletecomment/id/<?php echo ($row['comment_id']); ?>/p/<?php echo ($p); ?>/mid/<?php echo ($row['comment_mid']); ?>" onclick="javascript:return confirm('你确定删除？');">删除</a>
						</td>
					</tr><?php endforeach; endif; ?>
			</table>
			<div class="panel-footer">
				<span class="text-right"><?php echo ($show); ?></span>
			</div>
		</div>			
	</div>

		
	</body>
		
</html>