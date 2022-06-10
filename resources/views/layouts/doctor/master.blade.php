<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  @include('layouts.doctor.parts.part-meta')
  @include('layouts.doctor.parts.part-css')
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.doctor.parts.part-header')

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.doctor.parts.part-sidebar')

        <!-- partial -->
        <div class="content-wrapper">
          @yield('content')
        </div>
        <!-- partial:partials/_footer.html -->
        @include('layouts.doctor.parts.part-footer')
        <!-- partial -->
      </div>
    </div>

  </div>

    @include('layouts.doctor.parts.part-js')
    @stack('scripts')
</body>

</html>
