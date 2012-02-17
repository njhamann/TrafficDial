
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
              <a class="brand" href="/">TrafficDial</a>
          <ul class="nav pull-right">
              <?php if($is_authed){ ?>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
                    Admin
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="/applications">Application</a></li>
                  <li><a href="/groups">Groups</a></li>
                  <li><a href="/users">Users</a></li>
                  <li><a href="/accounts">Accounts</a></li>
                  <li><a href="/client_services">Client Services</a></li>
                  <li><a href="/twitter_auths">Twitter Services</a></li>
                  <li><a href="/facebook_auths">Facebook Services</a></li>
                  <li><a href="/messages">Messages</a></li>
                  <li><a href="/coupons">Coupons</a></li>
                  <li><a href="/coupon_visit_counts">Coupon Count</a></li>
                  <li><a href="/coupon_visit_increments">Coupon Interval Count</a></li>
                </ul>
              </li>
              <li><a href="/users/logout">Logout</a></li>
              <?php }else{ ?>
              <li><a href="/users/login">Login</a></li>
              <?php } ?>
           </ul>
        </div>
      </div>
    </div>
