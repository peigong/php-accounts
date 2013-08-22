<?php
/**
 * 广告前端系统统一DEMO项目
 * 当前版本：@MASTERVERSION@
 * 构建时间：@BUILDDATE@
 * @COPYRIGHT@
 */
require_once(dirname(__FILE__) . "/../../config.inc.php");
require_once(ModelEngineRoot . 'inc/modelengine.inc.php');

$type = $code = '';
$ext = array();
foreach($_GET as $key=>$value){
    if('t' == $key){
        $type = $value;
    }elseif('code' == $key){
        $code = $value;
    }else{
        $ext[$key] = $value;
    }
}
$entities = array();
$managers = array(
        'user' => 'accounts.business.user',
        'user_role' => 'accounts.business.userrole',
        'role' => 'accounts.business.role',
        'permission' => 'accounts.business.permission',
        'role_permission' => 'accounts.business.rolepermission'
    );
if((strlen($type) > 0) && array_key_exists($type, $managers)){
    //实现了模型和表单引擎系统的IModelListFetch接口的类
    $manager = $context->getBean($managers[$type]);
    $entities = $manager->fetchModelList($code, $ext);
}
echo json_encode($entities);
?>
