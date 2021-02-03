<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('admin.layouts.header') 
     <div class="content-wrapper">
            @include('admin.layouts.sidebar') 

                @section('content')
                   @show
                   
        @include('admin.layouts.footer')
    </div>   
</body>
</html>
