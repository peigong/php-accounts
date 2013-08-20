<?php
require_once(ROOT . 'inc/core/b.object.class.php');
require_once(AccountsRoot . 'inc/business/b.accounts.inc.php');

/**
 * 账户系统业务层用户类。
 */
class BUser extends BObject implements IBUser{  
    private $manager = null;
    private $mark = null;
    private $userrole = null;
    private $rolepermission = null;
    private $attributes = array();

    /*- IBUser 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/
    
    /*- IModelListFetch 接口实现 START -*/
    /**
     * 获取模型列表。
     * @param $code {String || Int} 用于获取列表的条件编码。
     * @param $ext {Array} 扩展的附加条件字典。
     * @return 模型列表。
     */
    public function fetchModelList($code, $ext){
        $result = array();
        $attributes = $this->manager->getAttributes(MODEL_TYPE_USER);
        $rows = $this->dao->getList();
        foreach ($rows as $idx => $row) {
            $entity = $this->manager->getAttributeValues(MODEL_TYPE_USER, $row['id'], $attributes);
            array_push($result, $entity);
        }
        return $result;
    }
    /*- IModelListFetch 接口实现 END -*/

    /**
    * 返回当前用户的数据实体。
    */
    public function getCurrentUser(){
        $result = array();
        if ($this->mark) {
            $uid = $this->mark->getCurrentUserId();
            if ($uid < 0) {
                //创建匿名用户
                $uid = $this->createEmptyUser();
            }
            if ($uid > 0) {
                $this->mark->setCurrentUserId($uid);
                $attributes = $this->manager->getAttributes(MODEL_TYPE_USER);
                if(count($attributes) > 0){
                    $result = $this->manager->getAttributeValues(MODEL_TYPE_USER, $uid, $attributes);
                    //获取角色列表
                    $result['roles'] = array();
                    $roles = $this->getRoles($uid);
                    foreach ($roles as $idx => $role) {
                        array_push($result['roles'], $role['role_code']);
                    }
                    $result['permissions'] = array();
                    $permissions = $this->getPermissions($uid);
                    foreach ($permissions as $idx => $permission) {
                        array_push($result['permissions'], $permission['permission_code']);
                    }
                }
            }
        }
        return $result;
    }

    /**
    * 创建空的用户对象。
    * @return {Int} 新增的用户ID。
    */
    public function createEmptyUser(){
        $id = -1;
        $attributes = $this->manager->getAttributes(MODEL_TYPE_USER);
        if(count($attributes) > 0){
            $id = $this->manager->create(MODEL_TYPE_USER, $attributes);
        }
        return $id;
    }

    /**
    * 更新用户数据。
    * @param $id {Int} 用户ID。
    * @param $attr {Array} 用户字段名和值的键值对。
    */
    public function update($id, $attr){
        $attributes = $this->manager->getAttributes(MODEL_TYPE_USER);
        if(count($attributes) > 0){
            $update_attr = array();
            foreach($attributes as $attribute){
                $name = $attribute['name'];
                if (array_key_exists($name, $attr)) {
                    $attribute['value'] = $attr[$name];
                    array_push($update_attr, $attribute);
                }
                if($attribute['autoupdate'] || $attribute['primary']){
                    array_push($update_attr, $attribute);
                }
            }
            $this->manager->save(MODEL_TYPE_USER, $id, $update_attr);
        }
    }

    /**
    * 检查指定的用户名是否已经被占用。
    * @param $name {String} 需要检查的用户名。
    * @return {Boolean} 是否已经被占用。
    */
    public function checkUserName($name){
        return $this->dao->checkUserName($name);
    }
    
    /**
    * 获取指定用户的角色列表。
    * @param $uid {Int} 用户ID。
    * @return {Array} 角色列表。
    */
    public function getRoles($uid){
        return $this->userrole->fetchModelList($uid, array());
    }
    
    /**
    * 获取指定用户的许可列表。
    * @param $uid {Int} 用户ID。
    * @return {Array} 许可列表。
    */
    public function getPermissions($uid){
        $result = array();
        $check_list =array();
        $roles = $this->getRoles($uid);
        foreach ($roles as $idx => $role) {
            $permissions = $this->rolepermission->fetchModelList($role['role_id'], array());
            foreach ($permissions as $idx => $permission) {
                $code = $permission['permission_code'];
                if (!in_array($code, $check_list)) {
                    array_push($check_list, $code);
                    array_push($result, $permission);
                }
            }
        }
        return $result;
    }

    /**
    * 验证用户。
    * @param $name {String} 需要验证的用户名。
    * @param $password {String} MD5加密过的需要验证的密码。
    * @return {Boolean} 是否通过验证。
    */
    public function validation($name, $password){
        $result = false;
        $uid = $this->dao->validation($name, $password);
        if ($uid > 0) {
            $this->mark->setCurrentUserId($uid);
            $result = true;
        }
        return $result;
    }

    /**
    * 注销当前用户的Cookie标识。
    */
    public function logout(){
        return $this->mark->logoutCurrentUser();
    }
    /*- IBUser 接口实现 END -*/
    
    /*- 私有方法 START -*/
    /*- 私有方法 END -*/
}
?>
