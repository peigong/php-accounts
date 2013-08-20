<?php
require_once(AccountsRoot . 'inc/security/principal/siteprincipal.inc.php');

/**
* 网站项目的上下文用户对象。
*/
class SitePrincipal implements ISitePrincipal{
	private $identity = null;
	private $user = null;
	private $authorization = null;

    /*- ISitePrincipal 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/

    /*- IPrincipal 接口实现 START -*/
	/**
	* 获取当前用户的标识。
	*/
	public function getIdentity(){
		return $this->identity;
	}

	/**
	* 进行最初的拦截，进行认证。
	*/
	public function intercept(){
		if ($this->authorization) {
			if ($this->user) {
				$user = $this->user;
			}else{
				$user = $this->identity->getCurrentUser();			
			}
			$permissions = array();
			if (array_key_exists('permissions', $user)) {
				$permissions = $user['permissions'];
			}
			$this->authorization->intercept($permissions);
		}
	}

	/**
	* 确定当前用户是否属于指定的角色。
	* @param $role {String} 指定的角度。
	* @return {Boolean} 当前用户是否属于指定的角色。
	*/
	public function isInRole($role){
		$result = false;
		if ($this->user) {
			$user = $this->user;
		}else{
			$user = $this->identity->getCurrentUser();			
		}
		if (array_key_exists('roles', $user)) {
			$result = in_array($role, $user['roles']);
		}
		return $result;
	}
    /*- IPrincipal 接口实现 END -*/

	/**
	* 确定当前用户是否拥有指定的许可。
	* @param $permission {String} 指定的许可。
	* @return {Boolean} 当前用户是否拥有指定的许可。
	*/
	public function hasPermission($permission){
		$result = false;
		if ($this->user) {
			$user = $this->user;
		}else{
			$user = $this->identity->getCurrentUser();			
		}
		if (array_key_exists('permissions', $user)) {
			$result = in_array($permission, $user['permissions']);
		}
		return $result;
	}
    /*- ISitePrincipal 接口实现 END -*/
}
?>