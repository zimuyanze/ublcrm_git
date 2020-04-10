<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:71:"D:\phpstudy\WWW\ublcrm_zmyz/app/admin\view\basic_information\index.html";i:1586505300;s:59:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\base.html";i:1586240272;s:61:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\header.html";i:1586341030;s:63:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\left_nav.html";i:1586341030;s:63:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\head_nav.html";i:1586250143;s:61:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\footer.html";i:1586250143;}*/ ?>
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
            <a href="<?php echo url('admin/BasicInformation/add'); ?>">
                <button class="btn btn-sm btn-danger">
                    <i class="ace-icon fa fa-bolt bigger-110"></i>
                    添加用户信息
                </button>
            </a>
        </div>
        <div class="col-xs-10 col-sm-5 margintop5">
            <form name="admin_list_sea" class="form-search" method="post" action="<?php echo url('admin/BasicInformation/index'); ?>">
                <div class="col-xs-12 col-sm-4  margintop5">
                    <select name="opentype_check" class="ajax_change" style="height: 34px">
                        <option value="">按成交状态</option>
                        <option value="1" <?php if($opentype_check == '1'): ?>selected="selected"<?php endif; ?>>已成交</option>
                        <option value="0" <?php if($opentype_check == '0'): ?>selected="selected"<?php endif; ?> >未成交</option>
                    </select>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="ace-icon fa fa-check"></i>
                    </span>
                    <input type="text" name="search_name" class="form-control" value="<?php echo $search_name; ?>" placeholder="输入需查询的信息" />
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-purple btn-sm">
                            <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                            搜索
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <div class="col-xs-4 col-sm-5 margintop5">
            <div class="input-group-btn">
                <a href="<?php echo url('admin/BasicInformation/index'); ?>">
                    <button type="button" class="btn btn-sm  btn-purple">
                        <span class="ace-icon fa fa-globe icon-on-right bigger-110"></span>
                        显示全部
                    </button>
                </a>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-xs-12">
            <div>
                <form id="leftnav" name="leftnav" method="post" action="" >
                    <input type="hidden" name="checkk" id="checkk" value="1" /><!--用于判断操作类型-->
                    <table class="table table-striped table-bordered table-hover" id="dynamic-table">
                        <colgroup>
                            <col style="width: 15%;">
                            <col style="width: 10%;">
                            <col style="width: 10%;">
                            <col style="width: 15%;">
                            <col style="width: 30%;">
                            <col style="width: 10%;">
                            <col style="width: 10%;">
                        </colgroup>
                        <thead>
                        <tr>
                            <th class="hidden-sm hidden-xs">编号</th>
                            <th class="hidden-sm hidden-xs">机构名称</th>
                            <th class="hidden-sm hidden-xs">校长姓名</th>
                            <th class="hidden-sm hidden-xs">联系方式</th>
                            <th class="hidden-sm hidden-xs">机构详细地址</th>
                            <th class="hidden-sm hidden-xs">是否成交</th>
                            <th class="hidden-sm hidden-xs" style="border-right:#CCC solid 1px;">操作</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$v): ?>
                        <tr>
                            <td><?php echo $v['number']; ?></td>
                            <td><?php echo $v['company_name']; ?></td>
                            <td><?php echo $v['principal_name']; ?></td>
                            <td><?php echo $v['principal_tel']; ?></td>
                            <td><?php echo subtext($v['company_address'] , 30); ?></td>
                            <td>
                                <?php if($v['is_deal'] == 1): ?>
                                <span style="color: green">已成交</span>
                                <?php else: ?>
                                <span style="color: red">未成交</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a class="green" href="<?php echo url('admin/BasicInformation/',array('id'=>$v['id'])); ?>" title="转案">
                                        <i class="ace-icon fa fa-share bigger-130"></i>
                                    </a>
                                    <?php if(($v['is_details'])==1): if(($group_id == 4 || 1)): ?>
                                    <a class="orange" href="<?php echo url('admin/BasicInformation/show',array('id'=>$v['id'])); ?>" title="查看">
                                        <i class="ace-icon fa fa-eye bigger-130"></i>
                                    </a>
                                    <a class="yellow confirm-rst-url-btn" href=" javascript:;" title="推送"  data-info="<?php echo $domain; ?><?php echo url('home/Index/index',array('id'=>$v['id'])); ?>">
                                        <i class="ace-icon fa fa-cloud-download bigger-130"></i>
                                    </a>
                                    <?php endif; else: ?>
                                    <a class="yellow confirm-rst-url-btn" href=" javascript:;" title="推送"  data-info="<?php echo $domain; ?><?php echo url('home/Index/index',array('id'=>$v['id'])); ?>">
                                        <i class="ace-icon fa fa-cloud-download bigger-130"></i>
                                    </a>
                                    <?php endif; ?>
                                    <a class="blue" href="<?php echo url('admin/BasicInformation/edit',array('id'=>$v['id'])); ?>" title="修改">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>
                                    <?php if(($group_id == 4 || 1)): ?>
                                    <a class="red confirm-rst-url-btn" data-info="你确定要删除吗？" href="<?php echo url('admin/BasicInformation/del',array('id'=>$v['id'])); ?>" title="删除">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <tr>
                            <td height="50" colspan="10" align="left"><?php echo $page; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

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
