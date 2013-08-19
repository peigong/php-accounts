<?php
require_once(ROOT . 'inc/core/ioc/applicationcontext.inc.php');
require_once(ROOT . 'model-engine/inc/modules/modelengine.inc.php');

/**
 * 遵循RBAC96标准，实现RBAC0层次的基本模型。
 * http://www.ibm.com/developerworks/cn/java/j-lo-rbacwebsecurity/
 */

/**
 * 模型枚举。
 */
define('MODEL_TYPE_USER', 'user');
define('MODEL_TYPE_ROLE', 'role');
define('MODEL_TYPE_PERMISSION', 'permission');

/**
 * 外部账户映射类型。
 */
/*- COOKIE -*/
define('MAPPING_TYPE_COOKIE', 'cookie');
/*- IP地址 -*/
define('MAPPING_TYPE_IP', 'ip');
/*- IMEI(International Mobile Equipment Identity) -*/
define('MAPPING_TYPE_IMEI', 'imei');

/**
 * 角色枚举。
 */
/*- 系统管理员 -*/
define('ROLE_ADMINISTRATOR', 'administrator');
/*- 账户系统管理员 -*/
define('ROLE_ACC_MANAGER', 'acc_manager');
/*- 广告调度系统管理员 -*/
define('ROLE_ADE_MANAGER', 'ade_manager');
/*- 开发者 -*/
define('ROLE_DEVELOPER', 'developer');
/*- 测试者 -*/
define('ROLE_TESTER', 'tester');
/*- 干系人 -*/
define('ROLE_STAKEHOLDER', 'stakeholder');

/**
 * 许可枚举。
 */
/*- 进入工作区的权限 -*/
define('PERMISSION_WORKBENCH_ENTER', 'workbench_enter');
/*- 设计模型和模型表单的权限 -*/
define('PERMISSION_MODEL_DESIGN', 'model_design');
/*- 角色、许可的定义权限 -*/
define('PERMISSION_RBAC_DEFINE', 'rbac_define');
/*- 系统账户的管理权限 -*/
define('PERMISSION_USER_MANAGE', 'user_manage');
/*- 管理广告位的权限 -*/
define('PERMISSION_SLOT_MANAGE', 'slot_manage');
/*- 查询SOS团队SVN报告的权限 -*/
define('PERMISSION_SVN_REPORT_READ', 'svn_report_read');
/*- 下载公开资源的权限 -*/
define('PERMISSION_DOWNLOAD', 'download');

/**
* 删除关联关系的接口。
*/
interface IRelationshipRemove{
	/**
	* 删除关联关系。
	* @param $master {String} 关联关系的主ID。
	* @param $slave {String} 关联关系的从ID。
    * @param $type {String} 关联关系的类型。
	*/
	function removeRelationship($master, $slave, $type = '');
}
?>
