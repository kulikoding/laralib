<!DOCTYPE html>
<html lang="en">

  @include('templates.partials._head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Lara-Lib</span></a>
            </div>

            <div class="clearfix"></div>

            {{-- @include('templates.partials._profile') --}}
            <!-- menu profile quick info -->
              <div class="profile clearfix">
                @yield('quick_profile')
              </div>
            <!-- /menu profile quick info -->


            <br />

            {{-- @include('templates.partials._sidebar') --}}
            <!-- sidebar -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              @yield('sidebar')
            </div>
            <!-- sidebar -->

            @include('templates.partials._footer_menu')
          </div>
        </div>

        @include('templates.partials._top_navigation')

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            LaraLib - Library using Laravel <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

      </div>
    </div>

    @include('templates.partials._scripts')

  </body>
</html>
