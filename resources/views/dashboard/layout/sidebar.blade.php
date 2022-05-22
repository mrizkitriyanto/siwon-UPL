<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SiWON</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Heading -->
    <div class="sidebar-heading mt-3">
        Dashboard
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if ($active == 'dashboard') active @endif">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Sport Activity
    </div>

    <!-- Nav Item -->
    <li class="nav-item @if ($active == 'workouts') active @endif">
        <a class="nav-link" href="/dashboard/workouts">
            <i class="fas fa-fw fa-dumbbell"></i>
            <span>Workout</span></a>
    </li>

    <!-- Nav Item -->
    <li class="nav-item @if ($active == 'programs') active @endif">
        <a class="nav-link" href="/dashboard/program">
            <i class="fas fa-fw fa-calendar-minus"></i>
            <span>Programs</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Healthy Foods
    </div>

    <!-- Nav Item -->
    <li class="nav-item @if ($active == 'mealplan') active @endif">
        <a class="nav-link" href="/dashboard/mealplan">
            <i class="fas fa-calendar-alt"></i>
            <span>Meal Plan</span></a>
    </li>

    <!-- Nav Item -->
    <li class="nav-item @if ($active == 'recipe') active @endif">
        <a class="nav-link" href="/dashboard/foodrecipe">
            <i class="fas fa-scroll"></i>
            <span>Resep Makanan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Other
    </div>

    <!-- Nav Item -->
    <li class="nav-item @if ($active == 'suggestion') active @endif">
        <a class="nav-link" href="/dashboard/suggestions">
            <i class="fas fa-sticky-note"></i>
            <span>Saran</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
