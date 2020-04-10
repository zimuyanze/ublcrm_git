<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:67:"D:\phpstudy\WWW\ublcrm_zmyz/app/admin\view\plug\plug_link_list.html";i:1586240272;s:59:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\base.html";i:1586240272;s:61:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\header.html";i:1586341030;s:63:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\left_nav.html";i:1586341030;s:63:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\head_nav.html";i:1586250143;s:72:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\plug\ajax_plug_link_list.html";i:1586240272;s:61:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\footer.html";i:1586250143;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>优伯乐CRM后台管理</title>

	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="Bookmark" href="/favicon.ico" >
    <link rel="Shortcut Icon" href="/favicon.ico" />
	<!-- bootstrap & fontawesome必须的css -->
	<link rel="stylesheet" href="/public/ace/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/public/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/public/datePicker/bootstrap-datepicker.css" />
	<link rel="stylesheet" href="/public/datetimepicker/bootstrap-datetimepicker.css" />
	<!-- 此页插件css -->

	<!-- ace的css -->
	<link rel="stylesheet" href="/public/ace/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
	<!-- IE版本小于9的ace的css -->
	<!--[if lte IE 9]>
	<link rel="stylesheet" href="/public/ace/css/ace-part2.min.css" class="ace-main-stylesheet" />
	<![endif]-->

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="/public/ace/css/ace-ie.css" />
	<![endif]-->

	<link rel="stylesheet" href="/public/yfcmf/yfcmf.css" />
	<!-- 此页相关css -->
	
	<!-- ace设置处理的js -->
	<script src="/public/ace/js/ace-extra.js"></script>
	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
	<script src="/public/others/html5shiv.min.js"></script>
	<script src="/public/others/respond.min.js"></script>
	<![endif]-->
    <!-- 引入基本的js -->
    <script type="text/javascript">
        var admin_ueditor_handle = "<?php echo url('admin/Ueditor/upload'); ?>";
        var admin_ueditor_lang ='zh-cn';
    </script>
    <!--[if !IE]> -->
    <script src="/public/others/jquery.min-2.2.1.js"></script>
    <!-- <![endif]-->
    <!-- 如果为IE,则引入jq1.12.1 -->
    <!--[if IE]>
    <script src="/public/others/jquery.min-1.12.1.js"></script>
    <![endif]-->

    <!-- 如果为触屏,则引入jquery.mobile -->
    <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='/public/others/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="/public/others/bootstrap.min.js"></script>
</head>

<body class="no-skin">
<!-- 导航栏开始 -->
<div id="navbar" class="navbar navbar-default navbar-fixed-top">
	<div class="navbar-container" id="navbar-container">
		<!-- 导航左侧按钮手机样式开始 -->
		<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button><!-- 导航左侧按钮手机样式结束 -->
		<button data-target="#sidebar2" data-toggle="collapse" type="button" class="pull-left navbar-toggle collapsed">
			<span class="sr-only">Toggle sidebar</span>
			<i class="ace-icon fa fa-dashboard white bigger-125"></i>
		</button>
		<!-- 导航左侧正常样式开始 -->
		<div class="navbar-header pull-left">
			<!-- logo -->
			<a href="<?php echo url('admin/Index/index'); ?>" class="navbar-brand" title="管理后台首页">
				<small>
					<i class="fa fa-leaf"></i>
					优伯乐CRM
				</small>
			</a>
		</div><!-- 导航左侧正常样式结束 -->

		<!-- 导航栏开始 -->
		<div class="navbar-buttons navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<!--<li class="grey">-->
					<!--<a href="<?php echo url('home/Index/index'); ?>" target="_blank">-->
						<!--前台首页-->
					<!--</a>-->
				<!--</li>-->

				<li class="purple">
					<a data-info="确定要清理缓存吗？" class="confirm-rst-btn" href="<?php echo url('admin/Sys/clear'); ?>">
						清除缓存
					</a>
				</li>
				<!-- 用户菜单开始 -->
				<li class="light-blue dropdown-modal">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<img class="nav-user-photo" src="<?php echo get_imgurl($admin_avatar,2); ?>" alt="<?php echo session('admin_auth.admin_username'); ?>" />
								<span class="user-info">
									<small>欢迎,</small>
									<?php echo session('admin_auth.admin_username'); ?>
								</span>

						<i class="ace-icon fa fa-caret-down"></i>
					</a>

					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="<?php echo url('admin/Admin/profile'); ?>">
								<i class="ace-icon fa fa-user"></i>
								会员中心
							</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="<?php echo url('admin/Login/logout'); ?>"  data-info="你确定要退出吗？" class="confirm-btn">
								<i class="ace-icon fa fa-power-off"></i>
								注销
							</a>
						</li>
					</ul>
				</li><!-- 用户菜单结束 -->
			</ul>
		</div><!-- 导航栏结束 -->
	</div><!-- 导航栏容器结束 -->
