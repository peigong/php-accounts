<?php
/**
 * 广告前端系统统一DEMO项目
 * 当前版本：@MASTERVERSION@
 * 构建时间：@BUILDDATE@
 * @COPYRIGHT@
 */
require_once(dirname(__FILE__) . "/../../config.inc.php");
require_once(ModelEngineRoot . 'inc/modelengine.inc.php');

$model = isset($_POST['model']) ? $_POST['model'] : '';
$id = isset($_POST['id']) ? $_POST['id'] : 0;

if((strlen($model) > 0) && ($id > 0)){
    $manager = $context->getBean('modelengine.business.model');
    $result = $manager->remove($model, $id);
    echo '1';
}else{
    echo '0';
}
?>
