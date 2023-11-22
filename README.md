# KjaiuSystemAdmin https://www.xjhya.com
KjaiuSystemAdmin是开源的业务管理系统，基于PHP+MYSQL开发的一套小型易于部署的业务管理核心，具有极强的扩展能力，非常方便的安装方式，用户可在5分钟内部署属于自己的业务管理系统，可根据您的业务需求，安装自己需要的应用，极低的上手成本。
## QQ群
625606816
***

## 如何安装
### 注意：
本版本不做功能更新，只会做问题更新 如果需要可以使用付费版，预计2024年年初开始！！！<br>
### 安装步骤
运行环境要求：PHP7.2或以上  Mysql5.6或5.7<br>
所有代码传到网站根目录<br>
设置KjaiuSystem的数据库<br>
### 配置数据库
修改数据库配置文件config.php<br>
```
<?php
//SQL变量
$sqlinfo['host'] = 'localhost';
$sqlinfo['username'] = 'app';
$sqlinfo['password'] = 'app';
$sqlinfo['dbname'] = 'app';
//SITE变量
$siteinfo['admin'] = 'admin'; //用户名
$siteinfo['password'] = 'e10adc3949ba59abbe56e057f20f883e'; //密码（MD5）(123456)
$siteinfo['web_url'] = 'http://www.example.com'; //网站URL
$siteinfo['pt_url'] = 'http://pt.example.com'; //翼龙URL
$siteinfo['admin_link'] = '/admin'; //管理链接目录
?>
```
***

## License
This project is licensed under the Mozilla public license - see the [LICENSE](https://github.com/XiaoKunGe1203/KjaiuSystemAdmin/blob/main/LICENSE_Chinese_Reference) file for details.<br>
除非适用法律要求或书面同意，否则根据许可分发的软件将按“原样”分发，没有任何明示或暗示的保证或条件。有关许可下的特定语言管理权限和限制，请参阅许可。
