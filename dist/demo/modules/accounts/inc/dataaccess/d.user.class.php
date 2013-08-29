<?php
require_once(ROOT . 'inc/core/d.object.class.php');
require_once(AccountsRoot . 'inc/dataaccess/d.accounts.inc.php');

/**
 * 账户系统系统数据层用户类。
 */
class DUser extends DObject implements IDUser {
    private $db = null; 
    private $sql_init = null; 
    private $table = null; 
    
    /**
     * 构造函数。
     */
    function  __construct(){
        //parent::__construct();
        $this->table = 'accounts_core_users'; 
        $this->sql_init = implode('/', array(AccountsRoot, 'sql', 'sqlite', 'accounts.core')); 
    }
    
    /**
     * 构造函数。
     */
    function DUser(){
        $this->__construct();
    }
    
    /*- IDUser 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/
        
    /**
    * 检查指定的用户名是否已经被占用。
    * @return $name {String} 需要检查的用户名。
    * @return {Boolean} 是否已经被占用。
    */
    public function checkUserName($name){
        $this->initialise();
        $conditions = "user_name = '$name'";
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'counts' => 'count(0)'
                ),
            'conditions' => $conditions
        );
        return !!$this->getVar($this->db, $settings);        
    }

    /**
     * 获取账户的列表。
     * @return Array 账户的列表。
     */
    public function getList(){
        $this->initialise();
        // 放宽授权时的密码限制
        // and user_password != \'\'
        $conditions = 'user_name != \'\'';
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'id' => 'user_id',
                'name' => 'user_name'
                ),
            'conditions' => $conditions,
            'order' => 'user_id desc'
        );
        return $this->retrieve($this->db, $settings);
    }

    /**
    * 验证用户。
    * @param $name {String} 需要验证的用户名。
    * @param $password {String} MD5加密过的需要验证的密码。
    * @return {Boolean} 是否通过验证。
    */
    public function validation($name, $password){
        $result = -1;
        $this->initialise();
        $conditions = "user_name = '$name' and user_password = '$password'";
        $settings = array(
            'table' => $this->table, 
            'fields' => array(
                'id' => 'user_id'
                ),
            'conditions' => $conditions
        );
        $o = $this->getVar($this->db, $settings);  
        if ($o) {
            $result = $o;
        } 
        return $result;    
    }

    /**
    * 导入数据库。
    * @param $sql {Int} 数据定义的SQL文件。
    * @param $db {String} 数据库。
    */
    public function import($sql, $db){
        $this->initialize($db, $sql);
    }
    /*- IDUser 接口实现 END -*/
    
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
