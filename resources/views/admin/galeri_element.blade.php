<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="admin_rsource/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="admin_rsource/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="admin_rsource/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="admin_rsource/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="admin_rsource/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
    .custom-card-img {
        height: 200px; /* Set the desired height for your card images */
        object-fit: cover; /* Maintain aspect ratio and cover the card */
    }
    </style>
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('admin.resource.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin.resource.navbar')
            <!-- Navbar End -->

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6" style="width: 100% !important">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Upload Galeri Element</h6>

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                
                <form method="POST" action="/galeri_element/{{ 1 }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Judul Galeri" value="{{ $kategoriData->first()->galeri_judul }}" required>
                        <label for="nama">Judul Galeri</label>
                    </div>
                
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" 
                        id="deskripsi" style="height: 150px;">{{ $kategoriData->first()->galeri_deskripsi }}</textarea>
                        <label for="deskripsi">Isi Artikel</label>
                    </div>
                
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" value="{{ $kategoriData->first()->galeri_kategori }}" required>
                        <label for="kategori">Kategori</label>
                        <small class="form-text text-muted" style="color: rgb(210, 8, 8) !important;">Tambahkan koma untuk setiap kategori berbeda.</small>
                    </div>
                
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                

            </div>
        </div>
 
        
    </div>
</div>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="admin_rsource/lib/chart/chart.min.js"></script>
    <script src="admin_rsource/lib/easing/easing.min.js"></script>
    <script src="admin_rsource/lib/waypoints/waypoints.min.js"></script>
    <script src="admin_rsource/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="admin_rsource/lib/tempusdominus/js/moment.min.js"></script>
    <script src="admin_rsource/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="admin_rsource/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="admin_rsource/js/main.js"></script>
</body>

</html>