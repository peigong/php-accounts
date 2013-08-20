<?php
require_once(ROOT . 'inc/core/d.object.class.php');
require_once(AccountsRoot . 'inc/dataaccess/d.accounts.inc.php');

/**
 * 账户系统系统数据层用户和角色关联类。
 */
class DUserRole extends DObject implements IDUserRole {
    private $db = null; 
    private $sql_init = null; 
    private $table = null; 
    
    /**
     * 构造函数。
     */
    function  __construct(){
        //parent::__construct();
        $this->table = 'accounts_core_user_roles'; 
        $this->sql_init = implode('/', array(AccountsRoot, 'sql', 'sqlite', 'accounts.core')); 
    }
    
    /**
     * 构造函数。
     */
    function DUserRole(){
        $this->__construct();
    }
    
    /*- IDUserRole 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/
        
    /**
     * 获取用户和角色关联数据的列表。
     * @param $userId {Int} 用户ID。
     * @return Array 用户和角色关联数据的列表。
     */
    public function getList($userId){
        $this->initialise();
        $conditions = 'user_id = ' . $userId;
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'user_role_id' => 'user_role_id',
                'user_id' => 'user_id',
                'role_id' => 'role_id'
                ),
            'conditions' => $conditions
        );
        return $this->retrieve($this->db, $settings);
    }
    
    /**
    * 为用户分配角色。
    * @param $user {Int} 用户ID。
    * @param $role {Int} 角色ID。
    */
    public function allocate($user, $role){
        $result = -1;
        if (!$this->allocate_exists($user, $role)) {
            $result = $this->allocate_insert($user, $role);
        }
        return $result;
    }

    /**
    * 删除为用户分配的角色。
    * @param $user {Int} 用户ID。
    * @param $role {Int} 角色ID。
    */
    public function remove($user, $role){
        $this->initialise();
        $conditions = "user_id = $user and role_id = $role";
        $settings = array(
            'table' => $this->table, 
            'conditions' => $conditions
        );
        $this->delete($this->db, $settings);
    }
    /*- IDUserRole 接口实现 END -*/
    
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

    private function allocate_exists($user, $role){
        $this->initialise();
        $conditions = "user_id = $user and role_id = $role";
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'counts' => 'count(0)'
                ),
            'conditions' => $conditions
        );
        return !!$this->getVar($this->db, $settings);
    }

    private function allocate_insert($user, $role){
        $this->initialise();
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'user_id' => array('value' => $user, 'usequot' => false),
                'role_id' => array('value' => $role, 'usequot' => false),
                'update_time' => array('value' => time(), 'usequot' => false),
                'create_time' => array('value' => time(), 'usequot' => false)
                )
        );
        return $this->insert($this->db, $settings);        
    }
    /*- 私有方法 END -*/
}
?>
