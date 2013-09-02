<?php
require_once(dirname(__FILE__) . "/../config.inc.php");

$message = '';
$manager = $context->getBean('accounts.business.tool');
$settings = array(
	'sql' => 'sql/sqlite', 
	'db' => 'core/accounts_core.sqlite'
);
$db = AccountsData . $settings['db'];

$axn = isset($_POST['axn']) ? $_POST['axn'] : '';
switch ($axn) {
	case 'import':
		$sql = ROOT . $settings['sql'];
		if (file_exists($sql)) {
			$manager->import('accounts_core', $sql, $db);
			$message .= '成功导入了' . $settings['db'] . '！<br />';
		}else{
			$message .= '源数据文件目录' . $settings['sql'] . '不存在！<br />';
		}
		break;
	case 'backup':
		$time = time();
		if (file_exists($db)) {
			rename($db, $db . ".$time");
			$message .= '成功备份了' . $settings['db'] . '！<br />';
		}else{
			$message .= '数据库' . $settings['db'] . '不存在！<br />';
		}
		break;
	case 'export':
		$tables = isset($_POST['table']) ? $_POST['table'] : array();
		$tables = array_unique($tables);
		$manager->export('accounts_core', $db, $tables);
		$message = '成功导出了数据！';
		break;
}
$tables = array();
if (file_exists($db)) {
	$tables = $manager->getTables($db);
}

$page = $context->getBean('accounts.pages.toolpage');
$type = isset($_GET['type']) ? $_GET['type'] : 'tool';
$page->type = $type;
$page->assign('SQL', $settings);
$page->assign('Tables', $tables);
$page->assign('Message', $message);
$page->render();
?>