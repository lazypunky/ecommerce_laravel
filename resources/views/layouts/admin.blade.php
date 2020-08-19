@include('backend.section._header')

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('backend.section._nav')

            @yield('content')
            
            <!-- footer content -->
            @include('backend.section._copyright')
            <!-- /footer content -->
        </div>
    </div>

@include('backend.section._footer')
