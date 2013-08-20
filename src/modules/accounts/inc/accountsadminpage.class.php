<?php
require_once(ROOT . 'inc/core/webpage.class.php');
require_once(ROOT . 'inc/core/ioc/applicationcontext.inc.php');

/**
 * 广告前端系统统一DEMO上的账户系统角色和许可的定义。
 */
class AccountsAdminPage extends WebPage implements IInjectEnable {
    private $type = 'role';
    private $templates = array(
        'user' => array('title' => '用户管理', 'template' => 'user_role.tpl.html'),
        'role' => array('title' => '角色的定义', 'template' => 'rbac_role.tpl.html'),
        'permission' => array('title' => '许可的定义', 'template' => 'rbac_permission.tpl.html')
    );

    /*- IInjectEnable 接口实现 START -*/
    /**
     * 设置属性值。
     */
    public function __set($prop, $val){
        $this->$prop = $val;
    }
    /*- IInjectEnable 接口实现 END -*/
    
    /**
     * 渲染页面。
     */
    public function render(){  
        if(array_key_exists($this->type, $this->templates)){
            $template = $this->templates[$this->type];
            $title = $template['title'];
            $temp = $template['template'];
            $this->setTitle($title);
            $this->smarty->addTemplateDir(AccountsRoot . 'templates');
            $this->display($temp);
        }
    }
}
?>