<?php
require_once(ROOT . 'inc/core/b.object.class.php');
require_once(ROOT . 'inc/modules/accounts/business/b.accounts.inc.php');

/**
 * 账户系统业务层角色许可关联类。
 */
class BRolePermission extends BObject implements IBRolePermission{  
    /*- IBRolePermission 接口实现 START -*/
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
        $attributes = $this->manager->getAttributes(MODEL_TYPE_PERMISSION);
        $rows = $this->dao->getList($code);
        foreach ($rows as $idx => $row) {
            $entity = $this->manager->getAttributeValues(MODEL_TYPE_PERMISSION, $row['permission_id'], $attributes);
            $entity['role_id'] = $row['role_id'];
            $entity['permission_id'] = $row['permission_id'];
            array_push($result, $entity);
        }
        return $result;
    }
    /*- IModelListFetch 接口实现 END -*/
    
    /*- IRelationshipRemove 接口实现 START -*/
    /**
    * 删除关联关系。
    * @param $master {String} 关联关系的主ID。
    * @param $slave {String} 关联关系的从ID。
    * @param $type {String} 关联关系的类型。
    */
    public function removeRelationship($master, $slave, $type = ''){
        return $this->dao->remove($master, $slave);
    }
    /*- IRelationshipRemove 接口实现 END -*/

    /**
    * 为角色分配许可。
    * @param $role {Int} 角色ID。
    * @param $permission {Int} 许可ID。
    */
    public function allocate($role, $permission){
        return $this->dao->allocate($role, $permission);
    }
    /*- IBRolePermission 接口实现 END -*/
    
    /*- 私有方法 START -*/
    /*- 私有方法 END -*/
}
?>
