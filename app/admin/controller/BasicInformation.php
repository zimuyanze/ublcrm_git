<?php
/**
 * (销售)用户基本信息
 * User: 李金鹏
 * Date: 2020/04/07
 * Time: 18:16
 */
namespace app\admin\controller;

use think\Db;
use app\common\model\Addon as AddonModel;
use app\common\model\HookAddon as HookAddonModel;

/**
 * 插件后台管理页面
 */
class BasicInformation extends Base
{
    /**
     * 信息录入
     */
    public function add()
    {
        return $this->fetch();
    }
}
