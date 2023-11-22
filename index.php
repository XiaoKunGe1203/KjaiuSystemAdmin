<?php 
include 'config.php';
if($_COOKIE['adminauthentication'] == md5($siteinfo['admin']).md5($siteinfo['password'])){
    
}else {
header("Location: ".$siteinfo['admin_link']."/login.php");
exit;
}
$conn = new mysqli($sqlinfo['host'], $sqlinfo['username'], $sqlinfo['password'], $sqlinfo['dbname']);
                    $sql = "select VERSION()";
                    $result = $conn->query($sql);
                    $mysqlquery = $result->fetch_assoc();
                    $mysqlversion = $mysqlquery['VERSION()'];
//引入页头
include 'head.php';
switch ($_GET['page']) {
case "userlist":
?>
    <main class="lyear-layout-content">

      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <header class="card-header">
                <div class="card-title">用户列表</div>
              </header>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>UID</th>
                        <th>用户名/OPENID</th>
                        <th>昵称</th>
                        <th>注册组</th>
                        <th>登录</th>
                        <th>头像</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    if(isset($_GET['uid'])){
                    $sql = "SELECT * FROM `dashboard_users` WHERE `id` = ".$_GET['uid'];
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc()
                            ?>                      <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['nickname'];?></td>
                        <td><?php
                        switch ($row['group']){
                            case "0":
                            echo '标准用户';
                            break;
                            case "qq":
                            echo 'QQ-第三方登录';
                            break;
                            case "1":
                            echo '管理员';
                            break;
                        }
                        
                        ?></td>
                        <td><a href="?page=userlogin&uid=<?php echo $row['id'];?>"><span class="badge bg-success">登录</span></a></td>
                        <td><img src="<?php echo $row['userimg'];?>" style="height:20px;" class="img-circle"></td>
                      </tr><?php
                    }else{
                    $sql = "SELECT * FROM `dashboard_users`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            ?>                      <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['nickname'];?></td>
                        <td><?php
                        switch ($row['group']){
                            case "0":
                            echo '标准用户';
                            break;
                            case "qq":
                            echo 'QQ-第三方登录';
                            break;
                            case "1":
                            echo '管理员';
                            break;
                        }
                        
                        ?></td>
                        <td><a href="?page=userlogin&uid=<?php echo $row['id'];?>"><span class="badge bg-success">登录</span></a></td>
                        <td><img src="<?php echo $row['userimg'];?>" style="height:20px;" class="img-circle"></td>
                      </tr><?php
                        }
                    }
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </main>
    <?php
    break;
case "orderslist":
?>
    <main class="lyear-layout-content">

      <div class="container-fluid">
          <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <header class="card-header">
                <div class="card-title">项目信息</div>
              </header>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>KjaiuSystemID</th>
                        <th>用户ID</th>
                        <th>截止日期</th>
                        <th>翼龙ID</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $sql = "SELECT * FROM `orders`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                    ?>
                      <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><a href="?page=userlist&uid=<?php echo $row['uid'];?>">[<?php echo $row['uid'];?>]</a></td>
                        <td><?php echo date('Y-m-d H:i:s', $row['stoptime']);?></td>
                        <td><a href="<?php echo $siteinfo['pt_url'];?>/admin/servers/view/<?php echo $row['sid'];?>"><span class="badge bg-success"><?php echo $row['sid'];?></span></a></td>
                      </tr>
                     <?php 
                        }
                    }
                     ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>
<?php
    break;
case "domainlist":?>
   <main class="lyear-layout-content">

      <div class="container-fluid">
          <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <header class="card-header">
                <div class="card-title">项目信息</div>
              </header>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>KjaiuSystemID</th>
                        <th>用户ID</th>
                        <th>DNSLA域名ID</th>
                        <th>域名前缀</th>
                        <th>域名后缀</th>
                        <th>记录值</th>
                        <th>记录类型</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $sql = "SELECT * FROM `subdomains`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                    ?>
                      <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><a href="?page=userlist&uid=<?php echo $row['uid'];?>">[<?php echo $row['uid'];?>]</a></td>
                        <td><?php echo $row['subdomainid'];?></td>
                        <td><?php echo $row['subdomainText'];?></td>
                        <td><?php echo $row['domain'];?></td>
                        <td><?php echo $row['value'];if($row['type'] == 'srv'){echo ':'.$row['SrvPort'];}?></td>
                        <td><?php echo $row['type'];?></td>
                      </tr>
                     <?php 
                        }
                    }
                     ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>
