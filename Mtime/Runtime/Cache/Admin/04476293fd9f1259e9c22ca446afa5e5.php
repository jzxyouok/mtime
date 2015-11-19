<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>电影竞猜列表</title>
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
				<p style="font-size:16px;">电影竞猜列表</p>
			</div>
			<div class="panel-body">
				<p><span style="color:#31708F;">查看已添加的电影竞猜</span></p>
				<form action="/mtime/index.php/Admin/Movie/guessmovielist" method="get" class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2">电影名称:</label>
						<div class="col-md-4">
							<select name="movie_id" class="form-control">
								<option>---请选择---</option>
								<?php if(is_array($r)): foreach($r as $key=>$m): ?><option value="<?php echo ($m['movie_id']); ?>" <?php echo ($mrow==$m['movie_id']?'selected':''); ?>><?php echo ($m['movie_name']); ?></option><?php endforeach; endif; ?>
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
					<th width="20%">竞猜题目</th>
					<th width="20%">竞猜图片</th>
					<th width="9%">竞猜选项1</th>
					<th width="9%">竞猜选项2</th>
					<th width="9%">竞猜选项3</th>
					<th width="9%">竞猜选项4</th>
					<th width="9%">竞猜答案</th>
					<th width="7.5%">修改</th>
					<th width="7.5%">删除</th>
				</tr>
				<?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
						<td><?php echo ($row['guess_title']); ?></td>
						<td>
							<img src="/mtime/Public/<?php echo ($row['guess_pic']); ?>"  height="150">
						</td>
						<td><?php echo ($row['guess_sel1']); ?></td>
						<td><?php echo ($row['guess_sel2']); ?></td>
						<td><?php echo ($row['guess_sel3']); ?></td>
						<td><?php echo ($row['guess_sel4']); ?></td>
						<td><?php echo ($row['guess_result']); ?></td>
						<td>
							<a href="/mtime/index.php/Admin/Movie/editguess/id/<?php echo ($row['guess_id']); ?>/p/<?php echo ($p); ?>">修改</a>
						</td>
						<td>
							<a href="/mtime/index.php/Admin/Movie/deleteguess/id/<?php echo ($row['guess_id']); ?>/p/<?php echo ($p); ?>/mid/<?php echo ($row['guess_mid']); ?>" onclick="javascript:return confirm('你确定删除？');">删除</a>
						</td>
					</tr><?php endforeach; endif; ?>
			</table>
			<div class="panel-footer text-right" style="padding-right:70px;"><?php echo ($show); ?></div>
		</div>			
	</div>

		
	</body>
		
</html>