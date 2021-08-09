
<ul class="nav nav-pills flex-column mb-auto">
    <li>
        <div class="nav-link mediumText text-light" onclick="showMenu('dashboard')" style="cursor: pointer">
            <i class="bi bi-border-width me-2"></i>
            Dashboard
        </div>
    </li>
    <li>
        <div class="nav-link mediumText text-light" onclick="showMenu('addpackage')" style="cursor: pointer">
            <i class="bi bi-plus-square me-2"></i>
            Add packages
        </div>
    </li>
    <li>
        <div class="nav-link mediumText text-light" onclick="showMenu('allPackages')" style="cursor: pointer">
            <i class="bi bi-box me-2"></i>
            All packages
        </div>
    </li>
</ul>
<hr>
<div class="dropdown m-3">
    <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="{{url('/img/logo.jpg')}}" alt="" width="32" height="32" class="rounded-circle me-2">
    <strong class="text-light">{{auth()->user()->name}}</strong>
    </a>
    <ul class="dropdown-menu ms-4 text-small shadow p-0" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item semiBoldText p-2 m-0 rounded-3" href="#" style="font-size: 0.8rem">Profile</a></li>
        <li><hr class="dropdown-divider m-0"></li>
        <li>
            <form action="admin/logout" method="GET" class="dropdown-item py-2 px-2 m-0 rounded-3">
                <button class="dropdown-item semiBoldText p-0 m-0" style="font-size: 0.8rem">Sign out</button>
            </form>
        </li>
    </ul>
</div>