<?php
require_once(ROOT . 'inc/core/b.object.class.php');
require_once(AccountsRoot . 'inc/business/b.accounts.inc.php');

/**
 * 账户系统业务层工具类。
 */
class BAccountsTool extends BObject implements IBAccountsTool{  
    private $tmp = '';
    private $module = '';
    private $util = null;
    
    /**
     * 构造函数。
     */
    function  __construct(){
        //parent::__construct();
        $this->tmp = AccountsRoot . 'tmp/';
        $this->module = 'accounts';
    }
    
    /**
     * 构造函数。
     */
    function BAccountsTool(){
        $this->__construct();
    }
    
    /*- IBAccountsTool 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/

    /**
    * 导入数据库的数据。
    * @param $name {String} 数据库名称。
    * @param $sql {String} 存储数据库SQL的目录。
    * @param $db {String} 数据库。
    */
    public function import($name, $sql, $db){
        $path = implode('/', array($sql, $this->module, $name));
        $this->util->import($path, $db);
        $this->util->import_mmd($this->module, $name, $sql, $db);
    }

    /**
    * 导出数据库的数据。
    * @param $name {String} 数据库名称。
    * @param $db {String} 数据库。
    * @param $tables {Array} 需要导出的数据表。
    * @return {String} 导出的SQL。
    */
    public function export($name, $db, $tables){
        $this->util->export_db($this->module, $this->tmp, $name, $db, $tables, array());
        $this->util->export_mmd($this->module, $this->tmp, $name, $tables);
    }

    /**
    * 获取数据库的数据表列表。
    * @param $db {String} 数据库。
    */
    public function getTables($db){
        $tables = $this->util->getTables($db);
        return $tables;
    }
    /*- IBAccountsTool 接口实现 END -*/
    
    /*- 私有方法 START -*/
    /*- 私有方法 END -*/
}
?>
