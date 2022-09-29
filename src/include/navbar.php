<nav class="navbar bi-navbar fixed-top navbar-expand-lg navbar-light px-xxl-5 py-lg-4">
    <div class="container-fluid px-lg-3">
        <a class="navbar-brand logo" href="/">Below<span class="text-primary">Invoice</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bi-navbar" aria-controls="bi-navbar" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse justify-content-lg-between ms-xl-3 ms-xxl-5" id="bi-navbar">
            <ul class="nav-menu navbar-nav ms-lg-2 ms-xxl-5 mb-2 mb-lg-0">
                <?php include('navbar_menu.php');?>
            </ul>
            <ul class="bi-social d-lg-none d-xl-flex d-flex">
                <?php include('social_button.php');?>  
            </ul>
            <form action="#" class="search-box">
                <input type="search" name="search" placeholder="Search.." required>
                <button class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>