<?php
require_once(dirname(__FILE__) . "/../../config.inc.php");
require_once(AccountsRoot . 'inc/accounts.inc.php');
require_once(ModelEngineRoot . 'inc/modelengine.inc.php');

$type = isset($_POST['type']) ? $_POST['type'] : '';
$master = isset($_POST['master']) ? $_POST['master'] : 0;
$slave = isset($_POST['slave']) ? $_POST['slave'] : 0;

if((strlen($type) > 0) && ($master > 0) && ($slave > 0)){
    $mapping_type = '';
    $managers = array(
        'user_role' => 'accounts.business.userrole',
        'role_permission' => 'accounts.business.rolepermission'
    );
    //实现了删除关联关系的IRelationshipRemove接口的类
    $manager = $context->getBean($managers[$type]);
    $manager->removeRelationship($master, $slave, $mapping_type);
    echo '1';
}else{
    echo '0';
}
?>
