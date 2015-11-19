<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>审核长评论</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Bootstrap/css/bootstrap.min.css">
		<script src="/mtime/Public/Bootstrap/js/jquery-1.11.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/bootstrap.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/holder.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/application.js"></script>
		
	<script src="/mtime/Public/kd/kindeditor-min.js"></script>
	<script src="/mtime/Public/kd/lang/zh_CN.js"></script>
	<style>
		.row{
			margin-top:20px;
		}
	</style>

	</head>
	<body>
		
	<div class="container">
		<div class="panel panel-success">
			<div class="panel-heading">
				<p style="font-size:16px;">审核长评论<p>
			</div>
			<div class="panel-body">
					<div class="row">
						<div class="form-group">
							<label for="t" class="col-md-2">评论标题:</label>
							<div class="col-md-8">
								<input type="text" value="<?php echo ($row['comment_title']); ?>" class="form-control">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group">
							<label for="dat" class="col-md-2">评论内容:</label>
							<div class="col-md-8">
								<textarea class="form-control" name="comment_text" rows="20"><?php echo ($row['comment_text']); ?></textarea>
							</div>
						</div>
					</div>
					
					<form action="/mtime/index.php/Admin/Comment/editcommentstatus" method="post">
						<input type="hidden" name="comment_id" value="<?php echo ($row['comment_id']); ?>">
						<input type="hidden" name="p" value="<?php echo ($p); ?>">
						<input type="hidden" name="comment_mid" value="<?php echo ($row['comment_mid']); ?>">
						<div class="row">
							<div class="form-group">
								<label for="dat" class="col-md-2">评论状态:</label>
								<div class="col-md-4">
									<select class="form-control" name="comment_status">
										<option value="0" <?php echo ($row['comment_status']==0?'selected':''); ?>>未审核</option>
										<option value="1" <?php echo ($row['comment_status']==1?'selected':''); ?>>已通过审核</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<div class="col-md-1 col-md-offset-2">
									<button type="submit" class="btn btn-info">修改</button>
								</div>
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
			editor = K.create('textarea[name="comment_text"]', {
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