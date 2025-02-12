
 <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a  type="button" class="btn btn-sm btn-info mt-1" href="{{route('admin.logout')}}">
                        Sign Out
                    </a>
                </li>
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                
               
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
{{-- 

<!-- Header -->
<header id="page-header">
      <!-- Header Content -->
      <div class="content-header">
          <!-- Left Section -->
          <div class="content-header-section">
              <!-- Toggle Sidebar -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                  <i class="fa fa-navicon"></i>
              </button>
              <!-- END Toggle Sidebar -->

              <!-- Open Search Section -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                  <i class="fa fa-search"></i>
              </button>
              <!-- END Open Search Section -->

              <!-- Layout Options (used just for demonstration) -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

              <!-- END Layout Options -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="content-header-section">
              <!-- User Dropdown -->
              <div class="btn-group" role="group">
                  <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-user d-sm-none"></i>
                      <span class="d-none d-sm-inline-block">J. Smith</span>
                      <i class="fa fa-angle-down ml-5"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                      <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                      <a class="dropdown-item" href="{{route('admin.profile')}}">
                          <i class="si si-user mr-5"></i> Profile
                      </a>
                      <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                          <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                          <span class="badge badge-primary">3</span>
                      </a>
                      <a class="dropdown-item" href="be_pages_generic_invoice.html">
                          <i class="si si-note mr-5"></i> Invoices
                      </a>
                      <div class="dropdown-divider"></div>

                      <!-- Toggle Side Overlay -->
                      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                      <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                          <i class="si si-wrench mr-5"></i> Settings
                      </a>
                      <!-- END Side Overlay -->

                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{route('admin.logout')}}">
                          <i class="si si-logout mr-5"></i> Sign Out
                      </a>
                  </div>
              </div>
              <!-- END User Dropdown -->

              <!-- Notifications -->
              <div class="btn-group" role="group">
                  <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-flag"></i>
                      <span class="badge badge-primary badge-pill">5</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
                      <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                      <ul class="list-unstyled my-20">
                          <li>
                              <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                  <div class="ml-5 mr-15">
                                      <i class="fa fa-fw fa-check text-success"></i>
                                  </div>
                                  <div class="media-body pr-10">
                                      <p class="mb-0">You’ve upgraded to a VIP account successfully!</p>
                                      <div class="text-muted font-size-sm font-italic">15 min ago</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                  <div class="ml-5 mr-15">
                                      <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                  </div>
                                  <div class="media-body pr-10">
                                      <p class="mb-0">Please check your payment info since we can’t validate them!</p>
                                      <div class="text-muted font-size-sm font-italic">50 min ago</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                  <div class="ml-5 mr-15">
                                      <i class="fa fa-fw fa-times text-danger"></i>
                                  </div>
                                  <div class="media-body pr-10">
                                      <p class="mb-0">Web server stopped responding and it was automatically restarted!</p>
                                      <div class="text-muted font-size-sm font-italic">4 hours ago</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                  <div class="ml-5 mr-15">
                                      <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                  </div>
                                  <div class="media-body pr-10">
                                      <p class="mb-0">Please consider upgrading your plan. You are running out of space.</p>
                                      <div class="text-muted font-size-sm font-italic">16 hours ago</div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                  <div class="ml-5 mr-15">
                                      <i class="fa fa-fw fa-plus text-primary"></i>
                                  </div>
                                  <div class="media-body pr-10">
                                      <p class="mb-0">New purchases! +$250</p>
                                      <div class="text-muted font-size-sm font-italic">1 day ago</div>
                                  </div>
                              </a>
                          </li>
                      </ul>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
                          <i class="fa fa-flag mr-5"></i> View All
                      </a>
                  </div>
              </div>
              <!-- END Notifications -->

              <!-- Toggle Side Overlay -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                  <i class="fa fa-tasks"></i>
              </button>
              <!-- END Toggle Side Overlay -->
          </div>
          <!-- END Right Section -->
      </div>
      <!-- END Header Content -->

      <!-- Header Search -->
      <div id="page-header-search" class="overlay-header">
          <div class="content-header content-header-fullrow">
              <form action="be_pages_generic_search.html" method="post">
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <!-- Close Search Section -->
                          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                          <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                              <i class="fa fa-times"></i>
                          </button>
                          <!-- END Close Search Section -->
                      </div>
                      <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                      <div class="input-group-append">
                          <button type="submit" class="btn btn-secondary">
                              <i class="fa fa-search"></i>
                          </button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
      <!-- END Header Search -->

      <!-- Header Loader -->
      <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
      <div id="page-header-loader" class="overlay-header bg-primary">
          <div class="content-header content-header-fullrow text-center">
              <div class="content-header-item">
                  <i class="fa fa-sun-o fa-spin text-white"></i>
              </div>
          </div>
      </div>
      <!-- END Header Loader -->
  </header>
  <!-- END Header --> --}}
