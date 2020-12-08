<div class="header navbar">
        <div class="brand visible-xs">
          <!-- toggle offscreen menu -->
          <div class="toggle-offscreen">
            <a href="javascript:;" class="hamburger-icon visible-xs" data-toggle="offscreen" data-move="ltr">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
          <!-- /toggle offscreen menu -->
          <!-- logo -->
          <a class="brand-logo">
            <span>REACTOR</span>
          </a>
          <!-- /logo -->
        </div>
        <ul class="nav navbar-nav hidden-xs">
          <li>
            <a href="javascript:;" class="small-sidebar-toggle ripple" data-toggle="layout-small-menu">
              <i class="icon-toggle-sidebar"></i>
            </a>
          </li>
          <li class="searchbox">
            <a href="javascript:;" data-toggle="search">
              <i class="search-close-icon icon-close hide"></i>
              <i class="search-open-icon icon-magnifier"></i>
            </a>
          </li>
          <li class="navbar-form search-form hide">
            <input type="search" class="form-control search-input" placeholder="Start typing...">
            <div class="search-predict hide">
              <a href="#">Searching for 'purple rain'</a>
              <div class="heading">
                <span class="title">People</span>
              </div>
              <ul class="predictive-list">
                <li>
                  <a class="avatar" href="#">
                    <img src="images/face1.jpg" class="img-circle" alt="">
                    <span>Tammy Carpenter</span>
                  </a>
                </li>
                <li>
                  <a class="avatar" href="#">
                    <img src="images/face2.jpg" class="img-circle" alt="">
                    <span>Catherine Moreno</span>
                  </a>
                </li>
                <li>
                  <a class="avatar" href="#">
                    <img src="images/face3.jpg" class="img-circle" alt="">
                    <span>Diana Robertson</span>
                  </a>
                </li>
                <li>
                  <a class="avatar" href="#">
                    <img src="images/face4.jpg" class="img-circle" alt="">
                    <span>Emma Sullivan</span>
                  </a>
                </li>
              </ul>
              <div class="heading">
                <span class="title">Page posts</span>
              </div>
              <ul class="predictive-list">
                <li>
                  <a class="avatar" href="#">
                    <img src="images/unsplash/img2.jpeg" class="img-rounded" alt="">
                    <span>The latest news for cloud-based developers </span>
                  </a>
                </li>
                <li>
                  <a class="avatar" href="#">
                    <img src="images/unsplash/img2.jpeg" class="img-rounded" alt="">
                    <span>Trending Goods of the Week</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right hidden-xs">
          <li>
            <a href="javascript:;" class="ripple" data-toggle="dropdown">
              <span>EN</span>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="javascript:;">English</a>
              </li>
              <li>
                <a href="javascript:;">Russian</a>
              </li>
              <li>
                <a href="javascript:;">French</a>
              </li>
              <li>
                <a href="javascript:;">Spanish</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="ripple" data-toggle="dropdown">
              <i class="icon-bell"></i>
            </a>
            <ul class="dropdown-menu notifications">
              <li class="notifications-header">
                <p class="text-muted small">You have 3 new messages</p>
              </li>
              <li>
                <ul class="notifications-list">
                  <li>
                    <a href="javascript:;">
                      <div class="notification-icon">
                        <div class="circle-icon bg-success text-white">
                          <i class="icon-bulb"></i>
                        </div>
                      </div>
                      <span class="notification-message"><b>Sean</b> launched a new application</span>
                      <span class="time">2s</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <div class="notification-icon">
                        <div class="circle-icon bg-danger text-white">
                          <i class="icon-cursor"></i>
                        </div>
                      </div>
                      <span class="notification-message"><b>Removed calendar</b> from app list</span>
                      <span class="time">4h</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <div class="notification-icon">
                        <div class="circle-icon bg-primary text-white">
                          <i class="icon-basket"></i>
                        </div>
                      </div>
                      <span class="notification-message"><b>Denise</b> bought <b>Urban Admin Kit</b></span>
                      <span class="time">2d</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <div class="notification-icon">
                        <div class="circle-icon bg-info text-white">
                          <i class="icon-bubble"></i>
                        </div>
                      </div>
                      <span class="notification-message"><b>Vincent commented</b> on an item</span>
                      <span class="time">2s</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="notification-icon">
                      <img src="images/face3.jpg" class="avatar img-circle" alt="">
                      </span>
                      <span class="notification-message"><b>Jack Hunt</b> has <b>joined</b> mailing list</span>
                      <span class="time">9d</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li style="width: 100px;">
            <a href="javascript:;" class="ripple" data-toggle="dropdown">
              <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="header-avatar img-circle" alt="user" title="user">
              <span>{{ Auth::user()->name }}</span>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                </div>
              </li>
              <li>
                <a href="{{ route('profile.show') }}">{{ __('Profile') }}</a>
              </li>
             
              <li>
                 @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
              		<a href="{{ route('api-tokens.index') }}"> {{ __('API Tokens') }}</a>            
              	@endif
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <div class="border-t border-gray-100"></div>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Team') }}
                            </div>

                            <!-- Team Settings -->
                            <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('Team Settings') }}
                            </x-jet-dropdown-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                            @endcan

                            <div class="border-t border-gray-100"></div>

                            <!-- Team Switcher -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                            @endforeach

                            <div class="border-t border-gray-100"></div>
                        @endif
              </li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                @csrf
				 <x-jet-dropdown-link href="{{ route('logout') }}"
                     onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Logout') }}
                 </x-jet-dropdown-link>
                </form>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="ripple" data-toggle="layout-chat-open">
              <i class="icon-user"></i>
            </a>
          </li>
        </ul>
</div>