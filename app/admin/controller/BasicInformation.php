<?php
/**
 * (销售)用户基本信息
 * User: 李金鹏
 * Date: 2020/04/07
 * Time: 18:16
 */
namespace app\admin\controller;

use think\Db;
use think\Session;

/**
 * 插件后台管理页面
 */
class BasicInformation extends Base
{
    /**
     * 基本信息列表(页面)
     */
    public function index()
    {
        $where = [];
        //搜索条件
        $search = request()->param('search_name');
        if($search) {
            $where['principal_name|principal_tel|company_name|number'] = ['like', '%' . $search . '%'];
        }
        //状态
        $opentype_check = input('opentype_check','');
        if($opentype_check !== ''){
            $where['is_deal'] = $opentype_check;
        }

        //获取信息
        $data = DB::name('basic_information')->order('id desc')->where($where)->paginate(10);
        //分页
        $page = $data->render();
        //域名
        $request = request()->instance();
        $domain = $request->domain();
        $this->assign('domain',$domain);
        $this->assign('opentype_check',$opentype_check);
        $this->assign('data',$data);
        $this->assign('page',$page);
        $this->assign('search_name',$search);
        return $this->fetch();
    }
    /**
     * 信息录入(页面)
     */
    public function add()
    {
        return $this->fetch();
    }
    /**
     * 信息录入(入库)
     */
    public function runadd()
    {
        $data = request()->param();
        //生成18位编号ubl+年月日+7位随机数
        $data['number'] = 'UBL'.date('ymdH',time()).mt_rand(1000000, 9999999);
        //录入人id
        $data['admin_id'] = Session::get('admin_auth.aid');
        //执行添加操作
        $res = DB::name('basic_information')->insertGetId($data);
        //判断添加状态
        if($res){
            $this->success('添加成功',url('admin/BasicInformation/add'));
        }else{
            $this->error('添加失败',url('admin/BasicInformation/add'));
        }
    }
    /**
     * 信息修改资料补全(页面)
     */
    public function edit()
    {
        //获取id
        $id = request()->param('id');
        //获取信息
        $data = DB::name('basic_information')->where('id',$id)->find();
        $img = explode(',',$data['pic_all']);
        $img  = array_filter(array_values($img));
        //音频
        $mp3 = explode(',',$data['video']);
        $mp3  = array_filter(array_values($mp3));
        $this->assign('data',$data);
        $this->assign('id',$id);
        $this->assign('img',$img);
        $this->assign('mp3',$mp3);
        return $this->fetch();
    }
    /**
     * 信息修改资料补全(入库)
     */
    public function runedit()
    {
        //获取数据
        $data = request()->param();
        if (!isset($data['is_deal'])) {
            $data['is_deal'] = 0;
        }
        $pic = DB::name('basic_information')->where('id',$data['id'])->find();
        //上传图片部分
        $picall_url='';
        $files = request()->file('pic_all');
        //上传音频
        $video_url = '';
        $video = request()->file('video');
        if($files) {
            $validate = config('upload_validate');
            //多图
            foreach ($files as $file) {
                $info = $file->validate($validate)->rule('uniqid')->move(ROOT_PATH . config('upload_path') . DS . date('Y-m-d'));
                if ($info) {
                    $img_url = config('upload_path'). '/' . date('Y-m-d') . '/' . $info->getFilename();
                    $picall_url = $img_url . ',' . $picall_url;
                } else {
                    //否则就是上传错误，显示错误原因
                    $this->error($file->getError(), url('admin/BasicInformation/edit',array('id'=>$data['id'])));
                }
            }
        }
        //判断是否删除图片
        if(!empty($data['pic_oldlist'])) {
            //删除图片
            if($pic['pic_all']!=$data['pic_oldlist']) {
                //删除并且上传了图片
                if($files) {
                    $data['pic_all'] = $data['pic_oldlist'].$picall_url;
                } else {
                    //删除未上传图片
                    $data['pic_all'] = $data['pic_oldlist'];
                }
            } else {
                //未删除图片并且上传了图片
                if($files) {
                    $data['pic_all'] = $picall_url.$pic['pic_all'];
                }
            }
            unset($data['pic_oldlist']);
        } else {
            //图片全部删空或者第一次上传图片
            if($files) {
                $data['pic_all'] = $picall_url;
            }
            unset($data['pic_oldlist']);
        }
        if($video){
            $validate = config('upload_validate');
            //多音频
            foreach ($video as $file) {
                $info = $file->validate($validate)->rule('uniqid')->move(ROOT_PATH . config('upload_path') . DS . 'video' . '-' . date('Y-m-d'));
                if ($info) {
                    $mp3_url = config('upload_path'). '/' . 'video' . '-' . date('Y-m-d') . '/' . $info->getFilename();
                    $video_url = $mp3_url . ',' . $video_url;
                } else {
                    //否则就是上传错误，显示错误原因
                    $this->error($file->getError(), url('admin/BasicInformation/edit',array('id'=>$data['id'])));
                }
            }
            //删除"/"  ","
            if($pic['video']){
                unlink(ROOT_PATH.substr(substr($pic['video'],1), 0, -1));
            }
            $data['video'] = $video_url;
        }
        //更新信息
        $res = DB::name('basic_information')->where('id',$data['id'])->update($data);
        //判断修改状态
        if($res){
            $this->success('保存成功',url('admin/BasicInformation/edit',array('id'=>$data['id'])));
        }else{
            $this->error('保存失败',url('admin/BasicInformation/edit',array('id'=>$data['id'])));
        }
    }
    /**
     * 信息删除
     */
    public function del()
    {
        $id = request()->param('id');
        $data = DB::name('basic_information')->where('id',$id)->find();
        if($data['video']){
            unlink(ROOT_PATH.substr(substr($data['video'],1), 0, -1));
        }
        $res = DB::name('basic_information')->delete(['id'=>$id]);
        if($res){
            $this->success('删除成功',url('admin/BasicInformation/index'));
        }else{
            $this->error('删除失败',url('admin/BasicInformation/index'));
        }
    }
    /**
     * 客户填写信息详情
     */
    public function show()
    {
        $id = request()->param('id');
        $res = DB::name('information_details')->where('basic_id',$id)->find();
        $this->assign('id',$id);
        $this->assign('res',$res);
        return $this->fetch();
    }
    /**
     * 客户填写信息更新
     */
    public function runshow()
    {
        $data = request()->param();
        $res = DB::name('information_details')->where('basic_id',$data['basic_id'])->update($data);
        //判断保存状态
        if($res){
            $this->success('保存成功',url('admin/BasicInformation/show',array('id'=>$data['basic_id'])));
        }else{
            $this->error('保存失败',url('admin/BasicInformation/show',array('id'=>$data['basic_id'])));
        }
    }
}
