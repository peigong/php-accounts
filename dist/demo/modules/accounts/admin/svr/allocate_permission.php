<?php
/**
 * 广告前端系统统一DEMO项目
 * 当前版本：@MASTERVERSION@
 * 构建时间：@BUILDDATE@
 * @COPYRIGHT@
 */
require_once(dirname(__FILE__) . "/../../config.inc.php");

$role = isset($_POST["role"]) ? $_POST["role"] : 0;
$permission = isset($_POST["permission"]) ? $_POST["permission"] : 0;

$manager = $context->getBean('accounts.business.rolepermission');
if (($role > 0) && ($permission > 0)) {
    $manager->allocate($role, $permission);
    echo "1";
}else{
    echo "0";
}
?>
