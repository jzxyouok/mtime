<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title>时光网后台管理</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="/mtime/Public/Admin/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
  <link href="/mtime/Public/Admin/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="/mtime/Public/Admin/assets/css/main-min.css" rel="stylesheet" type="text/css" />
   <style>
		@font-face{
		font-family:suo;
			src:url(/mtime/Public/Admin/font/font.TTF);
		}
	</style>
 </head>
 <body>

  <div class="header" style="height:40px;">
    
      <div class="dl-title">
		<div style="font-size:30px;;padding-left:20px;font-family:'suo';color:#fff;">时光网</div>
      </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user"><?php echo ($_SESSION['admin_name']); ?></span><a href="<?php echo U('Login/layout');?>" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <ul id="J_Nav"  class="nav-list ks-clear">
        <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">首页</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-order">分类列表</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-inventory">会员列表</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-supplier">幻灯片管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-marketing">电影管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-marketing">演员管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-marketing">影院管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-marketing">评论管理</div></li>
      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
  <script type="text/javascript" src="/mtime/Public/Admin/assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="/mtime/Public/Admin/assets/js/bui.js"></script>
  <script type="text/javascript" src="/mtime/Public/Admin/assets/js/config.js"></script>

  <script>
    BUI.use('common/main',function(){
      var config = [{
          id:'menu', 
          homePage : 'index',
          menu:[{
              text:'首页',
              items:[
                {id:'index',text:'欢迎页',href:'/mtime/index.php/Admin/Index/welcome',closeable : false},
              ]
            }]
          },{
            id:'type',
			homePage : 'typelist',
            menu:[{
                text:'分类管理',
                items:[
                  {id:'typelist',text:'分类列表',href:'<?php echo U("Type/typelist");?>'},
				  {id:'addtype',text:'添加分类',href:'<?php echo U("Type/addtype");?>'},
                ]
              }]
          },{
            id:'member',
			homePage : 'memberlist',
            menu:[{
                text:'会员管理',
                items:[
                  {id:'memberlist',text:'会员列表',href:'<?php echo U("Member/memberlist");?>'},
				  {id:'disableMember',text:'禁用会员',href:'<?php echo U("Member/disableMember");?>'},
                ]
              }]
          },{
            id:'slide',
			homePage : 'slidelist',
            menu:[{
                text:'幻灯片',
                items:[
                  {id:'slidelist',text:'幻灯片列表',href:'<?php echo U("Slide/slidelist");?>'},
                  {id:'addslide',text:'添加幻灯片',href:'<?php echo U("Slide/addslide");?>'},
                ]
              }]
          },{
            id : 'movie',
			homePage : 'movielist',
            menu : [{
              text : '电影',
              items:[
                  {id:'movielist',text:'电影列表',href:'<?php echo U("Movie/movielist");?>'},
                  {id:'addmovie',text:'添加电影',href:'<?php echo U("Movie/addmovie");?>'},
                  {id:'addactor',text:'添加电影演员',href:'<?php echo U("Movie/addactor");?>'},
                  {id:'actorlist',text:'电影演员列表',href:'<?php echo U("Movie/actorlist");?>'},
                  {id:'adddirector',text:'添加电影导演',href:'<?php echo U("Movie/adddirector");?>'},
                  {id:'directorlist',text:'查看电影导演',href:'<?php echo U("Movie/directorlist");?>'},
                  {id:'addeditor',text:'添加电影编剧',href:'<?php echo U("Movie/addeditor");?>'},
                  {id:'editorlist',text:'查看电影编剧',href:'<?php echo U("Movie/editorlist");?>'},
                  {id:'addvideo',text:'添加电影视频',href:'<?php echo U("Movie/addvideo");?>'},
				  {id:'videolist',text:'查看电影视频',href:'<?php echo U("Movie/videolist");?>'},
                  {id:'addpic',text:'添加电影图片',href:'<?php echo U("Movie/addpic");?>'},
                  {id:'piclist',text:'查看电影图片',href:'<?php echo U("Movie/piclist");?>'},
                  {id:'addsecret',text:'添加电影幕后',href:'<?php echo U("Movie/addsecret");?>'},
                  {id:'secretlist',text:'查看幕后揭秘',href:'<?php echo U("Movie/secretlist");?>'},
                  {id:'addabstract',text:'添加电影剧情',href:'<?php echo U("Movie/addabstract");?>'},
                  {id:'abstractlist',text:'查看电影剧情',href:'<?php echo U("Movie/abstractlist");?>'},
                  {id:'addguessmovie',text:'添加电影竞猜',href:'<?php echo U("Movie/addguessmovie");?>'},
                  {id:'guessmovielist',text:'查看电影竞猜',href:'<?php echo U("Movie/guessmovielist");?>'},
              ]
            }]
          },{
            id:'actor',
			homePage : 'actorlist',
            menu:[{
                text:'演员',
                items:[
                  {id:'actorlist',text:'演员列表',href:'<?php echo U("Actor/actorlist");?>'},
                  {id:'addactor',text:'添加演员',href:'<?php echo U("Actor/addactor");?>'},
                ]
              }]
          },{
            id:'cinema',
			homePage : 'cinemalist',
            menu:[{
                text:'影院',
                items:[
                  {id:'cinemalist',text:'影院列表',href:'<?php echo U("Cinema/cinemalist");?>'},
                  {id:'addcinema',text:'添加影院',href:'<?php echo U("Cinema/addcinema");?>'},
                  {id:'addpic',text:'添加影院图片',href:'<?php echo U("Cinema/addpic");?>'},
                  {id:'piclist',text:'查看影院图片',href:'<?php echo U("Cinema/piclist");?>'},
                  {id:'adddetail',text:'添加影院详细信息',href:'<?php echo U("Cinema/adddetail");?>'},
                  {id:'detaillist',text:'查看影院详细信息',href:'<?php echo U("Cinema/detaillist");?>'},
                  {id:'addfilm',text:'添加影院热映电影',href:'<?php echo U("Cinema/addfilm");?>'},
                  {id:'addcz',text:'添加热映电影场次',href:'<?php echo U("Cinema/addcz");?>'},
                  {id:'cinemaczlist',text:'查看热映电影场次',href:'<?php echo U("Cinema/cinemaczlist");?>'},
                ]
              }]
          },{
            id:'comment',
			homePage : '',
            menu:[{
                text:'评论',
                items:[
                  {id:'mediacommentlist',text:'媒体评论',href:'<?php echo U("Comment/mediacommentlist");?>'},
                  {id:'addmediacomment',text:'添加媒体评论',href:'<?php echo U("Comment/addmediacomment");?>'},
                  {id:'longcommentlist',text:'会员长评论',href:'<?php echo U("Comment/longcommentlist");?>'},
                  {id:'sortcommentlist',text:'会员微评论',href:'<?php echo U("Comment/sortcommentlist");?>'},
                ]
              }]
          }
		  ];
      new PageUtil.MainPage({
        modulesConfig : config
      });
    });
  </script>

</body>
</html>