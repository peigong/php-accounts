<?php
/**
 * 广告前端系统统一DEMO项目
 * 当前版本：@MASTERVERSION@
 * 构建时间：@BUILDDATE@
 * @COPYRIGHT@
 */
require_once(dirname(__FILE__) . "/../../config.inc.php");

$user = isset($_POST["user"]) ? $_POST["user"] : 0;
$role = isset($_POST["role"]) ? $_POST["role"] : 0;

$manager = $context->getBean('accounts.business.userrole');
if (($user > 0) && ($role > 0)) {
    $manager->allocate($user, $role);
    echo "1";
}else{
    echo "0";
}
?>
