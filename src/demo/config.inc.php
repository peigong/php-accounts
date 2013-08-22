<?php
/**
 * 系统目录。
 */
/*- WEB系统根目录 -*/
define('ROOT', str_replace('\\', '/', dirname(__FILE__)) . '/');

define('SMARTY_PATH', ROOT . 'libs/Smarty_3_1_8/libs/');
define('SMARTY_TEMPLATES', ROOT . 'templates/');
define('SMARTY_CACHE', ROOT . 'cache/smarty/');

/*- 数据库存储文件目录 -*/
define('ModelEngineRoot', ROOT . 'modules/model-engine/');	
define('ModelEngineData', ROOT . 'data/');
define('AccountsData', ROOT . 'data/');

/*- 打开输出缓冲区 -*/
ob_start();

require_once(ROOT . "inc/core/ioc/applicationcontextfactory.class.php");
$applicationContextFactory = ApplicationContextFactory::getIntance();
$context = $applicationContextFactory->create();
$context->setConfigPath(ModelEngineRoot . 'conf/ioc/root', ROOT);
$context->setConfigPath(ModelEngineRoot . 'conf/ioc/model-engine', ModelEngineRoot);
?>