    <header class="lyear-layout-header">

      <nav class="navbar">

        <div class="navbar-left">
          <div class="lyear-aside-toggler">
            <span class="lyear-toggler-bar"></span>
            <span class="lyear-toggler-bar"></span>
            <span class="lyear-toggler-bar"></span>
          </div>
        </div>

        <ul class="navbar-right d-flex align-items-center">
                      <!--切换主题配色-->
		  <li class="dropdown dropdown-skin">
		    <span data-bs-toggle="dropdown" class="icon-item">
              <i class="mdi mdi-palette fs-5"></i>
            </span>
			<ul class="dropdown-menu dropdown-menu-end" data-stopPropagation="true">
              <li class="lyear-skin-title"><p>主题</p></li>
              <li class="lyear-skin-li clearfix">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="site_theme" id="site_theme_1" value="default" checked="checked">
                  <label class="form-check-label" for="site_theme_1"></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="site_theme" id="site_theme_2" value="translucent-green">
                  <label class="form-check-label" for="site_theme_2"></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="site_theme" id="site_theme_3" value="translucent-blue">
                  <label class="form-check-label" for="site_theme_3"></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="site_theme" id="site_theme_4" value="translucent-yellow">
                  <label class="form-check-label" for="site_theme_4"></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="site_theme" id="site_theme_5" value="translucent-red">
                  <label class="form-check-label" for="site_theme_5"></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="site_theme" id="site_theme_6" value="translucent-pink">
                  <label class="form-check-label" for="site_theme_6"></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="site_theme" id="site_theme_7" value="translucent-cyan">
                  <label class="form-check-label" for="site_theme_7"></label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="site_theme" id="site_theme_8" value="dark">
                  <label class="form-check-label" for="site_theme_8"></label>
                </div>
              </li>
		    </ul>
		  </li>
          <!--End 切换主题配色-->
          <!--个人头像内容-->
          <li class="dropdown">
            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="dropdown-toggle">
              <span style="margin-left: 10px;">您好，<?php echo $siteinfo['admin'];?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="lyear_pages_profile.html"
                  href="javascript:void(0)">
                  <i class="mdi mdi-account"></i>
                  <span>个人信息</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="lyear_pages_edit_pwd.html"
                  href="javascript:void(0)">
                  <i class="mdi mdi-lock-outline"></i>
                  <span>修改密码</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0)">
                  <i class="mdi mdi-delete"></i>
                  <span>清空缓存</span>
                </a>
              </li>
              <li class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" href="lyear_pages_login_1.html">
                  <i class="mdi mdi-logout-variant"></i>
                  <span>退出登录</span>
                </a>
              </li>
            </ul>
          </li>
          <!--End 个人头像内容-->
        </ul>

      </nav>

    </header>