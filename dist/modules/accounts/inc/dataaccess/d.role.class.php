<?php
require_once(ROOT . 'inc/core/d.object.class.php');
require_once(ROOT . 'inc/modules/accounts/dataaccess/d.accounts.inc.php');

/**
 * 账户系统系统数据层角色类。
 */
class DRole extends DObject implements IDRole {
    private $db = null; 
    private $sql_init = null; 
    private $table = null; 
    
    /**
     * 构造函数。
     */
    function  __construct(){
        //parent::__construct();
        $this->table = 'accounts_core_roles'; 
        $this->sql_init = implode('/', array(ROOT, 'inc', 'modules', 'accounts', 'sql', 'sqlite', 'accounts.core')); 
    }
    
    /**
     * 构造函数。
     */
    function DRole(){
        $this->__construct();
    }
    
    /*- IDRole 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/
        
    /**
     * 获取角色的列表。
     * @param $categoryId {Int} 角色分类ID。
     * @return Array 角色的列表。
     */
    public function getList($categoryId){
        $this->initialise();
        $conditions = '';//category_id = ' . $categoryId;
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'id' => 'role_id',
                'code' => 'role_code',
                'name' => 'role_name',
                'description' => 'role_description'
                ),
            'conditions' => $conditions
        );
        return $this->retrieve($this->db, $settings);
    }
    /*- IDRole 接口实现 END -*/
    
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
    /*- 私有方法 END -*/
}
?>
