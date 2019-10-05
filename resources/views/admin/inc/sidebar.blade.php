<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="/images/avatar.png" alt="image">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{ auth()->user()->name }}</span>
                  <span class="text-secondary text-small">{{ auth()->user()->getRoleNames()[0] }}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.users.index') }}">
                  <span class="menu-title">Users</span>
                  <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
          </li>
          </ul>
        </nav>