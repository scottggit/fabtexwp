<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Fabtex</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
      integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
      integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/dist/css/styles.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <span class="bg-grad"></span>
    <nav
      class="navbar bi-navbar fixed-top navbar-expand-lg navbar-light px-xxl-5 py-lg-4 mt-3" data-aos="fade-down"
         
         data-aos-offset="0"
         data-aos-duration="2000"
    >
      <div class="container-fluid px-lg-3">
        <a class="navbar-brand logo" href="/"><img src="<?php bloginfo('template_directory')?>/dist/img/logo.png" alt=""></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#bi-navbar"
          aria-controls="bi-navbar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        ></button>
        <div
          class="collapse navbar-collapse justify-content-lg-end ms-xl-3 ms-xxl-5"
          id="bi-navbar"
        >
          <ul class="nav-menu navbar-nav ms-lg-2 ms-xxl-5 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="our_process.html">Hospitality</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="credit_app.html">Healthcare</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="blogs.html">Custom Prints</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_us.html">For Designers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link redtext" href="contact_us.html"
                >The Feterik Leadership</a
              >
            </li>
          </ul>

          <form action="#" class="search-box mr-2">
            <input
              type="search"
              name="search"
              placeholder="Search.."
              required
            />
            <button class="btn-search">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>

          <div class="btn-burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </nav>

    <div class="fixedbtn-wrap d-flex">
<div class="fixedbtn">
     
      <a href=""><i class="fa-solid fa-arrow-right mb-3"></i>FABRIC SAMPLE</a>
    </div>
    </div>
      <?php wp_head();?>
