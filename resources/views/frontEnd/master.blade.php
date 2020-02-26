
<!DOCTYPE html>
<html lang="en">

@include('frontEnd.includes.head')

<body>

  <!-- Navbar -->
@include('frontEnd.includes.navbar')
  <!-- Navbar -->

  <!--Carousel Wrapper-->
@include('frontEnd.includes.slider')
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
@yield('mainContent')
  <!--Main layout-->

  <!--Footer-->
@include('frontEnd.includes.footer')
  <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('frontEnd/') }}/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset ('frontEnd/') }}/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset ('frontEnd/') }}/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset ('frontEnd/') }}/js/mdb.min.js"></script>
      <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
