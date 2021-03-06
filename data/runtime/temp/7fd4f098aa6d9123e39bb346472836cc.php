<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\phpstudy\WWW\ublcrm_zmyz/app/home/view/default/\index.html";i:1587367159;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Uber会员信息录入</title>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   <link href="/app/home/view/default/public/css/style1.css" rel='stylesheet' type='text/css' media="all">
   <link rel="stylesheet" href="/app/home/view/default/public/css/jquery-ui.css" />
</head>
<body>
<h1 class="header-w3ls">Uber enter</h1>
<div class="appointment-w3">
   <form class=" form-horizontal ajaxForm2" name="form0" action="<?php echo url('home/Index/runshow'); ?>" method="post">
      <div class="personal">
         <h2>机构分析</h2>
         <div class="form-add-w3ls">
            <p>机构名称</p>
            <input type="text" required name="company_name" placeholder="机构名称" >
         </div>
         <div class="form-left-w3l">
            <p>姓名</p>
            <input type="text" required name="principal_name" placeholder="姓名" >
         </div>
         <div class="form-right-w3ls">
            <p>性别</p>
            <select class="form-control buttom" name="sex" required style="height: 3.1rem">
               <option value="">-- 请选择 --</option>
               <option value="1">男</option>
               <option value="0">女</option>
            </select>
         </div>
         <div class="form-left-w3l">
            <p>身份证号</p>
            <input type="text" required  name="id_card" placeholder="请输入18位身份证号码" >
         </div>
         <div class="form-right-w3ls">
            <p>生日</p>
            <input name="birth" type="date" placeholder="yyyy/mm/dd" required="" style="height: 1.63rem">
         </div>
         <div class="form-left-w3l ">
            <p>联系方式</p>
            <input class="buttom" type="text" required name="principal_tel" placeholder="11位电话号" >
         </div>
         <div class="form-right-w3ls ">
            <p>用户邮箱</p>
            <input class="buttom" type="text" required name="email" placeholder="用户邮箱" >
         </div>
         <div class="form-left-w3l">
            <p>详细地址</p>
            <input type="text" required  name="address" placeholder="详细地址" >
         </div>
         <div class="form-right-w3ls">
            <p>成立时间</p>
            <input name="establishment_time" type="date" placeholder="yyyy/mm/dd" required="" style="height: 1.63rem">
         </div>
         <div class="form-left-w3l">
            <p>宗教信仰</p>
            <input type="text" required  name="religious_belief" placeholder="宗教信仰" >
         </div>
         <div class="form-right-w3ls ">
            <p>政治面貌</p>
            <input class="buttom" type="text" required name="political_affiliation" placeholder="政治面貌" >
         </div>
         <div class="form-left-w3l">
            <p>个人履历</p>
            <input type="text" required  name="personal_resume" placeholder="个人履历" >
         </div>
         <div class="form-right-w3ls ">
            <p>近三年营业收入</p>
            <input class="buttom" type="text" required name="income" placeholder="近三年营业收入" >
         </div>
         <div class="form-left-w3l">
            <p>净利润</p>
            <input type="text" required  name="net_profit" placeholder="净利润" >
         </div>
         <div class="form-right-w3ls ">
            <p>股东构成</p>
            <input class="buttom" type="text" required name="shareholder_composition" placeholder="股东构成" >
         </div>
         <div class="form-left-w3l">
            <p>融资经历</p>
            <input type="text" required  name="financing_experience" placeholder="融资经历" >
         </div>
         <div class="form-right-w3ls ">
            <p>参加过那些学习</p>
            <input class="buttom" type="text" required name="study" placeholder="参加过那些学习" >
         </div>
         <div class="form-left-w3l">
            <p>主营产品+加盟品牌</p>
            <input type="text" required  name="main_products" placeholder="主营产品+加盟品牌" >
         </div>
         <div class="form-right-w3ls">
            <p>老师性质</p>
            <select class="form-control buttom" name="teacher_nature" required style="height: 3.1rem">
               <option value="">-- 请选择 --</option>
               <option value="1">兼职</option>
               <option value="0">全职</option>
            </select>
         </div>
         <div class="form-left-w3l">
            <p>目前学生数量</p>
            <input type="text" required  name="number_of_students" placeholder="目前学生数量" >
         </div>
         <div class="form-right-w3ls ">
            <p>之前做过什么营销活动</p>
            <input class="buttom" type="text" required name="previous_marketing_activities" placeholder="之前做过什么营销活动" >
         </div>
         <div class="clear"></div>
      </div>
      <div class="information">
         <h3>客户分析</h3>
         <div class="form-add-w3ls">
            <p>主要消费人群年龄段</p>
            <input type="text" required name="consumer_group" placeholder="主要消费人群年龄段" >
         </div>
         <div class="form-left-w3l">
            <p>学生年龄段</p>
            <input type="text" required name="student_age" placeholder="学生年龄段" >
         </div>
         <div class="form-right-w3ls ">
            <p>转介绍率</p>
            <input type="text" required name="referral_rate" placeholder="转介绍率" >
         </div>
         <div class="clear"></div>
      </div>
      <div class="information">
         <h3>地理位置分析</h3>
         <div class="form-add-w3ls">
            <p>所在商圈属性</p>
            <input type="text" required name="property" placeholder="所在商圈属性" >
         </div>
         <div class="form-left-w3l">
            <p>门面位置</p>
            <input type="text" required name="door_position" placeholder="门面位置" >
         </div>
         <div class="form-right-w3ls ">
            <p>门店面积</p>
            <input type="text" required name="store_area" placeholder="门店面积" >
         </div>
         <div class="clear"></div>
      </div>
      <div class="personal" style="margin: .5em 0;">
         <h2>产品分析</h2>
         <div class="form-left-w3l">
            <p>截流产品</p>
            <input type="text" required name="closure_products" placeholder="截流产品" >
         </div>
         <div class="form-right-w3ls ">
            <p>粘性产品</p>
            <input type="text" required name="viscous_products" placeholder="粘性产品"  >
            <div class="clear"></div>
         </div>
         <div class="form-left-w3l">
            <p>利润产品</p>
            <input type="text" required  name="profit_products" placeholder="利润产品" >
         </div>
         <div class="form-right-w3ls ">
            <p>延伸产品</p>
            <input class="buttom" type="text" required name="extended_products" placeholder="延伸产品" >
         </div>
         <div class="clear"></div>
      </div>
      <div class="personal" style="margin: .5em 0;">
         <h2>数据分析</h2>
         <div class="form-left-w3l">
            <p>客单价</p>
            <input type="text" required name="customer_price" placeholder="客单价" >
         </div>
         <div class="form-right-w3ls ">
            <p>毛利率</p>
            <input type="text" required name="gross_profit_margin" placeholder="毛利率"  >
            <div class="clear"></div>
         </div>
         <div class="form-left-w3l">
            <p>最大消费</p>
            <input type="text" required  name="maximum_consumption" placeholder="最大消费" >
         </div>
         <div class="form-right-w3ls ">
            <p>最低消费</p>
            <input class="buttom" type="text" required name="minimum_consumption" placeholder="最低消费" >
         </div>
         <div class="clear"></div>
      </div>
      <div class="personal" style="margin: .5em 0;">
         <h2>资源分析</h2>
         <div class="form-left-w3l">
            <p>商协会资源</p>
            <input type="text" required name="business_association_resources" placeholder="商协会资源" >
         </div>
         <div class="form-right-w3ls ">
            <p>经销商资源</p>
            <input type="text" required name="dealer_resources" placeholder="经销商资源"  >
            <div class="clear"></div>
         </div>
         <div class="form-left-w3l">
            <p>异业资源</p>
            <input type="text" required  name="different_industry_resources" placeholder="异业资源" >
         </div>
         <div class="form-right-w3ls ">
            <p>员工资源</p>
            <input class="buttom" type="text" required name="employee_resources" placeholder="员工资源" >
         </div>
         <div class="form-left-w3l">
            <p>其他资源</p>
            <input type="text" required  name="other_resources" placeholder="其他资源" >
         </div>
         <div class="form-right-w3ls ">
            <p>客户来源</p>
            <input class="buttom" type="text" required name="customer_source" placeholder="客户来源" >
         </div>
         <div class="clear"></div>
      </div>
      <div class="personal" style="margin: .5em 0;">
         <h2>需求分析</h2>
         <div class="form-add-w3ls">
            <p>疫情时期的业务规划</p>
            <input type="text" required  name="plan" placeholder="疫情时期的业务规划" >
         </div>
         <div class="form-left-w3l">
            <p>当下校区关注问题</p>
            <input type="text" required name="current_campus_concerns" placeholder="当下校区关注问题" >
         </div>
         <div class="form-right-w3ls ">
            <p>曾经的那些解决方案</p>
            <input type="text" required name="solutions" placeholder="曾经的那些解决方案"  >
            <div class="clear"></div>
         </div>
         <div class="form-left-w3l">
            <p>效果如何</p>
            <input type="text" required  name="how_effective" placeholder="效果如何" >
         </div>
         <div class="form-right-w3ls ">
            <p>为什么选择优伯乐</p>
            <input class="buttom" type="text" required name="choose_uber" placeholder="为什么选择优伯乐" >
         </div>
         <div class="form-left-w3l">
            <p>对优伯乐有那些期待</p>
            <input type="text" required  name="expectations_for_uber" placeholder="对优伯乐有那些期待" >
         </div>
         <div class="form-right-w3ls ">
            <p>有那些建议</p>
            <input class="buttom" type="text" required name="suggestions" placeholder="有那些建议" >
         </div>
         <div class="clear"></div>
      </div>
      <input type="hidden" name="basic_id" value="<?php echo $id; ?>">
      <input type="submit" value="提交">
   </form>
</div>

<div class="copy">
   <p>&copy;2020 Membership application form </p>
</div>
<script type='text/javascript' src='/app/home/view/default/public/js/jquery-2.2.3.min.js'></script>
<link rel="stylesheet" href="/app/home/view/default/public/css/jquery-ui.css" />
<script src="/app/home/view/default/public/js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
    });
</script>
</body>
</html>