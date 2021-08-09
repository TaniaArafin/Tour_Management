@extends('admin.adminMaster')

@section('content')
    <div class="row p-0 m-0">
        {{-- sidebar --}}
        <div class="col-2 bgPrimary p-0" style="height: auto; min-height: 89.65vh;">
            @include('admin.dashboard.sidebar')
        </div>
        {{-- content --}}
        <div class="col-10 p-3">
            @if (session('status'))
            <div class="w-50 alert alert-success alert-dismissible fade show shadow-sm my-2 mx-auto" role="alert">
                <i class="bi bi-check-square-fill me-2"></i>
                {{session('status')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            {{-- Dashboard --}}
            <div id="dashboard">
                @include('admin.dashboard.statistics')
            </div>
            {{-- Add package --}}
            <div id="addpackage" style="display: none">
                @include('packages.create')
            </div>
            {{-- All Packages --}}
            <div id="allPackages" style="display: none">
                @include('packages.show')
            </div>
        </div>
    </div>
@endsection

<script>
    function showMenu(menu) {
        hideAll();
        section = document.getElementById(menu);
        section.style.display = 'block';
    }
    function hideAll() {
        const menus = ['dashboard', 'addpackage', 'allPackages'];
        menus.forEach(function (menu) {
            var section = document.getElementById(menu);
            section.style.display = 'none';
        });
    }
</script>