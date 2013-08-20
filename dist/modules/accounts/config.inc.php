<?php
/**
 * 系统目录。
 */
$global_config_path = realpath(dirname(__FILE__) . '/../../config.inc.php');
if (file_exists($global_config_path)) {
	require_once($global_config_path);
}
/*- WEB系统根目录 -*/
if (!defined('ROOT')) {
	exit();
}

/*账户系统框架的根目录*/
if (!defined('AccountsRoot')) {
	define('AccountsRoot', str_replace('\\', '/', dirname(__FILE__)) . '/');
}

if (!defined('AccountsData')) {
	define('AccountsData', ROOT . '../../demo.data/');
}
if(!defined('ModelEngineRoot')){
	define('ModelEngineRoot', realpath(AccountsRoot . '/../model-engine') . '/');	
}

if (!isset($context)) {
	require_once(ROOT . "inc/core/ioc/applicationcontextfactory.class.php");
	$applicationContextFactory = ApplicationContextFactory::getIntance();
	$context = $applicationContextFactory->create();
}
$context->setConfigPath(AccountsRoot . 'conf/ioc/root', ROOT);
$context->setConfigPath(AccountsRoot . 'conf/ioc/accounts', AccountsRoot);

if (!isset($httpContext)) {
	require_once(ROOT . "inc/core/httpcontext.class.php");
	$httpContext = new HttpContext($context);
}
?>