<?php
require_once(ROOT . 'inc/core/b.object.class.php');
require_once(ROOT . 'inc/modules/accounts/business/b.accounts.inc.php');

/**
 * 账户系统业务层IP+Cookie的标志逻辑实现类。
 */
class BIPCookieMark extends BObject implements IBMark{
    private $key = 'dum';//demo user mark

    /*- IBMark 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/

    /**
    * 返回当前用户的ID。
    */
    public function getCurrentUserId(){
        $uid = $this->getUserIdByCookie();
        if ($uid < 0) {
            $mappingId = $this->getIP();
            $uid = $this->mapping->getUserIdByMappingId($mappingId, MAPPING_TYPE_IP);
       }
        return $uid;
    }

    /**
    * 设置当前用户的标识。
    * @param $uid {Int} 当前用户的ID。
    */
    public function setCurrentUserId($uid){
        //建立映射关系
        if ($uid > 0) {
            $mappingId = $this->getIP();
            $this->mapping->createMapping($uid, $uid, MAPPING_TYPE_COOKIE);
            $this->mapping->createMapping($uid, $mappingId, MAPPING_TYPE_IP);
            $this->setUserCookie($uid);
        }
    }

    /**
    * 注销当前用户的Cookie标识。
    */
    function logoutCurrentUser(){
        $expire = time() - 60 * 60 * 24 * 30 * 120;
        $path = "/";
        setcookie($this->key, '', $expire, $path);        
    }
    /*- IBMark 接口实现 END -*/
    
    /*- 私有方法 START -*/
    /**
     * 从Cookie中获取用户编号。
     * @return Int 用户编号。
     */
    private function getUserIdByCookie(){
        $uid = -1;
        $val = $_COOKIE[$this->key];
        if($val && strlen($val) > 0){
            $uid = $val;
        }
        return $uid;
    }
    
    /**
     * 设置用户标识的Cookie。
     * @param Int $uid 用户编号。
     */
    private function setUserCookie($uid){
        $expire = time() + 60 * 60 * 24 * 30 * 120;
        $path = "/";
        setcookie($this->key, $uid, $expire, $path);        
    }

    private function getIP() {  
        $unknown = 'unknown';  
        if ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) 
            && $_SERVER['HTTP_X_FORWARDED_FOR'] 
            && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], $unknown)) {  
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
        } elseif ( isset($_SERVER['REMOTE_ADDR']) 
            && $_SERVER['REMOTE_ADDR'] 
            && strcasecmp($_SERVER['REMOTE_ADDR'], $unknown)) {  
            $ip = $_SERVER['REMOTE_ADDR'];  
        }  
        /*  
        处理多层代理的情况  
        或者使用正则方式：$ip = preg_match("/[\d\.]
        {7,15}/", $ip, $matches) ? $matches[0] : $unknown;  
        if (false !== strpos($ip, ','))  
        $ip = reset(explode(',', $ip));  
        */  
        return $ip;  
    }
    /*- 私有方法 END -*/
}
?>
