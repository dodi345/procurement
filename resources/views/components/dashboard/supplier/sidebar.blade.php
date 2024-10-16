<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('superadmin.index') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#request-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Kelola Permintaan</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="request-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('superadmin.users') }}">
                        <i class="bi bi-circle"></i><span>List Permintaan</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#criteria-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Kelola Kriteria Vendor</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="criteria-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('officer.index') }}">
                        <i class="bi bi-circle"></i><span>Kriteria vendor</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<!-- End Sidebar-->
