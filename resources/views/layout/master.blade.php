
<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
<!-- Responsive navbar-->
    @include('layout.navbar')
<!-- Page header with logo and tagline-->
@section('headerhome')
    @include('layout.headerhome')
@show
<!-- Page content-->
<div class="container">
    <div class="row">
            @yield('content')
            @section('sidebar')
            <!-- Side widgets-->
                @include('layout.sidebar')
            @show
    </div>
    @section('pagination')
        <!-- Pagination-->
        @include('layout.pagination')
    @show
</div>
<!-- Footer-->
    @include('layout.footer')
</body>
</html>
