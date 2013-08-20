<?php
require_once(ROOT . 'inc/core/d.object.class.php');
require_once(AccountsRoot . 'inc/dataaccess/d.accounts.inc.php');

/**
 * 账户系统系统数据层账户映射关系类。
 */
class DUserMapping extends DObject implements IDUserMapping {
    private $db = null; 
    private $sql_init = null; 
    private $table = null; 
    
    /**
     * 构造函数。
     */
    function  __construct(){
        //parent::__construct();
        $this->table = 'accounts_core_user_mapping'; 
        $this->sql_init = implode('/', array(AccountsRoot, 'sql', 'sqlite', 'accounts.core')); 
    }
    
    /**
     * 构造函数。
     */
    function DUserMapping(){
        $this->__construct();
    }
    
    /*- IDUserMapping 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/
        
    /**
     * 获取用户ID。
     * @param $mappingId {String} 账户映射ID。
     * @return {Int} 用户ID。
     */
    public function getUserIdByMappingId($mappingId, $type){
        $this->initialise();
        $result = -1;
        $conditions = "mapping_type = '$type' and mapping_account_id = '$mappingId'";
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'uid' => 'account_id'
                ),
            'conditions' => $conditions
        );
        $o = $this->getVar($this->db, $settings);
        if($o){
            $result = $o;
        }
        return $result;
    }

    /**
     * 创建映射。
     * @param $userId {Int} 系统用户ID。
     * @param $mappingId {Int} 外部账号。
     * @param $type {String} 外部账户映射类型。
     * @return 新增数据的主键值。
     */
    public function createMapping($userId, $mappingId, $type){
        $result = -1;
        if (!$this->mapping_exists($userId, $mappingId, $type)) {
            $result = $this->mapping_insert($userId, $mappingId, $type);
        }
        return $result;
    }

    /**
     * 获取账户映射关系的列表。
     * @param $type {Int} 账户映射关系的类型。
     * @param $userId {Int} 系统用户ID。
     * @return Array 账户映射关系的列表。
     */
    public function getList($type, $userId = 0){
        $this->initialise();
        $conditions = "mapping_type = '$type'";
        if ($userId > 0) {
            $conditions .= "and account_id = $userId";
        }
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'id' => 'mapping_id',
                'uid' => 'account_id',
                'mapping' => 'mapping_account_id'
                ),
            'conditions' => $conditions
        );
        return $this->retrieve($this->db, $settings);
    }
    
    /**
     * 删除用户映射。
     * @param $userId {Int} 系统用户ID。
     * @param $mappingId {Int} 外部账号。
     * @param $type {String} 外部账户映射类型。
     */
    public function removeMapping($userId, $mappingId, $type){
        $this->initialise();
        $conditions = "account_id = $userId and mapping_account_id = '$mappingId' and mapping_type = '$type'";
        if(strlen($conditions) > 0){
            $settings = array(
                'table' => $this->table,
                'conditions' => $conditions
            );
            $this->delete($this->db, $settings);
        }
    }
    /*- IDUserMapping 接口实现 END -*/
    
    /*- 私有方法 START -*/
    /**
     * 初始化数据库。
     */
    private function initialise(){
        $this->db = $this->getDbByTable($this->table);
        if(!is_file($this->db)){
            $this->initialize($this->db, $this->sql_init);
        }
    }

    private function mapping_exists($userId, $mappingId, $type){
        $this->initialise();
        //and account_id = $userId
        $conditions = "mapping_type = '$type' and mapping_account_id = '$mappingId'";
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'counts' => 'count(0)'
                ),
            'conditions' => $conditions
        );
        return !!$this->getVar($this->db, $settings);
    }

    private function mapping_insert($userId, $mappingId, $type){
        $this->initialise();
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'account_id' => array('value' => $userId, 'usequot' => false),
                'mapping_account_id' => array('value' => $mappingId, 'usequot' => true),
                'mapping_type' => array('value' => $type, 'usequot' => true),
                'update_time' => array('value' => time(), 'usequot' => false),
                'create_time' => array('value' => time(), 'usequot' => false)
                )
        );
        return $this->insert($this->db, $settings);        
    }
    /*- 私有方法 END -*/
}
?>
