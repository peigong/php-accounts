<?php
require_once(dirname(__FILE__) . "/../config.inc.php");

$page_id = "accounts.pages.adminpage";
$page = $context->getBean($page_id);
$type = isset($_GET['type']) ? $_GET['type'] : 'user';
$page->type = $type;
$page->render();
?>