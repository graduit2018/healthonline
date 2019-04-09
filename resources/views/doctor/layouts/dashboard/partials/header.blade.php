<nav class="main-header navbar navbar-expand bg-warning navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('doctor.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">Logout</a>

            <form id="logout-form" action="{{ route('doctor.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>