</div><!-- 导航栏结束 -->

<!-- 整个页面内容开始 -->
<div class="main-container" id="main-container">
	<!-- 菜单栏开始 -->
	<div id="sidebar" class="sidebar responsive sidebar-fixed ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>
	<!--<div class="sidebar-shortcuts" id="sidebar-shortcuts">-->
		<!--&lt;!&ndash;左侧顶端按钮&ndash;&gt;-->
		<!--<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">-->
			<!--<a class="btn btn-success" href="<?php echo url('admin/News/news_list'); ?>" role="button" title="文章列表"><i class="ace-icon fa fa-signal"></i></a>-->
			<!--<a class="btn btn-info" href="<?php echo url('admin/News/news_add'); ?>" role="button" title="添加文章"><i class="ace-icon fa fa-pencil"></i></a>-->
			<!--<a class="btn btn-warning" href="<?php echo url('admin/Member/member_list'); ?>" role="button" title="会员列表"><i class="ace-icon fa fa-users"></i></a>-->
			<!--<a class="btn btn-danger" href="<?php echo url('admin/Sys/sys'); ?>" role="button" title="站点设置"><i class="ace-icon fa fa-cogs"></i></a>-->
		<!--</div>-->
		<!--&lt;!&ndash;左侧顶端按钮（手机）&ndash;&gt;-->
		<!--<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">-->
			<!--<a class="btn btn-success" href="<?php echo url('admin/News/news_list'); ?>" role="button" title="文章列表"></a>-->
			<!--<a class="btn btn-info" href="<?php echo url('admin/News/news_add'); ?>" role="button" title="添加文章"></a>-->
			<!--<a class="btn btn-warning" href="<?php echo url('admin/Member/member_list'); ?>" role="button" title="会员列表"></a>-->
			<!--<a class="btn btn-danger" href="<?php echo url('admin/Sys/sys'); ?>" role="button" title="站点设置"></a>-->
		<!--</div>-->
	<!--</div>-->
	<!-- 菜单列表开始 -->
	<ul class="nav nav-list">
		<!--一级菜单遍历开始-->
		<?php if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): if( count($menus)==0 ) : echo "" ;else: foreach($menus as $key=>$v): if(!empty($v['_child'])): ?>
				<li class="<?php if((count($menus_curr) >= 1) AND ($menus_curr[0] == $v['id'])): ?>open<?php endif; ?>">
			<a href="javascript:void(0);" class="dropdown-toggle">
				<i class="menu-icon fa <?php echo $v['css']; ?>"></i>
				<span class="menu-text"><?php echo $v['title']; ?></span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<ul class="submenu">
				<!--二级菜单遍历开始-->
				<?php if(is_array($v['_child']) || $v['_child'] instanceof \think\Collection || $v['_child'] instanceof \think\Paginator): if( count($v['_child'])==0 ) : echo "" ;else: foreach($v['_child'] as $key=>$vv): if(!empty($vv['_child'])): ?>
						<li class="<?php if((count($menus_curr) >= 2) AND ($menus_curr[1] == $vv['id'])): ?>active open<?php endif; ?>">
					<a href="javascript:void(0);" class="dropdown-toggle">
						<i class="menu-icon fa fa-caret-right"></i>
						<?php echo $vv['title']; ?>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>
					<ul class="submenu">
						<!--三级菜单遍历开始-->
						<?php if(is_array($vv['_child']) || $vv['_child'] instanceof \think\Collection || $vv['_child'] instanceof \think\Paginator): if( count($vv['_child'])==0 ) : echo "" ;else: foreach($vv['_child'] as $key=>$vvv): ?>
							<li class="<?php if((count($menus_curr) >= 3) AND ($menus_curr[2] == $vvv['id'])): ?>active<?php endif; ?>">
							<a href="<?php echo url($vvv['name']); ?>">
								<i class="menu-icon fa fa-caret-right"></i>
								<?php echo $vvv['title']; ?>
							</a>
							<b class="arrow"></b>
							</li>
						<?php endforeach; endif; else: echo "" ;endif; ?><!--三级菜单遍历结束-->
					</ul>
					</li>
					<?php else: ?>
					<li class="<?php if((count($menus_curr) >= 2) AND ($menus_curr[1] == $vv['id'])): ?>active<?php endif; ?>">
					<a href="<?php echo url($vv['name']); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						<?php echo $vv['title']; ?>
					</a>
					<b class="arrow"></b>
					</li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?><!--二级菜单遍历结束-->
			</ul>
			</li>
			<?php else: ?>
			<li class="<?php if((count($menus_curr) >= 1) AND ($menus_curr[0] == $v['id'])): ?>active<?php endif; ?>">
			<a href="<?php echo url($v['name']); ?>">
				<i class="menu-icon fa fa-caret-right"></i>
				<?php echo $v['title']; ?>
			</a>
			<b class="arrow"></b>
			</li>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?><!--一级菜单遍历结束-->
	</ul><!-- 菜单列表结束 -->

	<!-- 菜单栏缩进开始 -->
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div><!-- 菜单栏缩进结束 -->
</div>
	<!-- 菜单栏结束 -->

	<!-- 主要内容开始 -->
	<div class="main-content">
		<div class="main-content-inner">
			<!-- 右侧主要内容页顶部标题栏开始 -->
			<div id="sidebar2" class="sidebar h-sidebar navbar-collapse collapse breadcrumbs-fixed" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
	<div class="nav-wrap-up pos-rel">
		<div class="nav-wrap">
			<ul class="nav nav-list">
				<?php if(($id_curr != '') AND (!empty($menus_child))): if(is_array($menus_child) || $menus_child instanceof \think\Collection || $menus_child instanceof \think\Paginator): if( count($menus_child)==0 ) : echo "" ;else: foreach($menus_child as $key=>$k): ?>
				<li>
					<a href="<?php echo url(''.$k['name'].''); ?>">
					<o class="font12 <?php if($id_curr == $k['id']): ?>rigbg<?php endif; ?>"><?php echo $k['title']; ?></o>
					</a>
					<b class="arrow"></b>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; else: ?>
				<li>
					<a href="<?php echo url('admin/Index/index'); ?>">
						<o class="font12">欢迎使用 <b>优伯乐CRM</b> 后台管理</o>
					</a>
					<b class="arrow"></b>
				</li>
				<?php endif; ?>
			</ul>
		</div>
	</div><!-- /.nav-list -->
