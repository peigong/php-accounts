<?php
require_once(AccountsRoot . 'inc/accounts.inc.php');

/**
 * 账户系统业务层标志类的接口。
 */
interface IBMark extends IInjectEnable{
	/**
	* 返回当前用户的ID。
	*/
	function getCurrentUserId();

	/**
	* 设置当前用户的标识。
	* @param $uid {Int} 当前用户的ID。
	*/
	function setCurrentUserId($uid);

	/**
	* 注销当前用户的Cookie标识。
	*/
	function logoutCurrentUser();
}

/**
 * 账户系统业务层用户类的接口。
 */
interface IBUser extends IInjectEnable, IModelListFetch{
	/**
	* 返回当前用户的数据实体。
	*/
	function getCurrentUser();

	/**
	* 创建空的用户对象。
	* @return {Int} 新增的用户ID。
	*/
	function createEmptyUser();

	/**
	* 更新用户数据。
	* @param $id {Int} 用户ID。
	* @param $attr {Array} 用户字段名和值的键值对。
	*/
	function update($id, $attr);

	/**
	* 检查指定的用户名是否已经被占用。
	* @param $name {String} 需要检查的用户名。
	* @return {Boolean} 是否已经被占用。
	*/
	function checkUserName($name);
	
	/**
	* 获取指定用户的角色列表。
	* @param $uid {Int} 用户ID。
	* @return {Array} 角色列表。
	*/
	function getRoles($uid);
	
	/**
	* 获取指定用户的许可列表。
	* @param $uid {Int} 用户ID。
	* @return {Array} 许可列表。
	*/
	function getPermissions($uid);

	/**
	* 验证用户。
	* @param $name {String} 需要验证的用户名。
	* @param $password {String} MD5加密过的需要验证的密码。
	* @return {Boolean} 是否通过验证。
	*/
	function validation($name, $password);

	/**
	* 注销当前用户的Cookie标识。
	*/
	function logout();
}

/**
 * 账户系统业务层账户映射关系的接口。
 */
interface IBUserMapping extends IInjectEnable, IModelListFetch, IRelationshipRemove{

    /**
     * 创建映射。
     * @param $userId {Int} 系统用户ID。
     * @param $mappingId {Int} 外部账号。
     * @param $type {String} 外部账户映射类型。
     * @return 新增数据的主键值。
     */
    function createMapping($userId, $mappingId, $type);
    
    /**
     * 获取用户ID。
     * @param $mappingId {String} 账户映射ID。
     * @return {Int} 用户ID。
     */
    function getUserIdByMappingId($mappingId, $type);
    
    /**
     * 删除用户映射。
     * @param $userId {Int} 系统用户ID。
     * @param $mappingId {Int} 外部账号。
     * @param $type {String} 外部账户映射类型。
     */
    function remove($userId, $mappingId, $type);
}

/**
 * 账户系统业务层用户和角色关联类的接口。
 */
interface IBUserRole extends IInjectEnable, IModelListFetch, IRelationshipRemove{
	/**
	* 为用户分配角色。
	* @param $user {Int} 用户ID。
	* @param $role {Int} 角色ID。
	*/
	function allocate($user, $role);
}

/**
 * 账户系统业务层角色类的接口。
 */
interface IBRole extends IInjectEnable, IModelListFetch{
}

/**
 * 账户系统业务层许可类的接口。
 */
interface IBPermission extends IInjectEnable, IModelListFetch{
}

/**
 * 账户系统业务层角色许可关联类的接口。
 */
interface IBRolePermission extends IInjectEnable, IModelListFetch, IRelationshipRemove{
	/**
	* 为角色分配许可。
	* @param $role {Int} 角色ID。
	* @param $permission {Int} 许可ID。
	*/
	function allocate($role, $permission);
}
?>
