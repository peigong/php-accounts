<?php
require_once(ROOT . 'inc/modules/accounts/accounts.inc.php');

/**
 * 账户系统系统数据层账户映射关系类的接口。
 */
interface IDUserMapping extends IInjectEnable{
    /**
     * 获取用户ID。
     * @param $mappingId {String} 账户映射ID。
     * @return {Int} 用户ID。
     */
    function getUserIdByMappingId($mappingId, $type);

    /**
     * 创建映射。
     * @param $userId {Int} 系统用户ID。
     * @param $mappingId {Int} 外部账号。
     * @param $type {String} 外部账户映射类型。
     * @return 新增数据的主键值。
     */
    function createMapping($userId, $mappingId, $type);

    /**
     * 删除用户映射。
     * @param $userId {Int} 系统用户ID。
     * @param $mappingId {Int} 外部账号。
     * @param $type {String} 外部账户映射类型。
     */
    function removeMapping($userId, $mappingId, $type);

    /**
     * 获取账户映射关系的列表。
     * @param $type {Int} 账户映射关系的类型。
     * @param $userId {Int} 系统用户ID。
     * @return Array 账户映射关系的列表。
     */
    function getList($type, $userId = 0);
}

/**
 * 账户系统数据层用户类的接口。
 */
interface IDUser extends IInjectEnable{
    /**
    * 检查指定的用户名是否已经被占用。
    * @param $name {String} 需要检查的用户名。
    * @return {Boolean} 是否已经被占用。
    */
    function checkUserName($name);

    /**
     * 获取账户的列表。
     * @return Array 账户的列表。
     */
    function getList();

    /**
    * 验证用户。
    * @param $name {String} 需要验证的用户名。
    * @param $password {String} MD5加密过的需要验证的密码。
    * @return {Int} 如果可以通过验证，返回用户ID；如果不能通过验证，返回-1。
    */
    function validation($name, $password);
}

/**
 * 账户系统数据层角色类的接口。
 */
interface IDRole extends IInjectEnable{
    /**
     * 获取角色的列表。
     * @param $categoryId {Int} 角色分类ID。
     * @return Array 角色的列表。
     */
    function getList($categoryId);
}

/**
 * 账户系统数据层用户和角色关联类的接口。
 */
interface IDUserRole extends IInjectEnable{
    /**
     * 获取用户和角色关联数据的列表。
     * @param $userId {Int} 用户ID。
     * @return Array 用户和角色关联数据的列表。
     */
    function getList($userId);

    /**
    * 为用户分配角色。
    * @param $user {Int} 用户ID。
    * @param $role {Int} 角色ID。
    */
    function allocate($user, $role);

    /**
    * 删除为用户分配的角色。
    * @param $user {Int} 用户ID。
    * @param $role {Int} 角色ID。
    */
    function remove($user, $role);
}

/**
 * 账户系统数据层许可类的接口。
 */
interface IDPermission extends IInjectEnable{
    /**
     * 获取许可的列表。
     * @param $categoryId {Int} 许可分类ID。
     * @return Array 许可的列表。
     */
    function getList($categoryId);
}

/**
 * 账户系统数据层角色许可关联类的接口。
 */
interface IDRolePermission extends IInjectEnable{
    /**
     * 获取角色许可的列表。
     * @param $roleId {Int} 角色ID。
     * @return Array 角色许可的列表。
     */
    function getList($roleId);
    
    /**
    * 为角色分配许可。
    * @param $role {Int} 角色ID。
    * @param $permission {Int} 许可ID。
    */
    function allocate($role, $permission);

    /**
    * 删除为角色分配的许可。
    * @param $role {Int} 角色ID。
    * @param $permission {Int} 许可ID。
    */
    function remove($role, $permission);
}
?>
