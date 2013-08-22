# PHP版本的账户系统框架 #

## 项目依赖 ##
 * PHP版本的模型和模型表单引擎：git clone https://github.com/peigong/php-model-engine.git --branch 0.0.8 ./libs/php-model-engine-0.0.8

## 使用说明 ##

 * 需要使用ob_start();打开输出缓冲区。
 * 需要在模型和模型表单引擎库的上级目录（或上上级目录），放置config.inc.php配置文件，定义WEB系统的静态常量。需要的常量如下：
 	* ROOT：整个WEB系统的根目录，用于引用全局的类库。
 	* AccountsData：定义账户系统使用的数据库。
 	* ModelEngineData：定义模型和表单引擎使用的数据库。
 * 在正式的商业系统中使用时，需要在WEB服务器上（如Apache、Ngix），把模型和模型表单引擎的IOC配置目录（conf）设置为禁止外部访问。
 

## 分发目录说明 ##

 * demo：账户系统的演示DEMO
 * dependencies：账户系统所依赖的PHP和JS框架库，可移植。
 * modules/accounts：可移植的账户系统类库。具体使用需参考demo中的php配置。

## 版本的更新记录 ##

### 0.0.2 ###
 * 修订了二级菜单的机制。
 * 修改了安全拦截机制。
 * 增加了菜单权限控制机制。

### 0.0.1 ###
 * 实现基本的账户系统框架机制。

## 作者信息 ##
 * 电子邮件：peigong@foxmail.com
 * 微博地址：[http://weibo.com/u/3030510210](http://weibo.com/u/3030510210)
 * 博客地址：[http://www.peigong.tk](http://www.peigong.tk)
 * 项目地址：[https://github.com/peigong/php-accounts](https://github.com/peigong/php-accounts)
