<?php
require_once(dirname(__FILE__) . "/../config.inc.php");
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
        MODEL_TYPE_MODEL => 'modelengine.business.model',
        MODEL_TYPE_ATTRIBUTE => 'modelengine.business.attribute',
        MODEL_TYPE_MODELFORM => 'modelengine.business.form',
        MODEL_TYPE_SYSTEMLIST => 'modelengine.business.systemlist',
        MODEL_TYPE_CUSTOMLIST => 'modelengine.business.customlist',
        MODEL_TYPE_CUSTOMLISTITEM => 'modelengine.business.customlistitem',
        MODEL_TYPE_VALIDATION => 'modelengine.business.validation',
        'formattribute' => 'modelengine.business.formattribute'
    );
if((strlen($type) > 0) && array_key_exists($type, $managers)){
    //实现了模型和表单引擎系统的IModelListFetch接口的类
    $manager = $context->getBean($managers[$type]);
    $entities = $manager->fetchModelList($code, $ext);
}
echo json_encode($entities);
?>
