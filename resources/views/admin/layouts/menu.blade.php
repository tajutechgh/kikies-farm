<!-- Mobile Menu start -->
<div class="mobile-menu-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="mobile-menu">
          <nav id="dropdown">
            <ul class="mobile-menu-nav">
              <li><a data-toggle="collapse" data-target="#Charts" href="index.html#">Home</a>
                <ul class="collapse dropdown-header-top">
                  <li><a href="{{ route('home') }}">Dashboard</a></li>
                </ul>
              </li>
              @can('user.report', Auth::user())
              <li><a data-toggle="collapse" data-target="#demoevent" href="index.html#">Report</a>
                <ul id="demoevent" class="collapse dropdown-header-top">
                  <li><a href="{{ route('plantingReport') }}">Planting Report</a></li>
                  <li><a href="{{ route('harvestingReport') }}">Harvesting Report</a></li>
                </ul>
              </li>
              @endcan
              @can('user.manage', Auth::user())
              <li><a data-toggle="collapse" data-target="#democrou" href="index.html#">Manage</a>
                <ul id="democrou" class="collapse dropdown-header-top">
                  <li><a href="{{ route('employee.index') }}">Employees</a></li>
                  <li><a href="{{ route('equipment.index') }}">Equipments</a></li>
                  <li><a href="{{ route('crop.index') }}">Crops</a></li>
                  <li><a href="{{ route('pesticide.index') }}">Pesticides</a></li>
                  <li><a href="{{ route('insecticide.index') }}">Insecticides</a></li>
                  <li><a href="{{ route('fertilizer.index') }}">Fertilizers</a></li>
                  <li><a href="{{ route('expense.index') }}">Expenses</a></li>
                  <li><a href="{{ route('message.index') }}">Messages</a></li>
                </ul>
              </li>
              @endcan
              @can('user.settings', Auth::user())
              <li><a data-toggle="collapse" data-target="#demolibra" href="index.html#">Settings</a>
                <ul id="demolibra" class="collapse dropdown-header-top">
                  <li><a href="{{ route('category.index') }}">Categories</a></li>
                  <li><a href="{{ route('event.index') }}">Events</a></li>
                  <li><a href="{{ route('permission.index') }}">Permissions</a></li>
                  <li><a href="{{ route('role.index') }}">Roles</a></li>
                  <li><a href="{{ route('user.index') }}">Users</a></li>
                </ul>
              </li>
              @endcan
              <li><a data-toggle="collapse" data-target="#demodepart" href="index.html#">Logout</a>
                <ul id="demodepart" class="collapse dropdown-header-top">
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      {{ __('Sign Out') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
          <li class="active"><a data-toggle="tab" href="index.html#Home">
              <i class="fa fa-home"></i>Home</a>
          </li>
          @can('user.report', Auth::user())
          <li><a data-toggle="tab" href="index.html#mailbox">
              <i class="fa fa-database"></i> Report</a>
          </li>
          @endcan
          @can('user.manage', Auth::user())
          <li><a data-toggle="tab" href="index.html#Interface">
              <i class="fa fa-briefcase"></i> Manage</a>
          </li>
          @endcan
          @can('user.settings', Auth::user())
          <li><a data-toggle="tab" href="index.html#Charts">
              <i class="fa fa-cog"></i> Settings</a>
          </li>
          @endcan
          <li><a data-toggle="tab" href="index.html#Tables">
              <i class="fa fa-lock"></i> Logout</a>
          </li>
        </ul>
        <div class="tab-content custom-menu-content">
          <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li><a href="{{ route('home') }}">Dashboard</a></li>
            </ul>
          </div>
          <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li><a href="{{ route('plantingReport') }}">Planting Report</a></li>
              <li><a href="{{ route('harvestingReport') }}">Harvesting Report</a></li>
            </ul>
          </div>
          <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li><a href="{{ route('employee.index') }}">Employees</a></li>
              <li><a href="{{ route('equipment.index') }}">Equipments</a></li>
              <li><a href="{{ route('crop.index') }}">Crops</a></li>
              <li><a href="{{ route('pesticide.index') }}">Pesticides</a></li>
              <li><a href="{{ route('insecticide.index') }}">Insecticides</a></li>
              <li><a href="{{ route('fertilizer.index') }}">Fertilizers</a></li>
              <li><a href="{{ route('expense.index') }}">Expenses</a></li>
              <li><a href="{{ route('message.index') }}">Messages</a></li>
            </ul>
          </div>
          <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li><a href="{{ route('category.index') }}">Categories</a></li>
              <li><a href="{{ route('event.index') }}">Events</a></li>
              <li><a href="{{ route('permission.index') }}">Permissions</a></li>
              <li><a href="{{ route('role.index') }}">Roles</a></li>
              <li><a href="{{ route('user.index') }}">Users</a></li>
            </ul>
          </div>
          <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  {{ __('Sign Out') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Main Menu area End-->