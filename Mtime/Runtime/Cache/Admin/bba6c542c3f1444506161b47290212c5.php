<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>会员评论</title>
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
				<p style="font-size:16px;" style="float:left;">会员评论</p>
				
			</div>
			<div class="panel-body">
				<a class="btn btn-primary" id="btn_hf" style="float:right;margin-right:10px;">返回</a>
			</div>
			<table class="table table-hover table-striped table-bordered">
				<tr class="success">
					<th width="10%">回复ID</th>
					<th width="47%">回复内容</th>
					<th width="14%">回复时间</th>
					<th width="10%">回复状态</th>
					<th width="13%">审核回复</th>
					<th width="10%">删除</th>
				</tr>
				<?php if(is_array($recoms)): foreach($recoms as $key=>$recom): ?><tr>
						<td><?php echo ($recom['recomment_id']); ?></td>
						<td><?php echo ($recom['recomment_text']); ?></td>
						<td><?php echo (date("Y-m-d H:i",$recom['recomment_time'])); ?></td>
						<td>
							<?php if($recom['recomment_status'] == 1): ?><span style="color:green;">审核通过</span>
							<?php else: ?>
								<span style="color:red;">未通过</span><?php endif; ?>
						</td>
						<td>
							<a href="javascript:;" class="btn_check">审核</a>
						</td>
						<td>
							<a href="javascript:;" class="btn_del">删除</a>
						</td>
						<td style="display:none;">
							<span style="display:none;"><?php echo ($recom['recomment_status']); ?></span>
						</td>
					</tr><?php endforeach; endif; ?>
			</table>
			<div class="panel-footer">
				<span class="text-right"><?php echo ($show); ?></span>
			</div>
		</div>			
	</div>

		
	</body>
		
	<script>
		//通过AJAX控制页面内容的审核
		$(".btn_check").click(function(){
			obj = $(this);
			rid = $(this).parent().parent().children().eq(0).text();
			status = $(this).parent().next().next().children().text();
			
			if(parseInt(status)=='0'){
				status = '1';
			}else{
				status = '0';
			}
			
			$.ajax({
				'type':'get',
				'url':"/mtime/index.php/Admin/Comment/updatecheck",
				'data':{'recomment_id':rid,'status':status},
				'async':false,
				'success':function(d){
					if(d=='1'){
						switch(parseInt(status)){
							case 0:
								obj.parent().prev().text("未通过").css({"color":"red"});
								obj.parent().next().next().children().text("0");
								break;
							case 1:
								obj.parent().prev().text("审核通过").css({"color":"green"});
								obj.parent().next().next().children().text("1");
								break;
						}
					}
				}
			});
		});
		
		//返回上一页
		$("#btn_hf").click(function(){
			history.back();
		});
		
		//通过AJAX控制页面内容删除
		$(".btn_del").click(function(){
			obj = $(this);
			var s = confirm("您确定要删除？");
			if(s){
				var rid = $(this).parent().parent().children().eq(0).text();
				
				$.ajax({
					'type':'get',
					'url':"/mtime/index.php/Admin/Comment/deleterecomment",
					'data':{'recomment_id':rid},
					'async':false,
					'success':function(d){
						if(d=='1'){
							obj.parent().parent().hide(1000);
						}
					}
				});
			}else{
			
			}
		});
	</script>

</html>