<?php
// +----------------------------------------------------------------------
// | YFCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2015-2016 http://www.rainfer.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: rainfer <81818832@qq.com>
// +----------------------------------------------------------------------
namespace app\home\controller;

use think\Cache;
use think\Db;
use think\captcha\Captcha;

class Index extends Base
{
	public function index()
    {
        $id = request()->param('id');
        $res = DB::name('information_details')->where('basic_id',$id)->find();
        if(!$res){
            $this->assign('id',$id);
            $this->assign('res',$res);
            if($id) {
                return $this->view->fetch(':index');
            } else {
                $this->error('参数不正确',url('home/Index/redirects'));
            }
        } else {
            $this->error('已填写过会员信息',url('home/Index/redirects'));
        }

	}
	public function visit()
    {
		$user=Db::name("member_list")->where(array("member_list_id"=>input('id',0,'intval')))->find();
		if(empty($user)){
			$this->error(lang('member not exist'));
		}
		$this->assign($user);
		return $this->view->fetch('user:index');
	}
	public function verify_msg()
	{
		ob_end_clean();
		$verify = new Captcha (config('verify'));
		return $verify->entry('msg');
	}
	public function lang()
	{
		if (!request()->isAjax()){
			$this->error(lang('submission mode incorrect'));
		}else{
			$lang=input('lang_s');
			switch ($lang) {
				case 'cn':
					cookie('think_var', 'zh-cn');
				break;
				case 'en':
					cookie('think_var', 'en-us');
				break;
				//其它语言
				default:
					cookie('think_var', 'zh-cn');
			}
			Cache::clear();
			$this->success(lang('success'),url('home/Index/index'));
		}
	}
	public function addmsg()
    {
		if (!request()->isAjax()){
			$this->error(lang('submission mode incorrect'));
		}else{
			$verify =new Captcha ();
			if (!$verify->check(input('verify'), 'msg')) {
				$this->error(lang('verifiy incorrect'));
			}
			$data=array(
				'plug_sug_name'=>input('plug_sug_name'),
				'plug_sug_email'=>input('plug_sug_email'),
				'plug_sug_content'=>input('plug_sug_content'),
				'plug_sug_addtime'=>time(),
				'plug_sug_open'=>0,
				'plug_sug_ip'=>request()->ip(),
			);
			$rst=Db::name('plug_sug')->insert($data);
			if($rst!==false){
				$this->success(lang('message success'));
			}else{
				$this->error(lang('message failed'));
			}
		}
	}
    /**
     * 客户填写信息更新
     */
    public function runshow()
    {
        $data = request()->param();
        $res = DB::name('information_details')->insertGetId($data);
        DB::name('basic_information')->where('id',$data['basic_id'])->update(['is_details'=>1]);
        //判断保存状态
        if($res){
            $this->success('提交成功',url('home/Index/redirects'));
        }else{
            $this->error('提交失败',url('home/Index/index',array('id'=>$data['basic_id'])));
        }
    }
    /**
     * 重定向
     */
    public function redirects()
    {
        return $this->view->fetch(':redirects');
    }

}