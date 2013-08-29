<?php
require_once(ROOT . 'inc/core/b.object.class.php');
require_once(AccountsRoot . 'inc/business/b.accounts.inc.php');

/**
 * 账户系统业务层工具类。
 */
class BAccountsTool extends BObject implements IBAccountsTool{  
    /*- IBAccountsTool 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/
    /*- IBAccountsTool 接口实现 END -*/
    /**
    * 导入数据库。
    * @param $sql {Int} 数据定义的SQL文件。
    * @param $db {String} 数据库。
    */
    public function import($sql, $db){
        $this->dao->import($sql, $db);
    }
    
    /*- 私有方法 START -*/
    /*- 私有方法 END -*/
}
?>