</div>
			<!-- 右侧主要内容页顶部标题栏结束 -->
			<!-- 右侧下主要内容开始 -->
			
	<div class="page-content">

		<div class="row maintop">
			<div class="col-xs-4 col-sm-2 margintop5">
				<!-- 点击模态框（Modal） -->
				<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal">
					<i class="ace-icon fa fa-bolt bigger-110"></i>
					添加链接
				</button>

			</div>
			<form name="admin_list_sea" class="form-search" id="list-filter" method="post" action="<?php echo url('admin/Plug/plug_link_list'); ?>">
				<div class="col-xs-6 col-sm-3  margintop5">
					<select name="type" class="ajax_change">
						<option value="">按广告位置</option>
						<?php if(is_array($link_type) || $link_type instanceof \think\Collection || $link_type instanceof \think\Paginator): if( count($link_type)==0 ) : echo "" ;else: foreach($link_type as $key=>$v): ?>
							<option value="<?php echo $v['plug_linktype_id']; ?>" <?php if($type == $v['plug_linktype_id']): ?>selected<?php endif; ?>><?php echo $v['plug_linktype_name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
					<?php if(config('lang_switch_on')): ?>
					<select name="plug_link_l" class="ajax_change">
						<option value="">按语言</option>
						<option value="zh-cn" <?php if($plug_link_l == 'zh-cn'): ?>selected="selected"<?php endif; ?>>中文</option>
						<option value="en-us" <?php if($plug_link_l == 'en-us'): ?>selected="selected"<?php endif; ?> >英语</option>
					</select>
					<?php endif; ?>
				</div>
				<div class="col-xs-12 col-sm-4 margintop5">
					<div class="input-group">
										<span class="input-group-addon">
											<i class="ace-icon fa fa-check"></i>
										</span>
						<input type="text" name="val" id="val" class="form-control" value="<?php echo $val; ?>" placeholder="输入链接名称或URL"/>
										<span class="input-group-btn">
											<button type="submit" class="btn btn-purple btn-sm ajax-search-form">
												<span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
												搜索
											</button>
										</span>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 margintop5">
					<div class="input-group-btn">
						<a href="<?php echo url('admin/Plug/plug_link_list'); ?>">
							<button type="button" class="btn btn-sm  btn-purple ajax-display-all">
								<span class="ace-icon fa fa-globe icon-on-right bigger-110"></span>
								显示全部
							</button>
						</a>
					</div>
				</div>
			</form>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div>
					<table class="table table-striped table-bordered table-hover" id="dynamic-table">
						<thead>
						<tr>
							<th>ID</th>
							<th>链接名称</th>
							<th>链接URL</th>
							<th class="hidden-sm hidden-xs">联系QQ</th>
							<th class="hidden-xs">所属栏目</th>
							<?php if(config('lang_switch_on')): ?>
							<th class="hidden-xs">语言</th>
							<?php endif; ?>
							<th class="hidden-sm hidden-xs">添加时间</th>
							<th class="hidden-xs" style="border-right:#CCC solid 1px;">状态</th>
							<th style="border-right:#CCC solid 1px;">操作</th>
						</tr>
						</thead>

						<tbody id="ajax-data">
							<?php if(is_array($plug_link) || $plug_link instanceof \think\Collection || $plug_link instanceof \think\Paginator): if( count($plug_link)==0 ) : echo "" ;else: foreach($plug_link as $key=>$v): ?>
	<tr>
		<td height="28" ><?php echo $v['plug_link_id']; ?></td>
		<td><?php echo $v['plug_link_name']; ?></td>
		<td><a href="<?php echo $v['plug_link_url']; ?>" target="_blank"><?php echo $v['plug_link_url']; ?></a></td>
		<td class="hidden-sm hidden-xs"><?php echo $v['plug_link_qq']; ?></td>
		<td class="hidden-xs"><?php echo $v['plug_linktype_name']; ?></td>
		<?php if(config('lang_switch_on')): ?>
		<td class="hidden-xs"><?php echo $v['plug_link_l']; ?></td>
		<?php endif; ?>
		<td class="hidden-sm hidden-xs"><?php echo date('Y-m-d',$v['plug_link_addtime']); ?></td>
		<td class="hidden-xs">
			<?php if($v['plug_link_open'] == 1): ?>
				<a class="red open-btn" href="<?php echo url('admin/Plug/plug_link_state'); ?>" data-id="<?php echo $v['plug_link_id']; ?>" title="已开启">
					<div id="zt<?php echo $v['plug_link_id']; ?>"><button class="btn btn-minier btn-yellow">开启</button></div>
				</a>
				<?php else: ?>
				<a class="red open-btn" href="<?php echo url('admin/Plug/plug_link_state'); ?>" data-id="<?php echo $v['plug_link_id']; ?>" title="已禁用">
					<div id="zt<?php echo $v['plug_link_id']; ?>"><button class="btn btn-minier btn-danger">禁用</button></div>
				</a>														<?php endif; ?>														</td>
		<td>
			<div class="hidden-sm hidden-xs action-buttons">
				<a class="green linkedit-btn"  href="<?php echo url('admin/Plug/plug_link_edit'); ?>" data-id="<?php echo $v['plug_link_id']; ?>"  title="修改">
					<i class="ace-icon fa fa-pencil bigger-130"></i>																</a>
				<a class="red confirm-rst-url-btn" data-info="你确定要删除吗？" href="<?php echo url('admin/Plug/plug_link_del',array('plug_link_id'=>$v['plug_link_id'])); ?>" title="删除">
					<i class="ace-icon fa fa-trash-o bigger-130"></i>																</a>										</div>
			<div class="hidden-md hidden-lg">
				<div class="inline position-relative">
					<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
						<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
					</button>
					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
						<li>
							<a href="<?php echo url('admin/Plug/plug_link_edit'); ?>" data-id="<?php echo $v['plug_link_id']; ?>" class="tooltip-success linkedit-btn" data-rel="tooltip" title="" data-original-title="修改">
											<span class="green">
												<i class="ace-icon fa fa-pencil bigger-120"></i>
											</span>
							</a>
						</li>

						<li>
							<a href="<?php echo url('admin/Plug/plug_link_del',array('plug_link_id'=>$v['plug_link_id'])); ?>"  class="tooltip-error confirm-rst-url-btn" data-rel="tooltip" title="" data-info="你确定要删除吗？" data-original-title="删除">
											<span class="red">
												<i class="ace-icon fa fa-trash-o bigger-120"></i>
											</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</td>
	</tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
	<tr>
		<td height="50" colspan="12" align="left"><?php echo $page; ?></td>
	</tr>


						</tbody>
					</table>
				</div>
			</div>
		</div>


	</div><!-- /.page-content -->
	<!-- 显示模态框（Modal） -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form class="form-horizontal ajaxForm2" name="plug_link_add" method="post" action="<?php echo url('admin/Plug/plug_link_runadd'); ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
								aria-hidden="true">×
						</button>
						<h4 class="modal-title" id="myModalLabel">
							添加友情链接
						</h4>
					</div>
					<div class="modal-body">


						<div class="row">
							<div class="col-xs-12">

								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 所属栏目： </label>
									<div class="col-sm-10">
										<select name="plug_link_typeid"  class="col-sm-4 selector" required>
											<option value="">请选择所属栏目</option>
											<?php if(is_array($link_type) || $link_type instanceof \think\Collection || $link_type instanceof \think\Paginator): if( count($link_type)==0 ) : echo "" ;else: foreach($link_type as $key=>$v): ?>
												<option value="<?php echo $v['plug_linktype_id']; ?>"><?php echo $v['plug_linktype_name']; ?></option>
											<?php endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</div>
								</div>
								<div class="space-4"></div>
								<?php if(config('lang_switch_on')): ?>
								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 语言： </label>
									<div class="col-sm-10">
										<select name="plug_link_l"  class="col-sm-4 selector" required>
											<option value="">请语言</option>
											<option value="zh-cn">中文</option>
											<option value="en-us">英语</option>
										</select>
									</div>
								</div>
								<div class="space-4"></div>
								<?php endif; ?>
								
								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 链接名称：  </label>
									<div class="col-sm-10">
										<input type="text" name="plug_link_name" id="plug_link_name" placeholder="输入链接名称" class="col-xs-10 col-sm-5" required/>
										<span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必须是以字母开头，数字、符号组合</span>
									</div>
								</div>
								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 链接URL：  </label>
									<div class="col-sm-10">
										<input type="url" name="plug_link_url" id="plug_link_url" placeholder="输入链接URL" class="col-xs-10 col-sm-8" required/>
										<span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必须是以http://开头</span>
									</div>
								</div>
								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 打开方式：  </label>
									<div class="col-sm-10">
										<select name="plug_link_target" class="col-xs-10 col-sm-5" required>
											<option value="_blank">新标签页打开</option>
											<option value="_self">本窗口打开</option>
										</select>
									</div>
								</div>
								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 是否审核： </label>
									<div class="col-sm-10" style="padding-top:5px;">
										<input name="plug_link_open" id="plug_link_open" value="1" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox" />
										<span class="lbl">&nbsp;&nbsp;默认关闭</span>
									</div>
								</div>
								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 联系站长：  </label>
									<div class="col-sm-10">
										<input type="text" name="plug_link_qq" id="plug_link_qq" placeholder="输入QQ或其他联系方式" class="col-xs-10 col-sm-5" />
									</div>
								</div>
								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 排序：  </label>
									<div class="col-sm-10">
										<input type="text" name="plug_link_order" id="plug_link_order" value="50" class="col-xs-10 col-sm-3" />
										<span class="lbl">&nbsp;&nbsp;<span class="red">*</span>从小到大排序</span>
									</div>
								</div>
								<div class="space-4"></div>

							</div>
						</div>




					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">
							提交保存
						</button>
						<button class="btn btn-info" type="reset">
							重置
						</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">
							关闭
						</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</form>
	</div><!-- /.modal -->






	<!-- 显示模态框（Modal） -->
	<div class="modal fade in" id="myModaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-backdrop fade in" id="gbbb" style="height: 100%;"></div>
		<form class="form-horizontal ajaxForm2" name="plug_link_runedit" method="post" action="<?php echo url('admin/Plug/plug_link_runedit'); ?>">
			<input type="hidden" name="plug_link_id" id="editplug_link_id" value="" />
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" id="gb"  data-dismiss="modal"
								aria-hidden="true">×
						</button>
						<h4 class="modal-title" id="myModalLabel">
							修改友情链接
						</h4>
					</div>
					<div class="modal-body">


						<div class="row">
							<div class="col-xs-12">

								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 所属栏目： </label>
									<div class="col-sm-10">
										<select name="plug_link_typeid" id="editplug_link_typeid"  class="col-sm-4" required>
											<option value="">请选择所属栏目</option>
											<?php if(is_array($link_type) || $link_type instanceof \think\Collection || $link_type instanceof \think\Paginator): if( count($link_type)==0 ) : echo "" ;else: foreach($link_type as $key=>$v): ?>
												<option value="<?php echo $v['plug_linktype_id']; ?>"><?php echo $v['plug_linktype_name']; ?></option>
											<?php endforeach; endif; else: echo "" ;endif; ?>
										</select>
									</div>
								</div>
								<div class="space-4"></div>
								<?php if(config('lang_switch_on')): ?>
								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 语言： </label>
									<div class="col-sm-10">
										<select name="plug_link_l" id="editplug_link_l"  class="col-sm-4" required>
											<option value="">请选择语言</option>
											<option value="zh-cn">中文</option>
											<option value="en-us">英语</option>
										</select>
									</div>
								</div>
								<div class="space-4"></div>
								<?php endif; ?>

								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 链接名称：  </label>
									<div class="col-sm-10">
										<input type="text" name="plug_link_name" id="editplug_link_name" value="" class="col-xs-10 col-sm-5" required/>
										<span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必须是以字母开头，数字、符号组合</span>
									</div>
								</div>
								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 链接URL：  </label>
									<div class="col-sm-10">
										<input type="url" name="plug_link_url" id="editplug_link_url" value="" class="col-xs-10 col-sm-8" required/>
										<span class="lbl">&nbsp;&nbsp;<span class="red">*</span>必须是以http://开头</span>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 打开方式：  </label>
									<div class="col-sm-10">
										<select name="plug_link_target" id="editplug_link_target" class="col-xs-10 col-sm-5" required>
											<option value="_blank">新标签页打开</option>
											<option value="_self">本窗口打开</option>
										</select>
									</div>
								</div>
								<div class="space-4"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 联系站长：  </label>
									<div class="col-sm-10">
										<input type="text" name="plug_link_qq" id="editplug_link_qq" value="" placeholder="输入QQ或其他联系方式" class="col-xs-10 col-sm-5" />
									</div>
								</div>
								<div class="space-4"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 排序：  </label>
									<div class="col-sm-10">
										<input type="text" name="plug_link_order" id="editplug_link_order" value="" class="col-xs-10 col-sm-3" />
										<span class="lbl">&nbsp;&nbsp;<span class="red">*</span>从小到大排序</span>
									</div>
								</div>
								<div class="space-4"></div>

							</div>
						</div>




					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">
							提交保存
						</button>
						<button type="button" class="btn btn-default"  id="gbb" >
							关闭
						</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</form>
	</div><!-- /.modal -->

			<!-- 右侧下主要内容结束 -->
		</div>
	</div><!-- 主要内容结束 -->
	<!-- 页脚开始 -->
	<div class="footer">
	<div class="footer-inner">
		<div class="footer-content">
			<span class="bigger-120">
				<span class="blue bolder"><a href="http://www.rainfer.cn" target="_ablank">优伯乐CRM后台管理</a></span>
				后台管理系统 &copy; 2015-<?php echo date('Y'); ?>
			</span>
		</div>
	</div>
</div>

	<!-- 页脚结束 -->
	<!-- 返回顶端开始 -->
	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
	<!-- 返回顶端结束 -->
</div><!-- 整个页面内结束 -->

<!-- ace的js,可以通过打包生成,避免引入文件数多 -->
<script src="/public/ace/js/ace.js"></script>
<script src="/public/ace/js/ace.min.js"></script>
<!-- jquery.form、layer、yfcmf的js -->
<script src="/public/others/jquery.form.js"></script>
<script src="/public/others/maxlength.js"></script>
<script src="/public/layer/layer_zh-cn.js"></script>
<script src="/public/datePicker/bootstrap-datepicker.js"></script>
<script src="/public/datetimepicker/bootstrap-datetimepicker.js"></script>
<script src="/public/datetimepicker/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<script src="/public/yfcmf/yfcmf.js?<?php echo time(); ?>"></script>
<!-- 此页相关插件js -->

<!-- 与此页相关的js -->
</body>
</html>
