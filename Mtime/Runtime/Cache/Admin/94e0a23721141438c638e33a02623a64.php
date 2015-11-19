<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>添加影院热映场次</title>
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
				<p style="font-size:16px;">添加影院热映场次</p>
			</div>
			<div class="panel-body">
				<p><span style="color:#31708F;">查看影院热映电影</span></p>
				<form action="/mtime/index.php/Admin/Cinema/cinemaczlist" method="get" class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2">影院名称:</label>
						<div class="col-md-4">
							<select name="cz_cid" class="form-control">
								<option value="0">---请选择---</option>
								<?php if(is_array($r)): foreach($r as $key=>$m): ?><option value="<?php echo ($m['cinema_id']); ?>"><?php echo ($m['cinema_name']); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">日期:</label>
						<div class="col-md-4">
							<input type="date" name="cz_time" value="" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-1 col-md-offset-2">
							<input type="submit" class="btn btn-info" name="sub" value="选择">
						</div>
					</div>
				</form>
			</div>
			<table class="table table-hover table-striped table-bordered">
				<tr class="success">
					<th>场次ID</th>
					<th>影片名称</th>
					<th>日期</th>
					<th>开场时间</th>
					<th>语言</th>
					<th>效果</th>
					<th>影厅</th>
					<th>票价</th>
					<th>删除</th>
				</tr>
				<?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr>
						<td><?php echo ($row['cz_id']); ?></td>
						<td><?php echo ($row['movie_name']); ?></td>
						<td><?php echo (date("Y-m-d",$row['cz_time'])); ?></td>
						<td><?php echo (date("H:i",$row['cz_start'])); ?></td>
						<td><?php echo ($row['cz_language']); ?></td>
						<td>
							<?php switch($row['cz_tx']): case "0": ?>2D<?php break;?>
								<?php case "1": ?>3D<?php break;?>
								<?php case "2": ?>4D<?php break;?>
								<?php case "3": ?>5D<?php break; endswitch;?>
						</td>
						<td><?php echo ($row['cz_yt']); ?></td>
						<td><?php echo ($row['cz_money']); ?></td>
						<td>
							<a href="/mtime/index.php/Admin/Cinema/deletecz/id/<?php echo ($row['cz_id']); ?>/cid/<?php echo ($row['cz_cid']); ?>/time/<?php echo ($row['cz_time']); ?>" onclick="javascript:return confirm('你确定删除？');">删除</a>
						</td>
					</tr><?php endforeach; endif; ?>
			</table>
		</div>			
	</div>

		
	</body>
		
</html>