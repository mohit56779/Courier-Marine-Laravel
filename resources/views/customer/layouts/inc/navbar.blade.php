  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Logout Button -->
      <li class="nav-item">
        <a href="{{route('logout')}}" class="text-danger" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout </a>

        <form action="{{route('logout')}}" id="logout-form" method="POST" style="display:none;">
          @csrf
        </form>
        
      </li>


    </ul>
  </nav>
  <!-- /.navbar -->