<?php
require_once(ROOT . 'inc/core/d.object.class.php');
require_once(ROOT . 'inc/modules/accounts/dataaccess/d.accounts.inc.php');

/**
 * 账户系统系统数据层许可类。
 */
class DPermission extends DObject implements IDPermission {
    private $db = null; 
    private $sql_init = null; 
    private $table = null; 
    
    /**
     * 构造函数。
     */
    function  __construct(){
        //parent::__construct();
        $this->table = 'accounts_core_permissions'; 
        $this->sql_init = implode('/', array(ROOT, 'inc', 'modules', 'accounts', 'sql', 'sqlite', 'accounts.core')); 
    }
    
    /**
     * 构造函数。
     */
    function DPermission(){
        $this->__construct();
    }
    
    /*- IDPermission 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/
        
    /**
     * 获取许可的列表。
     * @param $categoryId {Int} 许可分类ID。
     * @return Array 许可的列表。
     */
    public function getList($categoryId){
        $this->initialise();
        $conditions = '';//category_id = ' . $categoryId;
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'id' => 'permission_id',
                'code' => 'permission_code',
                'name' => 'permission_name',
                'description' => 'permission_description'
                ),
            'conditions' => $conditions
        );
        return $this->retrieve($this->db, $settings);
    }
    /*- IDPermission 接口实现 END -*/
    
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
