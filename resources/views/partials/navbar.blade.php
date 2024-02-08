<nav class="navbar navbar-expand-lg" style="background-color: orange">
  <div class="container-fluid">
    <a class="navbar-brand" href="/" style="color: white">Iudex Gaming Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

      <form class="d-flex mx-auto" action="{{ route('search') }}" method="GET">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" style="width: 500px; margin-left:80px;">
        <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
    
      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/" style="color: white">Home</a>
          </li>
          <li class="nav-item dropdown" style="padding-right: 100px;">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome
            </a>
            <ul class="dropdown-menu">
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/login" style="color: white; padding-right:100px;">Sign in</a>
          </li>
        @endauth
      </ul>

      {{-- <ul class="navbar-nav ms-auto">
        @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/" style="color: white">Home</a>
            </li>
            <li class="nav-item dropdown" style="padding-right: 100px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome, {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="/login" style="color: white; padding-right:100px;">Sign in</a>
            </li>
        @endif
    </ul> --}}
    
    
    </div>
  </div>
</nav>

{{-- <nav class="navbar navbar-expand-md bg-light sticky-top mynavbar" style="border-bottom: solid 1px;">
  <div class="container">
    <a class="navbar-brand font-nav" href="#" style="font-family: 'Josefin Sans', sans-serif;
    font-weight: 600;">Iudex Gaming Store</a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
          My Profile
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="navbar-nav ms-auto">
        <a class="nav-link font-nav" href="index.php" style="font-family: 'Josefin Sans', sans-serif; font-weight: 600;">Home</a>
        <?php
            if (isset($_SESSION['user_email'])) {
              $user_email = $_SESSION['user_email'];
              echo '<div class="dropdown">';
              echo '<a class="nav-link dropdown-toggle font-nav" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: \'Josefin Sans\', sans-serif; font-weight: 600;">' . $user_email . '</a>';
              echo '<div class="dropdown-menu" aria-labelledby="userDropdown">';
              echo '<a class="dropdown-item" href="#">Profile</a>';
              echo '<div class="dropdown-divider"></div>';
              echo '<a class="dropdown-item" href="logout.php">Logout</a>';
              echo '</div>';
              echo '</div>';
            } else {
                echo <a class="nav-link font-nav {{ ($title === "Home") ? "active" : '' }}" href="formlogin.php" style="font-family: \'Josefin Sans\', sans-serif; font-weight: 600;">Sign In</a>;
            }
        ?>
        </div>
      </div>
    </div>
  </div>
</nav> --}}