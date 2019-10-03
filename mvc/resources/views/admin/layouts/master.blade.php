<!doctype html>

 <html class="no-js" lang=""> 
<head>
   @include('admin.layouts.top')
</head>
<body>


        <!-- Left Panel -->
        @include('admin.layouts.navigation')
  

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        @include('admin.layouts.header')
        <!-- Header-->  

       <!-- .content -->
       @yield('content')
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    @include('admin.layouts.bottom')
  
</body>
</html>
