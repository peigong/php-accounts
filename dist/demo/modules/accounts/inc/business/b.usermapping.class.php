<?php
require_once(ROOT . 'inc/core/b.object.class.php');
require_once(AccountsRoot . 'inc/business/b.accounts.inc.php');

/**
 * 账户系统业务层账户映射关系类。
 */
class BUserMapping extends BObject implements IBUserMapping{  
    /*- IBUserMapping 接口实现 START -*/
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
        $userId = -1;
        if (array_key_exists('uid', $ext)) {
            $userId = $ext['uid'];
        }
        $rows = $this->dao->getList($code, $userId);
        foreach ($rows as $idx => $row) {
            $entity = $this->manager->getAttributeValues(MODEL_TYPE_USER, $row['uid'], $attributes);
            $entity['user_id'] = $row['uid'];
            $entity['mapping'] = $row['mapping'];
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
        $type = $type ? $type : MAPPING_TYPE_IP;
        return $this->remove($master, $slave, $type);
    }
    /*- IRelationshipRemove 接口实现 END -*/
 
    /**
     * 创建映射。
     * @param $userId {Int} 系统用户ID。
     * @param $mappingId {Int} 外部账号。
     * @param $type {String} 外部账户映射类型。
     * @return 新增数据的主键值。
     */
    public function createMapping($userId, $mappingId, $type){
        return $this->dao->createMapping($userId, $mappingId, $type);
    }
   
    /**
     * 获取用户ID。
     * @param $mappingId {String} 账户映射ID。
     * @return {Int} 用户ID。
     */
    public function getUserIdByMappingId($mappingId, $type){
        return $this->dao->getUserIdByMappingId($mappingId, $type);
    }

    /**
     * 删除用户映射。
     * @param $userId {Int} 系统用户ID。
     * @param $mappingId {Int} 外部账号。
     * @param $type {String} 外部账户映射类型。
     */
    public function remove($userId, $mappingId, $type){
        return $this->dao->removeMapping($userId, $mappingId, $type);
    }
    /*- IBUserMapping 接口实现 END -*/
    
    /*- 私有方法 START -*/
    /*- 私有方法 END -*/
}
?>
