<?php
/**
* 为系统用户验证提供配置的函数。
* 应当放在系统根目录下。
*/
/**
* 返回网系统的菜单配置。
*/
function get_site_menu_config(){
    return array(
    	/*页面全局菜单*/
    	'' => array(
    		/*菜单项配置*/
	    	'' => array(
	    		/*菜单项是否是激活状态*/
	    		'active' => '',
	    		/*菜单项的顶级菜单项*/
	    		'top' => array(
	    			array('menu' => '', 'item' => '')
    			),
	            /*允许访问的权限列表，空列表为允许所有人访问*/
	            'allow' => array(),
	            'display' => true
			)
		)
    );
}
?>
