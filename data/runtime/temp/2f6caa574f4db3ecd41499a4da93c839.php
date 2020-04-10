<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:70:"D:\phpstudy\WWW\ublcrm_zmyz/app/admin\view\basic_information\show.html";i:1586502341;s:59:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\base.html";i:1586240272;s:61:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\header.html";i:1586341030;s:63:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\left_nav.html";i:1586341030;s:63:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\head_nav.html";i:1586250143;s:61:"D:\phpstudy\WWW\ublcrm_zmyz\app\admin\view\public\footer.html";i:1586250143;}*/ ?>
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
	<!--主题-->
	<div class="page-header">
		<h1>
			您当前操作
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				查看详情
			</small>
		</h1>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<form class="form-horizontal adminform" name="admin_list_add" method="post" action="<?php echo url('admin/BasicInformation/runshow'); ?>">
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 机构名称：  </label>
					<div class="col-sm-10">
						<input type="text" name="company_name"  value="<?php echo $res['company_name']; ?>"  class="col-xs-10 col-sm-5"/>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 姓名：  </label>
					<div class="col-sm-10">
						<input type="text" name="principal_name" value="<?php echo $res['principal_name']; ?>"  class="col-xs-10 col-sm-5"/>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 身份证号：  </label>
					<div class="col-sm-10">
						<input type="number" name="id_card" value="<?php echo $res['id_card']; ?>"  class="col-xs-10 col-sm-5"/>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 联系方式：  </label>
					<div class="col-sm-10">
						<input type="number" name="principal_tel" id="admin_tel"  value="<?php echo $res['principal_tel']; ?>"  class="col-xs-10 col-sm-5"/>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 生日：  </label>
					<div class="col-sm-10">
						<input type="text" name="birth"  value="<?php echo $res['birth']; ?>"  class="col-xs-10 col-sm-5"/>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 用户邮箱：  </label>
					<div class="col-sm-10">
						<input type="email" name="email" value="<?php echo $res['email']; ?>" class="col-xs-10 col-sm-5" required/>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 详细地址：  </label>
					<div class="col-sm-10">
						<input type="text" name="address"  value="<?php echo $res['address']; ?>"  class="col-xs-10 col-sm-5"/>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 成立时间：  </label>
					<div class="col-sm-10">
						<input type="date" name="establishment_time"  value="<?php echo $res['establishment_time']; ?>"  class="col-xs-10 col-sm-5"/>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 宗教信仰：  </label>
					<div class="col-sm-10">
						<input type="text" name="religious_belief"  value="<?php echo $res['religious_belief']; ?>"  class="col-xs-10 col-sm-5"/>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 政治面貌：  </label>
					<div class="col-sm-10">
						<input type="text" name="political_affiliation"  value="<?php echo $res['political_affiliation']; ?>"  class="col-xs-10 col-sm-5"/>
					</div>
				</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 个人履历：  </label>
				<div class="col-sm-10">
					<input type="text" name="personal_resume" value="<?php echo $res['personal_resume']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 近三年营业收入：  </label>
					<div class="col-sm-10">
						<input type="text" name="income" value="<?php echo $res['income']; ?>"  class="col-xs-10 col-sm-5"/>
						<span class="lbl col-xs-12 col-sm-7"><span class="red">*</span>输入时尽量用 ',' 分割</span>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 净利润：  </label>
					<div class="col-sm-10">
						<input type="text" name="net_profit"  value="<?php echo $res['net_profit']; ?>"  class="col-xs-10 col-sm-5"/>
					</div>
				</div>
				<div class="space-4"></div>
				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 股东构成：  </label>
					<div class="col-sm-10">
						<input type="text" name="shareholder_composition"  value="<?php echo $res['shareholder_composition']; ?>"  class="col-xs-10 col-sm-5"/>
					</div>
				</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 融资经历：  </label>
				<div class="col-sm-10">
					<input type="text" name="financing_experience"  value="<?php echo $res['financing_experience']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 参加过那些学习：  </label>
				<div class="col-sm-10">
					<input type="text" name="study"  value="<?php echo $res['study']; ?>"  class="col-xs-10 col-sm-5"/>
					<span class="lbl col-xs-12 col-sm-7"><span class="red">*</span>输入时尽量用 ',' 分割</span>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 主营产品+加盟品牌：  </label>
				<div class="col-sm-10">
					<input type="text" name="main_products"  value="<?php echo $res['main_products']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right"  for="form-field-1"> 老师性质：  </label>
				<div class="col-sm-10">
					<input type="text" name="teacher_nature"  value="<?php echo $res['teacher_nature']; ?>"  class="col-xs-10 col-sm-5"/>
					<span class="lbl col-xs-12 col-sm-7"><span class="red">*</span>兼职 / 全职</span>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 目前学生数量：  </label>
				<div class="col-sm-10">
					<input type="text" name="number_of_students"  value="<?php echo $res['number_of_students']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 之前做过什么营销活动：  </label>
				<div class="col-sm-10">
					<input type="text" name="previous_marketing_activities"  value="<?php echo $res['previous_marketing_activities']; ?>"  class="col-xs-10 col-sm-5"/>
					<span class="lbl col-xs-12 col-sm-7"><span class="red">*</span>输入时尽量用 ',' 分割</span>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 主要消费人群年龄段：  </label>
				<div class="col-sm-10">
					<input type="text" name="consumer_group"  value="<?php echo $res['consumer_group']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 学生年龄段：  </label>
				<div class="col-sm-10">
					<input type="text" name="student_age"  value="<?php echo $res['student_age']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 转介绍率：  </label>
				<div class="col-sm-10">
					<input type="text" name="referral_rate"  value="<?php echo $res['referral_rate']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 所在商圈属性：  </label>
				<div class="col-sm-10">
					<input type="text" name="property"  value="<?php echo $res['property']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 门面位置：  </label>
				<div class="col-sm-10">
					<input type="text" name="door_position"  value="<?php echo $res['door_position']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 门店面积：  </label>
				<div class="col-sm-10">
					<input type="text" name="store_area"  value="<?php echo $res['store_area']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 截流产品：  </label>
				<div class="col-sm-10">
					<input type="text" name="closure_products"  value="<?php echo $res['closure_products']; ?>"  class="col-xs-10 col-sm-5"/>
					<span class="lbl col-xs-12 col-sm-7"><span class="red">*</span>输入时尽量用 ',' 分割</span>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 粘性产品：  </label>
				<div class="col-sm-10">
					<input type="text" name="viscous_products"  value="<?php echo $res['viscous_products']; ?>"  class="col-xs-10 col-sm-5"/>
					<span class="lbl col-xs-12 col-sm-7"><span class="red">*</span>输入时尽量用 ',' 分割</span>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 利润产品：  </label>
				<div class="col-sm-10">
					<input type="text" name="profit_products"  value="<?php echo $res['profit_products']; ?>"  class="col-xs-10 col-sm-5"/>
					<span class="lbl col-xs-12 col-sm-7"><span class="red">*</span>输入时尽量用 ',' 分割</span>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 延伸产品：  </label>
				<div class="col-sm-10">
					<input type="text" name="extended_products"  value="<?php echo $res['extended_products']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 客单价：  </label>
				<div class="col-sm-10">
					<input type="text" name="customer_price"  value="<?php echo $res['customer_price']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 毛利率：  </label>
				<div class="col-sm-10">
					<input type="text" name="gross_profit_margin"  value="<?php echo $res['gross_profit_margin']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 最大消费：  </label>
				<div class="col-sm-10">
					<input type="text" name="maximum_consumption"  value="<?php echo $res['maximum_consumption']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 最低消费：  </label>
				<div class="col-sm-10">
					<input type="text" name="minimum_consumption"  value="<?php echo $res['minimum_consumption']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 客户来源：  </label>
				<div class="col-sm-10">
					<input type="text" name="customer_source"  value="<?php echo $res['customer_source']; ?>"  class="col-xs-10 col-sm-5"/>
					<span class="lbl col-xs-12 col-sm-7"><span class="red">*</span>输入时尽量用 ',' 分割</span>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 商协会资源：  </label>
				<div class="col-sm-10">
					<input type="text" name="business_association_resources"  value="<?php echo $res['business_association_resources']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 经销商资源：  </label>
				<div class="col-sm-10">
					<input type="text" name="dealer_resources"  value="<?php echo $res['dealer_resources']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 异业资源：  </label>
				<div class="col-sm-10">
					<input type="text" name="different_industry_resources"  value="<?php echo $res['different_industry_resources']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 员工资源：  </label>
				<div class="col-sm-10">
					<input type="text" name="employee_resources"  value="<?php echo $res['employee_resources']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 其他资源：  </label>
				<div class="col-sm-10">
					<input type="text" name="other_resources"  value="<?php echo $res['other_resources']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 当下校区关注问题：  </label>
				<div class="col-sm-10">
					<input type="text" name="current_campus_concerns"  value="<?php echo $res['current_campus_concerns']; ?>"  class="col-xs-10 col-sm-5"/>
					<span class="lbl col-xs-12 col-sm-7"><span class="red">*</span>输入时尽量用 ',' 分割</span>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 曾经的那些解决方案：  </label>
				<div class="col-sm-10">
					<input type="text" name="solutions"  value="<?php echo $res['solutions']; ?>"  class="col-xs-10 col-sm-5"/>
					<span class="lbl col-xs-12 col-sm-7"><span class="red">*</span>输入时尽量用 ',' 分割</span>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 效果如何：  </label>
				<div class="col-sm-10">
					<input type="text" name="how_effective"  value="<?php echo $res['how_effective']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 为什么选择优伯乐：  </label>
				<div class="col-sm-10">
					<input type="text" name="choose_uber"  value="<?php echo $res['choose_uber']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 对优伯乐有那些期待：  </label>
				<div class="col-sm-10">
					<input type="text" name="expectations_for_uber"  value="<?php echo $res['expectations_for_uber']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 有那些建议：  </label>
				<div class="col-sm-10">
					<input type="text" name="suggestions"  value="<?php echo $res['suggestions']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div><div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> 疫情时期的业务规划：  </label>
				<div class="col-sm-10">
					<input type="text" name="plan"  value="<?php echo $res['plan']; ?>"  class="col-xs-10 col-sm-5"/>
				</div>
			</div>
				<div class="space-4"></div>
				<input type="hidden" name="basic_id" value="<?php echo $id; ?>">
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn" type="reset">
							<i class="ace-icon fa fa-undo bigger-110"></i>
							重置
						</button>
						&nbsp; &nbsp; &nbsp;
						<button class="btn btn-info" type="submit">
							<i class="ace-icon fa fa-check bigger-110"></i>
							保存
						</button>
					</div>
				</div>
			</form>
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