<?php
            break;
case "userlogin":
                    $sql = "SELECT * FROM `dashboard_users` WHERE `id` = ".$_GET['uid'];
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                             echo "<form style='display:none;' id='form1' name='form1' method='post' action='".$siteinfo['web_url']."/login'> 
              <input name='username' type='text' value='".$row['username']."'/>
              <input name='passwd' type='text' value='".$row['password']."'/>
            </form>
            <script type='text/javascript'>function load_submit(){document.form1.submit()}load_submit();</script>";
                    } 
    break;
case "phpinfo": ?>
    <main class="lyear-layout-content">

      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <header class="card-header">
                <div class="card-title">phpinfo</div>
              </header>
              <div class="card-body">
                <div class="table-responsive">
                  <?php phpinfo();?>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </main><?php
    break;
default:

?>
    <main class="lyear-layout-content">

      <div class="container-fluid">

        <div class="row">

          <div class="col-md-6 col-xl-3">
            <div class="card bg-primary text-white">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <span class="avatar-md rounded-circle bg-white bg-opacity-25 avatar-box">
                    <i class="mdi mdi-server fs-4"></i>
                  </span>
                  <span class="fs-4"><?php
                  $sql = "SELECT COUNT(*) FROM orders;";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  echo $row['COUNT(*)'];
                  ?>/<?php
                  $sql = "select * from orders order by id desc limit 1;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                     $servermax = $row['sid'];
                     }
                        }
                        echo $servermax;
                  ?></span>
                </div>
                <div class="text-end">服务器数/全部</div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-3">
            <div class="card bg-danger text-white">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <span class="avatar-md rounded-circle bg-white bg-opacity-25 avatar-box">
                    <i class="mdi mdi-account fs-4"></i>
                  </span>
                  <span class="fs-4"><?php
                  $sql = "SELECT COUNT(*) FROM dashboard_users;";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  echo $row['COUNT(*)'];
                  ?></span>
                </div>
                <div class="text-end">用户总数</div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-3">
            <div class="card bg-success text-white">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <span class="avatar-md rounded-circle bg-white bg-opacity-25 avatar-box">
                    <i class="mdi mdi-web fs-4"></i>
                  </span>
                  <span class="fs-4">
                      <?php
                  $sql = "SELECT COUNT(*) FROM subdomains;";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();
                  echo $row['COUNT(*)'];
                  ?>
                  </span>
                </div>
                <div class="text-end">域名总量</div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-xl-3">
            <div class="card bg-purple text-white">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <span class="avatar-md rounded-circle bg-white bg-opacity-25 avatar-box">
                    <i class="mdi mdi-archive fs-4"></i>
                  </span>
                  <span class="fs-4">免费版</span>
                </div>
                <div class="text-end">pre-1.0</div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="card">
              <header class="card-header">
                <div class="card-title">服务器信息</div>
              </header>
              <div class="card-body">
                        <li class="list-group-item">
                            <b>PHP 版本：</b><?php echo phpversion() ?>
                            <?php if(ini_get('safe_mode')) { echo '线程安全'; } else { echo '非线程安全'; } ?>
                        </li>
                        <li class="list-group-item">
                            <b>MySQL 版本：</b><?php echo $mysqlversion ?>
                        </li>
                        <li class="list-group-item">
                            <b>WEB软件：</b><?php echo $_SERVER['SERVER_SOFTWARE'] ?>
                        </li>
                        
                        <li class="list-group-item">
                            <b>服务器时间：</b><?php echo date("Y-m-d H:i:s"); ?>
                        </li>
                        <li class="list-group-item">
                            <b>POST许可：</b><?php echo ini_get('post_max_size'); ?>
                        </li>
                        <li class="list-group-item">
                            <b>文件上传许可：</b><?php echo ini_get('upload_max_filesize'); ?>
                        </li>
              </div>
            </div>
          </div>
          
        </div>

      </div>

    </main>
<?php
}
include 'foot.php';?>