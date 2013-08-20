<?php
require_once(ROOT . 'site.authorization.conf.php');
require_once(ROOT . 'inc/modules/accounts/security/principal/siteprincipal.inc.php');

/**
* 网站项目的验证服务提供对象。
*/
class SiteAuthorizationProvider implements IAuthorizationProvider{
    /*- IAuthorizationProvider 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/

	/**
	* 进行最初的拦截，进行认证。
	* @param $permissions {Array} 当前用户所拥有的许可列表。
	*/
	public function intercept($permissions){
        /*
        print_r($_SERVER['QUERY_STRING']);
        print_r($_SERVER['REQUEST_URI']);
        print_r($_SERVER['SCRIPT_NAME']);
        print_r($_SERVER['PHP_SELF']);*/
        $current_path = $_SERVER['PHP_SELF'];
        
        $config = get_authorization_config();
        $auth_url = $config['gateway']['url'];
        $auth_param = $config['gateway']['param'];
        $directories = $config['directories'];

        /*默认为允许访问*/
        $allow = true;
        $allow_permissions = $this->getCurrentRequiredPermissions($current_path, array(), $directories);
        if (count($allow_permissions) > 0) {
            $allow = false;
            foreach ($permissions as $idx => $permission) {
                if (in_array($permission, $allow_permissions)) {
                    $allow = true;
                }
            }
        }
        if (!$allow) {
            $url = "$auth_url?$auth_param=" . urlencode($current_path);
            Header("Location: $url"); 
            exit();
        }
	}
    /*- IAuthorizationProvider 接口实现 END -*/
    
    /*- 私有方法 START -*/
    private function getCurrentRequiredPermissions($path, $permissions, $directories){
        $path = trim($path, "/");
        foreach ($directories as $directory => $settions) {
            $allow_permissions = array();
            if (stripos($path, $directory) !== false) {
                if (array_key_exists('allow', $settions)) {
                    $allow_permissions = $settions['allow'];
                }
                if (array_key_exists('directories', $settions) && (count($settions['directories']) > 0)) {
                    $sub_path = substr($path, strlen($directory));
                    /*下一级的权限配置覆盖上一级的权限配置*/
                    $allow_permissions = $this->getCurrentRequiredPermissions($sub_path, $permissions, $settions['directories']);
                }
            }
            /*同级的权限配置合并*/
            $permissions = array_merge($permissions, $allow_permissions);
        }
        $permissions = array_unique($permissions);
        return $permissions;
    }
    /*- 私有方法 END -*/
}
?>