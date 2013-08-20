<?php
require_once(AccountsRoot . 'inc/security/principal/siteprincipal.inc.php');

/*
* 网站项目的上下文用户的标识对象。
*/
class SiteIdentity implements ISiteIdentity{
	private $user = null;

    /*- ISiteIdentity 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/

	/**
	* 获取所使用的身份验证的类型。
	*/
	public function getAuthenticationType(){
		return "demo";
	}

	/**
	* 获取一个值，该值指示是否验证了用户。
	*/
	public function isAuthenticated(){
		return true;
	}

	/**
	* 获取当前用户的ID。
	*/
	public function getUserId(){
		$user_id = 0;
		if ($this->user) {
			$entity = $this->user->getCurrentUser();
			if (array_key_exists('user_id', $entity)) {
				$user_id = $entity['user_id'];
			}
		}
		return $user_id;
	}

	/**
	* 获取当前用户的名字。
	*/
	public function getName(){
		$name = '';
		if ($this->user) {
			$entity = $this->user->getCurrentUser();
			if (array_key_exists('user_name', $entity) && $entity['user_name']) {
				$name = $entity['user_name'];
			}
			if (array_key_exists('job_number', $entity) && $entity['job_number']) {
				$name = $entity['job_number'];
			}
			if (array_key_exists('email', $entity) && $entity['email']) {
				$name = $entity['email'];
			}
			if (array_key_exists('full_name', $entity) && $entity['full_name']) {
				$name = $entity['full_name'];
			}
		}
		return $name;
	}

    /**
    * 返回当前用户的数据实体。
    */
    public function getCurrentUser(){
    	$entity = array();
		if ($this->user) {
			$entity = $this->user->getCurrentUser();
		}
		return $entity;
	}
    /*- ISiteIdentity 接口实现 END -*/
}
?>