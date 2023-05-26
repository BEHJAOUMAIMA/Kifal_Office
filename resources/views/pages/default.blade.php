<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-starter">
<head>
     @include('includes.head')
     <title>Kifal Auto</title>
</head>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                @include('includes.menu')
                <!-- / Menu -->

                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->
                    @include('includes.navbar')
                    <!-- / Navbar -->


                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                            <div>
                                @yield('content')
                            </div>
                        <!-- / Content -->

                        <div class="content-backdrop fade"></div>
                        <!-- Footer -->
                        <div>
                            @include('includes.footer')
                        </div>
                        <!-- / Footer -->
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>

            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>
        </div>
        <!-- / Layout wrapper -->

         @include('includes.scripts')
    </body>
</html>
