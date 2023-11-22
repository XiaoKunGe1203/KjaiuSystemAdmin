    <aside class="lyear-layout-sidebar">

      <!-- logo -->
      <div id="logo" class="sidebar-header">
        <a href="?"><img src="images/logo.jpg" title="KjaiuSystem" alt="KjaiuSystem" /></a>
      </div>
      <div class="lyear-layout-sidebar-info lyear-scroll">

        <nav class="sidebar-main">

          <ul class="nav-drawer">
            <li class="nav-item <?php if(isset($_GET['page'])){}else{echo 'active';}?>">
              <a href="?">
                <i class="mdi mdi-home-city-outline"></i>
                <span>后台首页</span>
              </a>
            </li>
            <li class="nav-item <?php if($_GET['page'] == 'userlist'){echo 'active';}?>">
              <a href="?page=userlist">
                <i class="mdi mdi-account"></i>
                <span>用户列表</span>
              </a>
            </li>
            <li class="nav-item <?php if($_GET['page'] == 'orderslist'){echo 'active';}?>">
              <a href="?page=orderslist">
                <i class="mdi mdi-server"></i>
                <span>服务器列表</span>
              </a>
            </li>
            <li class="nav-item <?php if($_GET['page'] == 'domainlist'){echo 'active';}?>">
              <a href="?page=domainlist">
                <i class="mdi mdi-web"></i>
                <span>域名列表</span>
              </a>
            </li>
            <li class="nav-item <?php if($_GET['page'] == 'phpinfo'){echo 'active';}?>">
              <a href="?page=phpinfo">
                <i class="mdi mdi-language-php"></i>
                <span>phpinfo</span>
              </a>
            </li>
          </ul>
        </nav>

        <div class="sidebar-footer">
          <p class="copyright">
            <span>Copyright &copy; 2023. </span>
            <a target="_blank" href="https://github.com/XiaoKunGe1203/KjaiuSystemAdmin">XJHya</a>
            <span> All rights reserved.</span>
          </p>
        </div>
      </div>

    </aside>
