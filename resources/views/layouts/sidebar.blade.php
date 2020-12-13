<div class="sidebar-panel offscreen-left">
      <div class="brand">
 
        <!-- /toggle small sidebar menu -->
        <!-- toggle offscreen menu -->
        <div class="toggle-offscreen">
          <a href="javascript:;" class="visible-xs hamburger-icon" data-toggle="offscreen" data-move="ltr">
            <span></span>
            <span></span>
            <span></span>
          </a>
        </div>
        <!-- /toggle offscreen menu -->
        <!-- logo -->
        <a class="brand-logo">
          <span>Reactor</span>
        </a>
        <a href="#" class="small-menu-visible brand-logo">R</a>
        <!-- /logo -->
      </div>
      
      <!-- main navigation -->
      <nav role="navigation">
        <ul class="nav">
          <!-- dashboard -->
          <li>
            <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
              <i class="icon-compass"></i>
              <span>{{ __('Dashboard') }}</span>
            </a>
          </li>
          <!-- /dashboard -->
          <!-- customizer -->
          <li>
            <a href="http://customizer.nyasha.me/#reactor" target="_blank">
              <i class="icon-equalizer"></i>
              <span>Edificios</span>
            </a>
          </li>
          <!-- /customizer -->
                  <li>
            <a href="http://customizer.nyasha.me/#reactor" target="_blank">
              <i class="icon-equalizer"></i>
              <span>Administraciones</span>
            </a>
          </li>
                  <li>
            <a href="http://customizer.nyasha.me/#reactor" target="_blank">
              <i class="icon-equalizer"></i>
              <span>Empresas Externas</span>
            </a>
          </li>

 
          <!-- usuarios -->
         <li>
            <a href="{{ route('user.index') }}" target="_blank">
              <i class="icon-equalizer"></i>
              <span>Usuarios</span>
            </a>
          </li>
          <!-- /usuarios -->
          <!-- ui -->
          <li>
            <a href="javascript:;">
              <i class="icon-book-open"></i>
              <span>Elements</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="ui-buttons.html">
                  <span>Buttons</span>
                </a>
              </li>
              <li>
                <a href="ui-social-buttons.html">
                  <span>Social buttons</span>
                </a>
              </li>
              <li>
                <a href="ui-general.html">
                  <span>General</span>
                </a>
              </li>
              <li>
                <a href="ui-tabs.html">
                  <span>Tabs</span>
                </a>
              </li>
              <li>
                <a href="ui-progressbars.html">
                  <span>Progress bars</span>
                </a>
              </li>
              <li>
                <a href="ui-pagination.html">
                  <span>Pagination</span>
                </a>
              </li>
              <li>
                <a href="ui-sliders.html">
                  <span>Sliders</span>
                </a>
              </li>
              <li>
                <a href="ui-notifications.html">
                  <span>Notifications</span>
                </a>
              </li>
              <li>
                <a href="ui-spinners.html">
                  <span>Spinners</span>
                </a>
              </li>
              <li>
                <a href="ui-colors.html">
                  <span>Colors</span>
                </a>
              </li>
              <li>
                <a href="ui-alerts.html">
                  <span>Alerts</span>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <i class="toggle-accordion"></i>
                  <span>Icons</span>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="ui-icons-sli.html">
                      <span>SLI</span>
                    </a>
                  </li>
                  <li>
                    <a href="ui-icons-fontawesome.html">
                      <span>Fontawesome</span>
                    </a>
                  </li>
                  <li>
                    <a href="ui-icons-climacons.html">
                      <span>Climacons</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- /ui -->
          <!-- forms -->
          <li>
            <a href="javascript:;">
              <i class="icon-loop"></i>
              <span>Forms</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="forms-basic.html">
                  <span>Basic</span>
                </a>
              </li>
              <li>
                <a href="forms-custom.html">
                  <span>Custom</span>
                </a>
              </li>
              <li>
                <a href="forms-plugins.html">
                  <span>Plugins</span>
                </a>
              </li>
              <li>
                <a href="forms-wizard.html">
                  <span>Wizard</span>
                </a>
              </li>
              <li>
                <a href="forms-editors.html">
                  <span>Editors</span>
                </a>
              </li>
              <li>
                <a href="forms-validation.html">
                  <span>Validation</span>
                </a>
              </li>
              <li>
                <a href="forms-masks.html">
                  <span>Masks</span>
                </a>
              </li>
              <li>
                <a href="forms-upload.html">
                  <span>Upload</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /forms -->
          <!-- tables -->
          <li>
            <a href="javascript:;">
              <i class="icon-share-alt"></i>
              <span>Tables</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="tables-basic.html">
                  <span>Basic</span>
                </a>
              </li>
              <li>
                <a href="tables-responsive.html">
                  <span>Responsive</span>
                </a>
              </li>
              <li>
                <a href="tables-datatables.html">
                  <span>Datatables</span>
                </a>
              </li>
              <li>
                <a href="tables-editable.html">
                  <span>Editable</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /tables -->
          <!-- charts -->
          <li>
            <a href="javascript:;">
              <i class="icon-pie-chart"></i>
              <span>Charts</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="charts-flot.html">
                  <span>Flot</span>
                </a>
              </li>
              <li>
                <a href="charts-easypie.html">
                  <span>Easypie</span>
                </a>
              </li>
              <li>
                <a href="charts-chartjs.html">
                  <span>Chartjs</span>
                </a>
              </li>
              <li>
                <a href="charts-rickshaw.html">
                  <span>Rickshaw</span>
                </a>
              </li>
              <li>
                <a href="charts-nvd3.html">
                  <span>nvd3</span>
                </a>
              </li>
              <li>
                <a href="charts-c3js.html">
                  <span>C3js</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /charts -->
          <!-- maps -->
          <li>
            <a href="javascript:;">
              <i class="icon-pointer"></i>
              <span>Maps</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="maps-google.html">
                  <span>Google</span>
                </a>
              </li>
              <li>
                <a href="maps-vector.html">
                  <span>Vector</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /maps -->
          <!-- extras -->
          <li>
            <a href="javascript:;">
              <i class="icon-tag"></i>
              <span>Extras</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="extras-invoice.html">
                  <span>Invoice</span>
                </a>
              </li>
              <li>
                <a href="extras-timeline.html">
                  <span>Timeline</span>
                </a>
              </li>
              <li>
                <a href="extras-timeline-stacked.html">
                  <span>Stacked timeline</span>
                </a>
              </li>
              <li>
                <a href="extras-post.html">
                  <span>Post</span>
                </a>
              </li>
              <li>
                <a href="extras-sortable.html">
                  <span>Sortable</span>
                </a>
              </li>
              <li>
                <a href="extras-nestable.html">
                  <span>Nestable</span>
                </a>
              </li>
              <li>
                <a href="extras-signin.html">
                  <span>Signin</span>
                </a>
              </li>
              <li>
                <a href="extras-signin2.html">
                  <span>Signin v2</span>
                </a>
              </li>
              <li>
                <a href="extras-signup.html">
                  <span>Signup</span>
                </a>
              </li>
              <li>
                <a href="extras-signup2.html">
                  <span>Signup v2</span>
                </a>
              </li>
              <li>
                <a href="extras-forgot.html">
                  <span>Forgot</span>
                </a>
              </li>
              <li>
                <a href="extras-lockscreen.html">
                  <span>Lockscreen</span>
                </a>
              </li>
              <li>
                <a href="extras-404.html">
                  <span>404 page</span>
                </a>
              </li>
              <li>
                <a href="extras-500.html">
                  <span>500 page</span>
                </a>
              </li>
              <li>
                <a href="blank.html">
                  <span>Starter</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /extras -->
          <!-- menu levels -->
          <li>
            <a href="javascript:;">
              <i class="icon-frame"></i>
              <span>Menu Level</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="javascript:;">
                  <i class="toggle-accordion"></i>
                  <span>Level</span>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="javascript:;">
                      <i class="toggle-accordion"></i>
                      <span>Level</span>
                    </a>
                    <ul class="sub-menu">
                      <li>
                        <a href="javascript:;">
                          <span>Level</span>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          <span>Level</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span>Level</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:;">
                  <span>Level</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- menu levels -->

        </ul>
      </nav>
      <!-- /main navigation -->
    </div>

