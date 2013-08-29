<?php
require_once(dirname(__FILE__) . "/../config.inc.php");

$message = '';
$manager = $context->getBean('accounts.business.tool');
$db_settings = array(
	array(
		'sql' => 'sql/sqlite/accounts_core.sql', 
		'db' => 'core/accounts_core.sqlite'
	)
);

$axn = isset($_POST['axn']) ? $_POST['axn'] : '';
switch ($axn) {
	case 'import':
		foreach ($db_settings as $idx => $settings) {
			$sql = ROOT . $settings['sql'];
			$db = AccountsData . $settings['db'];
			if (file_exists($sql)) {
				$manager->import($sql, $db);
				$message .= $settings['sql'] . '成功导入了' . $settings['db'] . '！<br />';
			}else{
				$message .= '数据文件' . $settings['sql'] . '不存在！<br />';
			}
		}
		break;
	case 'backup':
		$time = time();
		foreach ($db_settings as $idx => $settings) {
			$db = AccountsData . $settings['db'];
			if (file_exists($db)) {
				rename($db, $db . ".$time");
				$message .= '成功备份了' . $settings['db'] . '！<br />';
			}else{
				$message .= '数据库' . $settings['db'] . '不存在！<br />';
			}
		}
		break;
}

$page = $context->getBean('accounts.pages.toolpage');
$type = isset($_GET['type']) ? $_GET['type'] : 'tool';
$page->type = $type;
$page->assign('SQLs', $db_settings);
$page->assign('Message', $message);
$page->render();
?>