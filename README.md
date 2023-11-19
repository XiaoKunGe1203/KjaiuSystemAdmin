# KjaiuSystemAdmin https://www.xjhya.com
KjaiuSystemAdmin是开源的业务管理系统，基于PHP+MYSQL开发的一套小型易于部署的业务管理核心，具有极强的扩展能力，非常方便的安装方式，用户可在5分钟内部署属于自己的业务管理系统，可根据您的业务需求，安装自己需要的应用，极低的上手成本。

***

## 如何安装
### 注意：
目前暂时不准备写，如果着急请自行前往www.idcsmart.com或www.apayun.com！！！<br>
### 安装步骤
运行环境要求：PHP7.2或以上  Mysql5.6或5.7<br>
所有代码传到网站根目录<br>
设置KjaiuSystem的数据库<br>
### 配置数据库
修改数据库配置文件config.php<br>
```
<?php
$sqlinfo['host'] = 'localhost'; //Mysql地址
$sqlinfo['username'] = 'app'; //Mysql账户
$sqlinfo['password'] = 'app'; //Mysql密码
$sqlinfo['dbname'] = 'app'; //Mysql数据库名
?>
```
***

## License
This project is licensed under the Mozilla public license - see the [LICENSE](https://github.com/XiaoKunGe1203/KjaiuSystemAdmin/blob/main/LICENSE) file for details.<br>
除非适用法律要求或书面同意，否则根据许可分发的软件将按“原样”分发，没有任何明示或暗示的保证或条件。有关许可下的特定语言管理权限和限制，请参阅许可。
