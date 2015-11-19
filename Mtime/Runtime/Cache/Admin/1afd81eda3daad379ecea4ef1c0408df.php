<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>影院详情</title>
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
		<div class="panel panel-info">
			<div class="panel-heading">
				<p style="font-size:16px;">影院详情</p>
			</div>
			<div class="panel-body">
				<p><span style="color:#31708F;">查看已添加影院的详细信息</span></p>
				<form action="/mtime/index.php/Admin/Cinema/detaillist" method="get" class="form-horizontal">
					<div class="form-group">
						<label class="col-md-2">影院名称:</label>
						<div class="col-md-4">
							<select name="cinema_cid" class="form-control">
								<option>---请选择---</option>
								<?php if(is_array($r)): foreach($r as $key=>$m): ?><option value="<?php echo ($m['cinema_id']); ?>"><?php echo ($m['cinema_name']); ?></option><?php endforeach; endif; ?>
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
				<form action="/mtime/index.php/Admin/Cinema/editdetail" method="post" id='form2'>
					<input type="hidden" value="<?php echo ($row['cinema_cid']); ?>" name="cid">
					<tr class="success">
						<th>影院详情ID</th>
						<td><input type="text" name="cinemadetail_id" value="<?php echo ($row['cinemadetail_id']); ?>" class="form-control" style="width:400px;"/></td>
					</tr>
					<tr>
						<th>影院介绍</th>
						<td>
							<textarea name="cinema_abstract" rows="10"  class="form-control"><?php echo ($row['cinema_abstract']); ?></textarea>
						</td>
					</tr>
					<tr>
						<th>会员服务</th>
						<td>
							<textarea name="cinema_member" rows="10"  class="form-control"><?php echo ($row['cinema_member']); ?></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" class="btn btn-primary" value="修改">
						</td>
					</tr>
				</form>
			</table>
		</div>			
	</div>

		
	</body>
		
	<script>
		var editor;
		KindEditor.ready(function(K) {
			editor = K.create('textarea[name="cinema_abstract"]', {
				resizeType : 0,
				allowImageUpload : true,
				items : [
					'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
					'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
					'insertunorderedlist', '|', 'emoticons', 'image', 'link']
			});
		});
		var editor2;
		KindEditor.ready(function(K) {
			editor2 = K.create('textarea[name="cinema_member"]', {
				resizeType : 0,
				allowImageUpload : true,
				items : [
					'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
					'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
					'insertunorderedlist', '|', 'emoticons', 'image', 'link']
			});
		});
		
		
		$('#form2').submit(function(){
			$('textarea[name="cinema_abstract"]').html(editor.html());
			$('textarea[name="cinema_member"]').html(editor2.html());
			$(this).submit();
			return false;
		});
	</script>

</html>