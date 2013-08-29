<?php
require_once(ROOT . 'inc/core/webpage.class.php');
require_once(ROOT . 'inc/core/ioc/applicationcontext.inc.php');

/**
 * 模型设计器页面类。
 */
class AccountsToolPage extends WebPage implements IInjectEnable {
    private $type = 'tool';
    private $templates = array(
        'tool' => array('title' => '账户系统工具', 'template' => 'accounts-tool.tpl.html')
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
            $this->setMenuActive('accounts-sub', $this->type);
            $this->smarty->addTemplateDir(AccountsRoot . 'templates');
            $this->display($temp);
        }
    }
}
?>
