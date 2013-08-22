<?php
/**
* 为系统用户验证提供配置的函数。
* 应当放在系统根目录下。
*/
/**
* 返回用户验证的配置。
*/
function get_authorization_config(){
    return array(
        /*验证网关的配置*/
        'gateway' => array(
            /*验证网关的URL地址*/
            'url' => '', 
            /*跳转到网关时携带当前URL地址的参数名*/
            'param' => 'r'
        ),
        /*目录权限的配置*/
        'directories' => array(
            /*目录或文件路径*/
            '' => array(
                /*允许访问的权限列表*/
                'allow' => array(''),
                /*下级目录或文件路径的权限配置*/
                'directories' => array()
            )
        )
    );
}
?>