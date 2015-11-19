<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>时光网后台登录</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Bootstrap/css/bootstrap.min.css">
		<script src="/mtime/Public/Bootstrap/js/jquery-1.11.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/bootstrap.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/holder.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/application.js"></script>
		
	<style>
		body{
			 background-color: #f5f5f5;
		}


		.form-body{
			width:350px;
			height:300px;
			background:white;
			position:absolute;
			top:100px;
			left:540px;
			background-color: #fff;
			border: 1px solid #e5e5e5;
			padding: 19px 29px 29px;
			border-radius:20px;
			-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
			-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
			box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
		}

		.mt20{
			margin-top:10px;
		}
	</style>

	</head>
	<body>
		
	<div class="container">
		<form action="/mtime/index.php/Admin/Login/do_login" method="post" class="form-body">
			<h2>时光网</h2>
			<div class="form-group mt10">
				<label for="user" class="sr-only">用户名</label>
				<input type="text" class="form-control" name="admin_name" placeholder="用户名" autofocus>
			</div>
			<div class="form-group mt10">
				<label for="user" class="sr-only">用户名</label>
				<input type="text" class="form-control" name="admin_pass" placeholder="密码">
			</div>
			<div class="form-group mt10">
				<div class="row">
					<div class="col-md-5">
						<input type="text" class="form-control" name="code" placeholder="验证码" size="4" maxlength="4" onkeyup="this.value = this.value.toUpperCase()">
					</div>
					<div class="col-md-7">
						<img height="40" alt="点击更换图片" style="cursor:pointer;margin-right:6px;vertical-align:middle;" src="<?php echo U('Login/Vcode');?>" id="code" onclick="this.src = '/mtime/index.php/Admin/Login/Vcode/'+Math.random() "/>
					</div>
				</div>
			</div>
			<div class="form-group mt10 w">
				<input type="submit" class="btn btn-primary btn-large" value="登录">
			</div>
		</form>
	</div>

		
	</body>
		
</html>