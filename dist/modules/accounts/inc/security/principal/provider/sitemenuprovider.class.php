<?php
require_once(ROOT . 'inc/core/webpage.inc.php');
$site_menu_conf = ROOT . 'site.menu.config.inc.php';
if (file_exists($site_menu_conf)) {
    require_once($site_menu_conf);
}

/**
* 网站项目的验证服务提供对象。
*/
class SiteMenuProvider implements IMenuProvider{
    /*- IMenuProvider 接口实现 START -*/
    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/

    /**
    * 提供用于页面模板的菜单控制的配置信息。
    * @param $permissions {Array} 当前用户所拥有的许可列表。
    * @param $settings {Array} 当前已有的菜单配置信息。
    * array(
    *     '' => array(
    *         '' => array(
    *             'active' => ''
    *         )
    *     )
    * )
    */
    public function getMenuSettings($permissions, $settings){
        if (function_exists('get_site_menu_config')) {
            $config = get_site_menu_config();
            if ($config && count($config) > 0) {
                /*遍历顶级的菜单*/
                foreach ($config as $k1 => $menu) {
                    /*遍历菜单项*/
                    foreach ($menu as $k2 => $item) {
                        /*处理用户权限*/
                        /*默认为允许访问*/
                        $allow = true;
                        if ($item['allow'] && (count($item['allow']) > 0)) {
                            $allow = false;
                            foreach ($permissions as $idx => $permission) {
                                if (in_array($permission, $item['allow'])) {
                                    $allow = true;
                                }
                            }
                        }
                        if ($allow) {
                            $config[$k1][$k2]['display'] = true;
                        }else{
                            $config[$k1][$k2]['display'] = false;
                        }
                        /*处理激活状态*/
                        if (count($settings) > 0 
                            && array_key_exists($k1, $settings)
                            && $settings[$k1]
                            && count($settings[$k1]) > 0 
                            && array_key_exists($k2, $settings[$k1])
                            && $settings[$k1][$k2]
                            && count($settings[$k1][$k2]) > 0 
                            && array_key_exists('active', $settings[$k1][$k2])
                            && $settings[$k1][$k2]['active']
                            ) {
                                $config[$k1][$k2]['active'] = 'active';
                                if (count($item['top']) > 0) {
                                    foreach ($item['top'] as $idx => $top) {
                                        $config[$top['menu']][$top['item']]['active'] = 'active';
                                    }
                                }
                        }
                    }
                }
                $settings = $config;
            }
        }
        return $settings;
    }
    /*- IMenuProvider 接口实现 END -*/
    
    /*- 私有方法 START -*/
    /*- 私有方法 END -*/
}
?>