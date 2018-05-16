<!DOCTYPE html>
<html lang="en">
    @include('layouts_member.partials._head')

    <body>
        @include('layouts_member.partials._navbar')

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        @include('layouts_member.partials._sidebar')
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            @yield('content')
                            @include('layouts_member.partials._content')
                        </div>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>

        @include('layouts_member.partials._scripts')
    </body>
</html>
