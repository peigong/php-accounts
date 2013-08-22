<?php
require_once(AccountsRoot . 'inc/accounts.inc.php');
require_once(ROOT . 'inc/core/security/principal/principal.inc.php');

/*
* 网站项目的上下文用户的标识对象接口。
*/
interface ISiteIdentity extends IInjectEnable, IIdentity{
	/**
	* 返回当前用户的数据实体。
	*/
	function getCurrentUser();
}

/**
* 网站项目的上下文的用户对象接口。
*/
interface ISitePrincipal extends IInjectEnable, IPrincipal{
	/**
	* 确定当前用户是否拥有指定的许可。
	* @param $permission {String} 指定的许可。
	* @return {Boolean} 当前用户是否拥有指定的许可。
	*/
	function hasPermission($permission);
}
?>