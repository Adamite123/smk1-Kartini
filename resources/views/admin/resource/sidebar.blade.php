<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="admin_rsource/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/admin" class="nav-item nav-link {{ request()->is('admin') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="/add-kegiatan" class="nav-item nav-link  {{ request()->is('add-kegiatan') ? 'active' : '' }}"><i class="fa fa-th me-2"></i>Upload Kegiatan</a>
            <a href="/add-jurusan" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Upload Jurusan</a>
            <a href="/add-user" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Users List</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Ganti Element</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Slide Atas</a>
                    <a href="signup.html" class="dropdown-item">Blog/News</a>
                    <a href="404.html" class="dropdown-item">Ganti Judul Jurusan</a>
                    <a href="blank.html" class="dropdown-item">Banner</a>
                    <a href="/add-element-galeri" class="dropdown-item">Galeri Kegiatan</a>
                    <a href="blank.html" class="dropdown-item">Awards</a>
                    <a href="blank.html" class="dropdown-item">Komentar Alumni</a>
                </div>
            </div>
        </div>
    </nav>
</div>