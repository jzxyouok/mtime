<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>添加影院图片</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Bootstrap/css/bootstrap.min.css">
		<script src="/mtime/Public/Bootstrap/js/jquery-1.11.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/bootstrap.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/holder.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/application.js"></script>
		
	<link rel="stylesheet" href="/mtime/Public/kd/themes/default/default.css" />
	<script charset="utf-8" src="/mtime/Public/kd/kindeditor-min.js"></script>
	<script charset="utf-8" src="/mtime/Public/kd/lang/zh_CN.js"></script>
	<style>
		textarea{
			resize:none;
		}
	</style>

	</head>
	<body>
		
	<div class="container">
		<div class="panel panel-success">
			<div class="panel-heading">
				<p style="font-size:16px;">添加影院详情<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Cinema/tjdetail" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-md-2">影院名称:</label>
						<div class="col-md-4">
							<select name="cinema_cid" class="form-control">
								<option>---请选择---</option>
								<?php if(is_array($r)): foreach($r as $key=>$row): ?><option value="<?php echo ($row['cinema_id']); ?>"><?php echo ($row['cinema_name']); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2">影院介绍:</label>
						<div class="col-md-8">
							<textarea class="form-control" rows="15" name="cinema_abstract"></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2">会员服务:</label>
						<div class="col-md-8">
							<textarea class="form-control" rows="15" name="cinema_member"></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-1 col-md-offset-2">
							<button type="submit" class="btn btn-info">添加</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

		
	</body>
		
	<script>
		var editor;
		KindEditor.ready(function(K) {
			editor = K.create('textarea[name="cinema_abstract"],textarea[name="cinema_member"]', {
				resizeType : 0,
				allowImageUpload : true,
				items : [
					'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
					'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
					'insertunorderedlist', '|', 'emoticons', 'image', 'link']
			});
		});
	</script>

</html>