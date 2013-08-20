<?php
require_once(ROOT . 'inc/core/d.object.class.php');
require_once(ROOT . 'inc/modules/accounts/dataaccess/d.accounts.inc.php');

/**
 * 账户系统系统数据层账户映射关系类。
 */
class DRolePermission extends DObject implements IDRolePermission {
    private $db = null; 
    private $sql_init = null; 
    private $table = null; 
    
    /**
     * 构造函数。
     */
    function  __construct(){
        //parent::__construct();
        $this->table = 'accounts_core_role_permissions'; 
        $this->sql_init = implode('/', array(ROOT, 'inc', 'modules', 'accounts', 'sql', 'sqlite', 'accounts.core')); 
    }
    
    /**
     * 构造函数。
     */
    function DRolePermission(){
        $this->__construct();
    }
    
    /*- IDRolePermission 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/
        
    /**
     * 获取角色许可的列表。
     * @param $roleId {Int} 角色ID。
     * @return Array 角色许可的列表。
     */
    public function getList($roleId){
        $this->initialise();
        $conditions = 'role_id = ' . $roleId;
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'role_permission_id' => 'role_permission_id',
                'role_id' => 'role_id',
                'permission_id' => 'permission_id'
                ),
            'conditions' => $conditions
        );
        return $this->retrieve($this->db, $settings);
    }
    
    /**
    * 为角色分配许可。
    * @param $role {Int} 角色ID。
    * @param $permission {Int} 许可ID。
    */
    public function allocate($role, $permission){
        $result = -1;
        if (!$this->allocate_exists($role, $permission)) {
            $result = $this->allocate_insert($role, $permission);
        }
        return $result;
    }

    /**
    * 删除为角色分配的许可。
    * @param $role {Int} 角色ID。
    * @param $permission {Int} 许可ID。
    */
    public function remove($role, $permission){
        $this->initialise();
        $conditions = "role_id = $role and permission_id = $permission";
        if(strlen($conditions) > 0){
            $settings = array(
                'table' => $this->table, 
                'conditions' => $conditions
            );
            $this->delete($this->db, $settings);
        }
    }
    /*- IDRolePermission 接口实现 END -*/
    
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

    private function allocate_exists($role, $permission){
        $this->initialise();
        $conditions = "role_id = $role and permission_id = $permission";
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'counts' => 'count(0)'
                ),
            'conditions' => $conditions
        );
        return !!$this->getVar($this->db, $settings);
    }

    private function allocate_insert($role, $permission){
        $this->initialise();
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'role_id' => array('value' => $role, 'usequot' => false),
                'permission_id' => array('value' => $permission, 'usequot' => false),
                'update_time' => array('value' => time(), 'usequot' => false),
                'create_time' => array('value' => time(), 'usequot' => false)
                )
        );
        return $this->insert($this->db, $settings);        
    }
    /*- 私有方法 END -*/
}
?>
