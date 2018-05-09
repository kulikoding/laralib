<!DOCTYPE html>
<html lang="en">

  @include('templates.partials.default._head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="stats" class="site_title"><i class="fa fa-paw"></i> <span>Lara-Lib</span></a>
            </div>

            <div class="clearfix"></div>

            @include('templates.partials.default._profile')

            <br />

            @include('templates.partials.default._sidebar')

            @include('templates.partials.default._footer_menu')
          </div>
        </div>

        @include('templates.partials.default._top_navigation')

        <!-- page content -->
        <div class="right_col" role="main">
          @section('content')
          @show
        </div>
        <!-- /page content -->

        @include('templates.partials.default._footer_content')
      </div>
    </div>

    @include('templates.partials.default._scripts')

  </body>
</html>
