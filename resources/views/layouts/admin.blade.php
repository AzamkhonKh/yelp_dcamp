<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Codebase - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Codebase.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-modern'                        Modern Header style
        'page-header-dark'                          Dark themed Header (works only with classic Header style)
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'        Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header">
          <!-- User Avatar -->
          <a class="img-link me-2" href="be_pages_generic_profile.html">
            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
          </a>
          <!-- END User Avatar -->

          <!-- User Info -->
          <a class="link-fx text-body-color-dark fw-semibold fs-sm" href="be_pages_generic_profile.html">
            John Smith
          </a>
          <!-- END User Info -->

          <!-- Close Side Overlay -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-danger ms-auto" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
          </button>
          <!-- END Close Side Overlay -->
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
          <!-- Search -->
          <div class="block pull-t pull-x">
            <div class="block-content block-content-full block-content-sm bg-body-light">
              <form action="be_pages_generic_search.html" method="POST">
                <div class="input-group">
                  <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                  <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- END Search -->

          <!-- Mini Stats -->
          <div class="block pull-x">
            <div class="block-content block-content-full block-content-sm bg-body-light">
              <div class="row text-center">
                <div class="col-4">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Clients</div>
                  <div class="fs-4">460</div>
                </div>
                <div class="col-4">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
                  <div class="fs-4">728</div>
                </div>
                <div class="col-4">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
                  <div class="fs-4">$7,860</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Mini Stats -->

          <!-- Friends -->
          <div class="block pull-x">
            <div class="block-header bg-body-light">
              <h3 class="block-title">
                <i class="fa fa-fw fa-users opacity-50 me-1"></i> Friends
              </h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content">
              <ul class="nav-users">
                <li>
                  <a href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="assets/media/avatars/avatar4.jpg" alt="">
                    <i class="fa fa-circle text-success"></i>
                    <div>Judy Ford</div>
                    <div class="fw-normal fs-xs text-muted">Photographer</div>
                  </a>
                </li>
                <li>
                  <a href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                    <i class="fa fa-circle text-success"></i>
                    <div>Jack Estrada</div>
                    <div class="fw-normal fs-xs text-muted">Web Designer</div>
                  </a>
                </li>
                <li>
                  <a href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="assets/media/avatars/avatar6.jpg" alt="">
                    <i class="fa fa-circle text-warning"></i>
                    <div>Amanda Powell</div>
                    <div class="fw-normal fs-xs text-muted">UI Designer</div>
                  </a>
                </li>
                <li>
                  <a href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="assets/media/avatars/avatar12.jpg" alt="">
                    <div>Jeffrey Shaw</div>
                    <div class="fw-normal fs-xs text-muted">Copywriter</div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END Friends -->

          <!-- Activity -->
          <div class="block pull-x">
            <div class="block-header bg-body-light">
              <h3 class="block-title">
                <i class="far fa-fw fa-clock opacity-50 me-1"></i> Activity
              </h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content">
              <ul class="list list-activity mb-0">
                <li>
                  <i class="si si-wallet text-success"></i>
                  <div class="fs-sm fw-semibold">+$29 New sale</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">Admin Template</a>
                  </div>
                  <div class="fs-xs text-muted">5 min ago</div>
                </li>
                <li>
                  <i class="si si-close text-danger"></i>
                  <div class="fs-sm fw-semibold">Project removed</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">Best Icon Set</a>
                  </div>
                  <div class="fs-xs text-muted">26 min ago</div>
                </li>
                <li>
                  <i class="si si-pencil text-info"></i>
                  <div class="fs-sm fw-semibold">You edited the file</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">
                      <i class="fa fa-file-alt"></i> Docs.doc
                    </a>
                  </div>
                  <div class="fs-xs text-muted">3 hours ago</div>
                </li>
                <li>
                  <i class="si si-plus text-success"></i>
                  <div class="fs-sm fw-semibold">New user</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">StudioWeb - View Profile</a>
                  </div>
                  <div class="fs-xs text-muted">5 hours ago</div>
                </li>
                <li>
                  <i class="si si-wrench text-warning"></i>
                  <div class="fs-sm fw-semibold">App v5.5 is available</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">Update now</a>
                  </div>
                  <div class="fs-xs text-muted">8 hours ago</div>
                </li>
                <li>
                  <i class="si si-user-follow text-pulse"></i>
                  <div class="fs-sm fw-semibold">+1 Friend Request</div>
                  <div class="fs-sm">
                    <a href="javascript:void(0)">Accept</a>
                  </div>
                  <div class="fs-xs text-muted">1 day ago</div>
                </li>
              </ul>
            </div>
          </div>
          <!-- END Activity -->

          <!-- Profile -->
          <div class="block pull-x">
            <div class="block-header bg-body-light">
              <h3 class="block-title">
                <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Profile
              </h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content block-content-full">
              <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                <div class="mb-3">
                  <label class="form-label" for="side-overlay-profile-name">Name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                    <span class="input-group-text">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="side-overlay-profile-email">Email</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                    <span class="input-group-text">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="side-overlay-profile-password">New Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                    <span class="input-group-text">
                      <i class="fa fa-asterisk"></i>
                    </span>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="side-overlay-profile-password-confirm">Confirm New Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                    <span class="input-group-text">
                      <i class="fa fa-asterisk"></i>
                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="submit" class="btn btn-alt-primary">
                      <i class="fa fa-sync opacity-50 me-1"></i> Update
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END Profile -->

          <!-- Settings -->
          <div class="block pull-x">
            <div class="block-header bg-body-light">
              <h3 class="block-title">
                <i class="fa fa-fw fa-wrench opacity-50 me-1"></i> Settings
              </h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content block-content-full">
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-status" name="side-overlay-settings-security-status" checked>
                  <label class="form-check-label fw-medium" for="side-overlay-settings-security-status">Online Status</label>
                  <div class="fs-sm text-muted">Show your status to all</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-verify" name="side-overlay-settings-security-verify">
                  <label class="form-check-label fw-medium" for="side-overlay-settings-security-verify">Verify on Login</label>
                  <div class="fs-sm text-muted">Most secure option</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-updates" name="side-overlay-settings-security-updates" checked>
                  <label class="form-check-label fw-medium" for="side-overlay-settings-security-updates">Auto Updates</label>
                  <div class="fs-sm text-muted">Keep app updated</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-notifications" name="side-overlay-settings-security-notifications" checked>
                  <label class="form-check-label fw-medium" for="side-overlay-settings-security-notifications">Notifications</label>
                  <div class="fs-sm text-muted">For every transaction</div>
                </div>
              </div>
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-api" name="side-overlay-settings-security-api" checked>
                  <label class="form-check-label fw-medium" for="side-overlay-settings-security-api">API Access</label>
                  <div class="fs-sm text-muted">Enable access from third party apps</div>
                </div>
              </div>
              <div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-2fa" name="side-overlay-settings-security-2fa">
                  <label class="form-check-label fw-medium" for="side-overlay-settings-security-2fa">Two Factor Auth</label>
                  <div class="fs-sm text-muted">Using an authenticator</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Settings -->
        </div>
        <!-- END Side Content -->
      </aside>
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      <!--
        Helper classes

        Adding .smini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding .smini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition, just add the .no-transition along with one of the previous 2 classes

        Adding .smini-hidden to an element will hide it when the sidebar is in mini mode
        Adding .smini-visible to an element will show it only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
      <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
          <!-- Side Header -->
          <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <div>
              <span class="smini-visible fw-bold tracking-wide fs-lg">
                c<span class="text-primary">b</span>
              </span>
              <a class="link-fx fw-bold tracking-wide mx-auto" href="index.html">
                <span class="smini-hidden">
                  <i class="fa fa-fire text-primary"></i>
                  <span class="fs-4 text-dual">code</span><span class="fs-4 text-primary">base</span>
                </span>
              </a>
            </div>
            <!-- END Logo -->

            <!-- Options -->
            <div>
              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-fw fa-times"></i>
              </button>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
          <!-- END Side Header -->

          <!-- Sidebar Scrolling -->
          <div class="js-sidebar-scroll">
            <!-- Side User -->
            <div class="content-side content-side-user px-0 py-0">
              <!-- Visible only in mini mode -->
              <div class="smini-visible-block animated fadeIn px-3">
                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
              </div>
              <!-- END Visible only in mini mode -->

              <!-- Visible only in normal mode -->
              <div class="smini-hidden text-center mx-auto">
                <a class="img-link" href="be_pages_generic_profile.html">
                  <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                </a>
                <ul class="list-inline mt-3 mb-0">
                  <li class="list-inline-item">
                    <a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="be_pages_generic_profile.html">J. Smith</a>
                  </li>
                  <li class="list-inline-item">
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
                      <i class="fa fa-burn"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="link-fx text-dual" href="op_auth_signin.html">
                      <i class="fa fa-sign-out-alt"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
              <ul class="nav-main">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="be_pages_dashboard.html">
                    <i class="nav-main-link-icon fa fa-house-user"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                  </a>
                </li>
                <li class="nav-main-item open">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                    <i class="nav-main-link-icon fa fa-award"></i>
                    <span class="nav-main-link-name">Page Kits</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item open">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                        <span class="nav-main-link-name">Dashboards</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_dashboard2.html">
                            <span class="nav-main-link-name">Dashboard 2</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link active" href="be_pages_dashboard3.html">
                            <span class="nav-main-link-name">Dashboard 3</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_dashboard4.html">
                            <span class="nav-main-link-name">Dashboard 4</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Alt Dashboards</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="db_classic.html">
                            <span class="nav-main-link-name">Classic</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="db_clean.html">
                            <span class="nav-main-link-name">Clean</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="db_social.html">
                            <span class="nav-main-link-name">Social</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="db_corporate.html">
                            <span class="nav-main-link-name">Corporate</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="db_minimal.html">
                            <span class="nav-main-link-name">Minimal</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="db_pop.html">
                            <span class="nav-main-link-name">Pop</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="db_medical.html">
                            <span class="nav-main-link-name">Medical</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Hosting</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_hosting_dashboard.html">
                            <span class="nav-main-link-name">Dashboard</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_hosting_emails.html">
                            <span class="nav-main-link-name">Emails</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_hosting_account.html">
                            <span class="nav-main-link-name">Account</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_hosting_support.html">
                            <span class="nav-main-link-name">Support</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Real Estate</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_real_estate_dashboard.html">
                            <span class="nav-main-link-name">Dashboard</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_real_estate_listing.html">
                            <span class="nav-main-link-name">Listing</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_real_estate_listing_new.html">
                            <span class="nav-main-link-name">Add New Listing</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Crypto</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_crypto_dashboard.html">
                            <span class="nav-main-link-name">Dashboard</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_crypto_buy_sell.html">
                            <span class="nav-main-link-name">Buy/Sell</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_crypto_wallets.html">
                            <span class="nav-main-link-name">Wallets</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_crypto_settings.html">
                            <span class="nav-main-link-name">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">e-Commerce</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_ecom_dashboard.html">
                            <span class="nav-main-link-name">Dashboard</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_ecom_orders.html">
                            <span class="nav-main-link-name">Orders</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_ecom_order.html">
                            <span class="nav-main-link-name">Order</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_ecom_products.html">
                            <span class="nav-main-link-name">Products</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_ecom_product_edit.html">
                            <span class="nav-main-link-name">Product Edit</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_ecom_customer.html">
                            <span class="nav-main-link-name">Customer</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">e-Learning</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_elearning_courses.html">
                            <span class="nav-main-link-name">Courses</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_elearning_course.html">
                            <span class="nav-main-link-name">Course</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_elearning_lesson.html">
                            <span class="nav-main-link-name">Lesson</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Forum</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_forum_categories.html">
                            <span class="nav-main-link-name">Categories</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_forum_topics.html">
                            <span class="nav-main-link-name">Topics</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_pages_forum_discussion.html">
                            <span class="nav-main-link-name">Discussion</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Boxed Backend</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="bd_dashboard.html">
                            <span class="nav-main-link-name">Dashboard</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="bd_search.html">
                            <span class="nav-main-link-name">Search</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="bd_variations_hero_simple_1.html">
                            <span class="nav-main-link-name">Hero Simple 1</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="bd_variations_hero_simple_2.html">
                            <span class="nav-main-link-name">Hero Simple 2</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="bd_variations_hero_simple_3.html">
                            <span class="nav-main-link-name">Hero Simple 3</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="bd_variations_hero_simple_4.html">
                            <span class="nav-main-link-name">Hero Simple 4</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="bd_variations_hero_image_1.html">
                            <span class="nav-main-link-name">Hero Image 1</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="bd_variations_hero_image_2.html">
                            <span class="nav-main-link-name">Hero Image 2</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="bd_variations_hero_image_3.html">
                            <span class="nav-main-link-name">Hero Image 3</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="bd_variations_hero_image_4.html">
                            <span class="nav-main-link-name">Hero Image 4</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="bd_variations_hero_video_1.html">
                            <span class="nav-main-link-name">Hero Video 1</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="bd_variations_hero_video_2.html">
                            <span class="nav-main-link-name">Hero Video 2</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-heading">User Interface</li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-grip-vertical"></i>
                    <span class="nav-main-link-name">Blocks</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_blocks_styles.html">
                        <span class="nav-main-link-name">Styles</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_blocks_options.html">
                        <span class="nav-main-link-name">Options</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_blocks_forms.html">
                        <span class="nav-main-link-name">Forms</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_blocks_themed.html">
                        <span class="nav-main-link-name">Themed</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_blocks_api.html">
                        <span class="nav-main-link-name">API</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-pencil-ruler"></i>
                    <span class="nav-main-link-name">Widgets</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_widgets_tiles.html">
                        <span class="nav-main-link-name">Tiles</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_widgets_users.html">
                        <span class="nav-main-link-name">Users</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_widgets_stats.html">
                        <span class="nav-main-link-name">Statistics</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_widgets_media.html">
                        <span class="nav-main-link-name">Media</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_widgets_blog.html">
                        <span class="nav-main-link-name">Blog</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-layer-group"></i>
                    <span class="nav-main-link-name">Elements</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_grid.html">
                        <span class="nav-main-link-name">Grid</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_icons.html">
                        <span class="nav-main-link-name">Icons</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_typography.html">
                        <span class="nav-main-link-name">Typography</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_buttons.html">
                        <span class="nav-main-link-name">Buttons</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_navigation.html">
                        <span class="nav-main-link-name">Navigation</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_tabs.html">
                        <span class="nav-main-link-name">Tabs</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_alerts.html">
                        <span class="nav-main-link-name">Alerts</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_progress.html">
                        <span class="nav-main-link-name">Progress</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_tooltips.html">
                        <span class="nav-main-link-name">Tooltips</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_popovers.html">
                        <span class="nav-main-link-name">Popovers</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_modals.html">
                        <span class="nav-main-link-name">Modals</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_images.html">
                        <span class="nav-main-link-name">Images</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_animations.html">
                        <span class="nav-main-link-name">Animations</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_ribbons.html">
                        <span class="nav-main-link-name">Ribbons</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_timeline.html">
                        <span class="nav-main-link-name">Timeline</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_accordion.html">
                        <span class="nav-main-link-name">Accordion</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_ui_color_themes.html">
                        <span class="nav-main-link-name">Color Themes</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-list-alt"></i>
                    <span class="nav-main-link-name">Tables</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_tables_styles.html">
                        <span class="nav-main-link-name">Styles</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_tables_responsive.html">
                        <span class="nav-main-link-name">Responsive</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_tables_helpers.html">
                        <span class="nav-main-link-name">Helpers</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_tables_pricing.html">
                        <span class="nav-main-link-name">Pricing</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_tables_datatables.html">
                        <span class="nav-main-link-name">DataTables</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-edit"></i>
                    <span class="nav-main-link-name">Forms</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_forms_elements.html">
                        <span class="nav-main-link-name">Elements</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_forms_Layouts.html">
                        <span class="nav-main-link-name">Layouts</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_forms_input_groups.html">
                        <span class="nav-main-link-name">Input Groups</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_forms_plugins.html">
                        <span class="nav-main-link-name">Plugins</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_forms_editors.html">
                        <span class="nav-main-link-name">Editors</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">CKEditor 5</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_forms_ckeditor5_classic.html">
                            <span class="nav-main-link-name">Classic</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_forms_ckeditor5_inline.html">
                            <span class="nav-main-link-name">Inline</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_forms_validation.html">
                        <span class="nav-main-link-name">Validation</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_forms_premade.html">
                        <span class="nav-main-link-name">Pre-made</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-heading">Build</li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-vector-square"></i>
                    <span class="nav-main-link-name">Layout</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">General</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_default.html">
                            <span class="nav-main-link-name">Default</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_flipped.html">
                            <span class="nav-main-link-name">Flipped</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_native_scrolling.html">
                            <span class="nav-main-link-name">Native Scrolling</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Header</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <span class="nav-main-link-name">Static</span>
                          </a>
                          <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                              <a class="nav-main-link" href="be_layout_header_modern.html">
                                <span class="nav-main-link-name">Modern</span>
                              </a>
                            </li>
                            <li class="nav-main-item">
                              <a class="nav-main-link" href="be_layout_header_classic.html">
                                <span class="nav-main-link-name">Classic</span>
                              </a>
                            </li>
                            <li class="nav-main-item">
                              <a class="nav-main-link" href="be_layout_header_classic_dark.html">
                                <span class="nav-main-link-name">Classic Dark</span>
                              </a>
                            </li>
                            <li class="nav-main-item">
                              <a class="nav-main-link" href="be_layout_header_glass.html">
                                <span class="nav-main-link-name">Glass</span>
                              </a>
                            </li>
                            <li class="nav-main-item">
                              <a class="nav-main-link" href="be_layout_header_glass_dark.html">
                                <span class="nav-main-link-name">Glass Dark</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <span class="nav-main-link-name">Fixed</span>
                          </a>
                          <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                              <a class="nav-main-link" href="be_layout_header_fixed_modern.html">
                                <span class="nav-main-link-name">Modern</span>
                              </a>
                            </li>
                            <li class="nav-main-item">
                              <a class="nav-main-link" href="be_layout_header_fixed_classic.html">
                                <span class="nav-main-link-name">Classic</span>
                              </a>
                            </li>
                            <li class="nav-main-item">
                              <a class="nav-main-link" href="be_layout_header_fixed_classic_dark.html">
                                <span class="nav-main-link-name">Classic Dark</span>
                              </a>
                            </li>
                            <li class="nav-main-item">
                              <a class="nav-main-link" href="be_layout_header_fixed_glass.html">
                                <span class="nav-main-link-name">Glass</span>
                              </a>
                            </li>
                            <li class="nav-main-item">
                              <a class="nav-main-link" href="be_layout_header_fixed_glass_dark.html">
                                <span class="nav-main-link-name">Glass Dark</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Sidebar</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_sidebar_dark.html">
                            <span class="nav-main-link-name">Dark</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_sidebar_hidden.html">
                            <span class="nav-main-link-name">Hidden</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_sidebar_mini.html">
                            <span class="nav-main-link-name">Mini</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Side Overlay</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_side_overlay_visible.html">
                            <span class="nav-main-link-name">Visible</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_side_overlay_hoverable.html">
                            <span class="nav-main-link-name">Hoverable</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
                            <span class="nav-main-link-name">No Page Overlay</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Main Content</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_content_boxed.html">
                            <span class="nav-main-link-name">Boxed</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_content_narrow.html">
                            <span class="nav-main-link-name">Narrow</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_content_full_width.html">
                            <span class="nav-main-link-name">Full Width</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Hero</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_hero_color.html">
                            <span class="nav-main-link-name">Color</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_hero_bubbles.html">
                            <span class="nav-main-link-name">Bubbles</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_hero_image.html">
                            <span class="nav-main-link-name">Image</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_hero_video.html">
                            <span class="nav-main-link-name">Video</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_api.html">
                        <span class="nav-main-link-name">API</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-cogs"></i>
                    <span class="nav-main-link-name">Components</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_charts.html">
                        <span class="nav-main-link-name">Charts</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_onboarding.html">
                        <span class="nav-main-link-name">Onboarding</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_loaders.html">
                        <span class="nav-main-link-name">Loaders</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_dialogs.html">
                        <span class="nav-main-link-name">Dialogs</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_notifications.html">
                        <span class="nav-main-link-name">Notifications</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_nestable.html">
                        <span class="nav-main-link-name">Nestable</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_gallery.html">
                        <span class="nav-main-link-name">Gallery</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_sliders.html">
                        <span class="nav-main-link-name">Sliders</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_carousel.html">
                        <span class="nav-main-link-name">Carousel</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_rating.html">
                        <span class="nav-main-link-name">Rating</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_appear.html">
                        <span class="nav-main-link-name">Appear</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_calendar.html">
                        <span class="nav-main-link-name">Calendar</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_image_cropper.html">
                        <span class="nav-main-link-name">Image Cropper</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_maps_vector.html">
                        <span class="nav-main-link-name">Vector Maps</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_comp_syntax_highlighting.html">
                        <span class="nav-main-link-name">Syntax Highlighting</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                    <span class="nav-main-link-name">Main Menu</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="#">
                        <span class="nav-main-link-name">Link 1-1</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="#">
                        <span class="nav-main-link-name">Link 1-2</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Sub Level 2</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="#">
                            <span class="nav-main-link-name">Link 2-1</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="#">
                            <span class="nav-main-link-name">Link 2-2</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <span class="nav-main-link-name">Sub Level 3</span>
                          </a>
                          <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                              <a class="nav-main-link" href="#">
                                <span class="nav-main-link-name">Link 3-1</span>
                              </a>
                            </li>
                            <li class="nav-main-item">
                              <a class="nav-main-link" href="#">
                                <span class="nav-main-link-name">Link 3-2</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-heading">Pages</li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-globe-americas"></i>
                    <span class="nav-main-link-name">Generic</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_blank.html">
                        <span class="nav-main-link-name">Blank</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_blank_block.html">
                        <span class="nav-main-link-name">Blank (Block)</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_blank_breadcrumb.html">
                        <span class="nav-main-link-name">Blank (Breadcrumb)</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_search.html">
                        <span class="nav-main-link-name">Search</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_profile.html">
                        <span class="nav-main-link-name">Profile</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_profile_edit.html">
                        <span class="nav-main-link-name">Profile Edit</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_inbox.html">
                        <span class="nav-main-link-name">Inbox</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_invoice.html">
                        <span class="nav-main-link-name">Invoice</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_faq.html">
                        <span class="nav-main-link-name">FAQ</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_blog.html">
                        <span class="nav-main-link-name">Blog</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_story.html">
                        <span class="nav-main-link-name">Story</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_project_list.html">
                        <span class="nav-main-link-name">Project List</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_project.html">
                        <span class="nav-main-link-name">Project</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
                        <span class="nav-main-link-name">Upgrade Plan</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_team.html">
                        <span class="nav-main-link-name">Team</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_contact.html">
                        <span class="nav-main-link-name">Contact</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_generic_todo.html">
                        <span class="nav-main-link-name">Todo</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_coming_soon.html">
                        <span class="nav-main-link-name">Coming Soon</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_maintenance.html">
                        <span class="nav-main-link-name">Maintenance</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_status.html">
                        <span class="nav-main-link-name">Status</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_installation.html">
                        <span class="nav-main-link-name">Installation</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_checkout.html">
                        <span class="nav-main-link-name">Checkout</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-user-lock"></i>
                    <span class="nav-main-link-name">Authentication</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_auth_all.html">
                        <span class="nav-main-link-name">All</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_auth_signin.html">
                        <span class="nav-main-link-name">Sign In</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_auth_signin2.html">
                        <span class="nav-main-link-name">Sign In 2</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_auth_signin3.html">
                        <span class="nav-main-link-name">Sign In 3</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_auth_signup.html">
                        <span class="nav-main-link-name">Sign Up</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_auth_signup2.html">
                        <span class="nav-main-link-name">Sign Up 2</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_auth_signup3.html">
                        <span class="nav-main-link-name">Sign Up 3</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_auth_lock.html">
                        <span class="nav-main-link-name">Lock Screen</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_auth_lock2.html">
                        <span class="nav-main-link-name">Lock Screen 2</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_auth_lock3.html">
                        <span class="nav-main-link-name">Lock Screen 3</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_auth_reminder.html">
                        <span class="nav-main-link-name">Pass Reminder</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_auth_reminder2.html">
                        <span class="nav-main-link-name">Pass Reminder 2</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_auth_reminder3.html">
                        <span class="nav-main-link-name">Pass Reminder 3</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-flag"></i>
                    <span class="nav-main-link-name">Error</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_pages_error_all.html">
                        <span class="nav-main-link-name">All</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_error_400.html">
                        <span class="nav-main-link-name">400</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_error_401.html">
                        <span class="nav-main-link-name">401</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_error_403.html">
                        <span class="nav-main-link-name">403</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_error_404.html">
                        <span class="nav-main-link-name">404</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_error_500.html">
                        <span class="nav-main-link-name">500</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="op_error_503.html">
                        <span class="nav-main-link-name">503</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-coffee"></i>
                    <span class="nav-main-link-name">Get Started</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="gs_backend.html">
                        <span class="nav-main-link-name">Backend</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="gs_backend_boxed.html">
                        <span class="nav-main-link-name">Backend Boxed</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="gs_landing.html">
                        <span class="nav-main-link-name">Landing</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="gs_rtl_backend.html">
                        <span class="nav-main-link-name">RTL Backend</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="gs_rtl_backend_boxed.html">
                        <span class="nav-main-link-name">RTL Backend Boxed</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="gs_rtl_landing.html">
                        <span class="nav-main-link-name">RTL Landing</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- END Side Navigation -->
          </div>
          <!-- END Sidebar Scrolling -->
        </div>
        <!-- Sidebar Content -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="space-x-1">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-fw fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Color Themes -->
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-themes-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-wrench"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg p-0" aria-labelledby="page-header-themes-dropdown">
                <div class="p-3 bg-body-light rounded-top">
                  <h5 class="h6 text-center mb-0">
                    Color Themes
                  </h5>
                </div>
                <div class="p-3">
                  <div class="row g-0 text-center">
                    <div class="col-2">
                      <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                    <div class="col-2">
                      <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                        <i class="fa fa-2x fa-circle"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="p-3 bg-body-light rounded-bottom">
                  <div class="row g-sm text-center">
                    <div class="col-6">
                      <a class="dropdown-item fs-sm fw-medium mb-0" href="be_layout_api.html">
                        <i class="fa fa-flask opacity-50 me-1"></i> Layout API
                      </a>
                    </div>
                    <div class="col-6">
                      <a class="dropdown-item fs-sm fw-medium mb-0" href="be_ui_color_themes.html">
                        <i class="fa fa-paint-brush opacity-50 me-1"></i> Themes
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END Color Themes -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="space-x-1">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user d-sm-none"></i>
                <span class="d-none d-sm-inline-block fw-semibold">J. Smith</span>
                <i class="fa fa-angle-down opacity-50 ms-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                <div class="px-2 py-3 bg-body-light rounded-top">
                  <h5 class="h6 text-center mb-0">
                    John Smith
                  </h5>
                </div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="be_pages_generic_profile.html">
                    <span>Profile</span>
                    <i class="fa fa-fw fa-user opacity-25"></i>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                    <span>Inbox</span>
                    <i class="fa fa-fw fa-envelope-open opacity-25"></i>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="be_pages_generic_invoice.html">
                    <span>Invoices</span>
                    <i class="fa fa-fw fa-file opacity-25"></i>
                  </a>
                  <div class="dropdown-divider"></div>

                  <!-- Toggle Side Overlay -->
                  <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                  <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                    <span>Settings</span>
                    <i class="fa fa-fw fa-wrench opacity-25"></i>
                  </a>
                  <!-- END Side Overlay -->

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="op_auth_signin.html">
                    <span>Sign Out</span>
                    <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->

            <!-- Notifications -->
            <div class="dropdown d-inline-block">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-flag"></i>
                <span class="text-primary">&bull;</span>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications">
                <div class="px-2 py-3 bg-body-light rounded-top">
                  <h5 class="h6 text-center mb-0">
                    Notifications
                  </h5>
                </div>
                <ul class="nav-items my-2 fs-sm">
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-check text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <p class="fw-medium mb-1">You’ve upgraded to a VIP account successfully!</p>
                        <div class="text-muted">15 min ago</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <p class="fw-medium mb-1">Please check your payment info since we can’t validate them!</p>
                        <div class="text-muted">50 min ago</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-times text-danger"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <p class="fw-medium mb-1">Web server stopped responding and it was automatically restarted!</p>
                        <div class="text-muted">4 hours ago</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <p class="fw-medium mb-1">Please consider upgrading your plan. You are running out of space.</p>
                        <div class="text-muted">16 hours ago</div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-plus text-primary"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <p class="fw-medium mb-1">New purchases! +$250</p>
                        <div class="text-muted">1 day ago</div>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="p-2 bg-body-light rounded-bottom">
                  <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
                    <i class="fa fa-fw fa-flag opacity-50 me-1"></i> View All
                  </a>
                </div>
              </div>
            </div>
            <!-- END Notifications -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">
              <i class="fa fa-fw fa-stream"></i>
            </button>
            <!-- END Toggle Side Overlay -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.html" method="POST">
              <div class="input-group">
                <!-- Close Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times"></i>
                </button>
                <!-- END Close Search Section -->
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                <button type="submit" class="btn btn-secondary">
                  <i class="fa fa-fw fa-search"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="far fa-sun fa-spin text-white"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      @yield('content')
      <!-- Footer -->
      <footer id="page-footer">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://1.envato.market/95j" target="_blank">Codebase 5.1</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/codebase.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/chart.js/chart.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_pages_dashboard.min.js"></script>
  </body>
    @yield('modals')
</html>