<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    

    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/dist/css/styles.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css" />


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
    />    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
 <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body  <?php echo body_class(); ?>>
  

    
  <div class="mobile-menu ">
         <div class="d-flex flex-column h-100">
            <div class="mobile-menu__header">
               <div class="container">
                  <div class="top-section-holder">
                     <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                           <a class="site-logo" href="<?php echo get_site_url(); ?>"><img class="w-100" src="<?php bloginfo('template_directory')?>/images/site-logo.svg" alt=""></a>
                        </div>
                        <div class="col-auto">
                           <div class="mobile-menu-close"><img class="w-100" src="<?php bloginfo('template_directory')?>/dist/img/menu-close.svg" alt=""></div>
                        </div>
                     </div>
                  </div>
               
               </div>
            </div>
            <div class="flex-grow-1 d-flex flex-column mobile-menu__body-wrap">
               <div class="mobile-menu__body">
               
                  <div class="container">
                     <div class="main-nav">
                        <ul class="nav" >
                   
                           <li class="menu-item">
                              <a class="item" href="<?php echo get_site_url(); ?>">Home</a>
                           </li>
                      
                           <li class="menu-item has-mega-menu">
                              <a class="item" href="#">Hospitality</a>
                              <div class="mega-menu">
                          
                                 <div class="blocks row">
                                    <div class="col-12 block">
                                      
                                          <h6 class="title">Window Treatments</h6>
                                       
                                          <ul>
                                                  <li>
                                                    <a href="">Draperies</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Roller Shades</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Blinds</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Top Treatments</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Hardware</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Speciality Shades</a>
                                                  </li>
                                                </ul>
                                    </div>
                                    <div class="col-12 block">
                                    
                                          <h6 class="title">Beddings</h6>
                                          <ul>
                                                  <li>
                                                    <a href="">Bed Covers</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Roller Shades</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Bed Skirt</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Box Spring Covers</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Scarves</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Pillows</a>
                                                  </li>
                                                </ul>
                                    </div>
                                    <div class="col-12 block">
                                    
                                       
                                          <h6 class="title">Our Process</h6>
                                          <p>Working with us for the first time?</p>
                                          <p>Here's what to except.</p>
                                    
                                    </div>
                                 </div>
                        
                              </div>
                           </li>
                     
                           <li class="menu-item">
                              <a class="item" href="<?php echo get_site_url() ?>/healthcare-manual">Healthcare</a>
                           </li>
                           <li class="menu-item">
                              <a class="item" href="#">Custom Prints</a>
                           </li>
                           <li class="menu-item">
                              <a class="item" href="#">For Brands</a>
                           </li>
                           <li class="menu-item">
                              <a class="item" href="#">For Designers</a>
                           </li>
                           <li class="menu-item">
                              <a class="item" href="#">The Feterik Leadership</a>
                           </li>
                    
                        </ul>
                     </div>
       
                  </div>
               </div>
               <div class="mobile-menu__footer">
                  <div class="border-illustration-top" style="background-image: url(<?php bloginfo('template_directory')?>/images/border-llustration.svg);"></div>
                  <div class="floating-rainbow">
                     <img class="w-100" src="<?php bloginfo('template_directory')?>/images/rainbow.svg" alt="">
                  </div>
                  <div class="container">
                     <div class="copyrightandsiteby">
                        <div class="form-row align-items-center">
                           <div class="col-auto">
                              <img class="ico" src="<?php bloginfo('template_directory')?>/images/heart.svg" alt="">
                           </div>
                           <div class="col">
                              <span class="copyright">&copy; 2022 Lite Child. All rights reserved.</span>
                              <span class="siteby">Site by <a href="https://wearelion.nyc/" target="_blank">We Are Lion</a></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

    <span class="bg-grad"></span>
    <?php 
    global $post;
    $post_slug = $post->post_name;
  
?>

    
    <nav
      class="navbar bi-navbar <?php   if($post_slug=='healthcare-manual'){echo 'white-nav';} ?> fixed-top navbar-expand-lg navbar-light px-xxl-5 pt-lg-4 " data-aos="fade-down"
         
         data-aos-offset="0"
         data-aos-duration="2000"
    >
      <div class="container-fluid px-lg-3">
        <a class="navbar-brand logo" href="/">
        <?php   if($post_slug=='healthcare-manual'){ ?>
          
          <img src="<?php bloginfo('template_directory')?>/dist/img/logo-white.png" alt="" class="white-logo">
          <img src="<?php bloginfo('template_directory')?>/dist/img/logo.png" alt=""  class="black-logo">
        <?php
        }else{
          ?>
          <img src="<?php bloginfo('template_directory')?>/dist/img/logo.png" alt=""  class="black-logo">
       <?php }   ?>


    
       

        </a>

        <div class="col-auto d-xl-none">          
                     <a class="btn-burger" href="javascript:void(0)">
                     <button
          class="navbar-toggler"
          type="button"
        
        ></button>
                     </a>
                  </div>

        <div
          class="collapse navbar-collapse justify-content-lg-center main-nav"
          id="bi-navbar"
        >
          <ul class="nav-menu navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>

            <li class="nav-item menu-item has-mega-menu">
              <a class="nav-link" href="#">Hospitality</a>
              <div class="mega-menu">
                                  
                                       <div class="row">
                                        
                                          <div class="col-md-8 col-left">
                                          <div class="blocks row">
                                                <div class="col-6 block">
                                                
                                                     
                                                      <h6 class="title">Window Treatments</h6>
                                                <ul>
                                                  <li>
                                                    <a href="">Draperies</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Roller Shades</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Blinds</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Top Treatments</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Hardware</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Speciality Shades</a>
                                                  </li>
                                                </ul>
                                                </div>
                                                <div class="col-6 block">
                                           
                                                      <h6 class="title">Beddings</h6>

                                                
                                                   <ul>
                                                  <li>
                                                    <a href="">Bed Covers</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Roller Shades</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Bed Skirt</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Box Spring Covers</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Scarves</a>
                                                  </li>
                                                  <li>
                                                    <a href="">Pillows</a>
                                                  </li>
                                                </ul>
                                                </div>
                                     
                                             </div>
                                          </div>
                                          <div class="col-md col-right" style="background:url('<?php bloginfo('template_directory')?>/dist/img/process-back.jpg');background-size:cover;">
                                           
                                       <div class="row align-items-center h-100">
<div class="col-right-wrap">
      
<img src="<?php bloginfo('template_directory')?>/dist/img/process.png" alt="" class="mb-5">
  <h3>Our Process</h3>
  <p>Working with us for the first time?</p>
  <p>Here's what to except.</p>
</div>

                                       </div>
                                          </div>
                                       </div>
                               
                                    </div>
            </li>


            <li class="nav-item ">
              <a class="nav-link" href="<?php echo get_site_url() ?>/healthcare-manual">Healthcare</a>
            </li>
<li class=" nav-item menu-item has-mega-menu">
  <a class="nav-link" href="credi">For Brands</a>
  <div class="mega-menu">
                                  
                                  <div class="row align-items-center">
                                   
                                     <div class="col-md-7 col-left">
                                  
                                      <div class="blocks row">
                                         
                                  <a href="#">
                                    
<img src="<?php bloginfo('template_directory')?>/dist/img/specs-by-brand.jpg" alt="" class="w-100">
                                  </a>
                              
                                      </div>
                                     </div>
                                     <div class="col-md col-right">
              
<div class="blocks row ">
<div class="col-md-12 block">
  <h3>Brand Log-In <i class="fa-solid fa-arrow-right"></i></h3>
  <p>To access the project tracker, and installation & support resources.</p>
</div>
</div>

<div class="blocks row ">
<div class="col-md-12 block">
  <h3>Our Process <i class="fa-solid fa-arrow-right"></i></h3>
  <p>Working with us for the first time? Here’s what to expect.</p>
</div>
</div>

<div class="blocks row ">
<div class="col-md-12 block">
  <h3>Find Fabrics <i class="fa-solid fa-arrow-right"></i></h3>
 
</div>
</div>


                        
                                     </div>
                                  </div>
                          
                               </div>
</li>

            <li class="nav-item">
              <a class="nav-link" href="blogs.html">Custom Prints</a>
            </li>
            <li class="nav-item menu-item has-mega-menu">
              <a class="nav-link" href="contact_us.html">For Designers</a>
              <div class="mega-menu">
                                  
                                  <div class="row ">
                                   
                                     <div class="col-md-5 col-left" style="background-image: url(<?php bloginfo('template_directory')?>/dist/img/room-visualizer.jpg);background-size:cover;">
                                     <div class="blocks row align-items-center  h-100">
                                         
                                           <div class="col-md-12 block">
                                      <h3 style="color:#fff;">Room Visualizer <i class="fa-solid fa-arrow-right"></i></h3>
                                      <p  style="color:#fff;">mix and match fabrics to style our virtual room according to your vision.</p>
                                      
                                           </div>
                            
                              
                                
                                        </div>
                                    
                              
                                     </div>
                                     <div class="col-md col-right">
              
                                <div class="blocks row ">
                                <div class="col-md-12 block">
                                  <h3>Search Fabrics By Color <i class="fa-solid fa-arrow-right"></i></h3>
                                  <p>Upload an image or use the color picker to select similar-colored fabrics</p>
                                </div>
                                </div>

                                <div class="blocks row ">
                                <div class="col-md-12 block">
                                  <h3>Request Samples <i class="fa-solid fa-arrow-right"></i></h3>
                                  <p>If you don’t see a fabric you like here, tell us what you need and well find it for you</p>
                                </div>
                                </div>

                     


                        
                                     </div>
                                  </div>
                          
                               </div>
            </li>
            <li class="nav-item">
              <a class="nav-link redtext" href="contact_us.html"
                >The Feterik Leadership</a
              >
            </li>
          </ul>
<a href="<?php echo get_site_url() ?>/contact-us" class="px-xl-3 px-xxl-3 mail-icon"><svg xmlns="http://www.w3.org/2000/svg" width="17.203" height="11" viewBox="0 0 17.203 11">
  <g id="Group_1210" data-name="Group 1210" transform="translate(18034.324 19741.064)">
    <rect id="Rectangle_987" data-name="Rectangle 987" width="17" height="11" rx="2" transform="translate(-18034.166 -19741.064)" fill="#262831"/>
    <path id="Path_1602" data-name="Path 1602" d="M-18034-19738.107s5.789,3.543,8.25,3.59,7.574-3.3,7.574-3.3" transform="translate(0.362 -0.796)" fill="none" stroke="#fff" stroke-linecap="square" stroke-width="1"/>
  </g>
</svg>
</a>
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

          <!-- <div class="btn-burger btn-burger-desktop">
            <span></span>
            <span></span>
            <span></span>
          </div> -->
        </div>
      </div>
    </nav>

    <div class="fixedbtn-wrap d-flex w-[46px]  drop-shadow-[0px_0px_8px_#91919119] ">
      <div class="fixedbtn">
        <a href="javascript:void(0)" class="mr-[7px]"><i class="fa-solid fa-arrow-right mb-3"></i>FABRIC SAMPLE</a>
      </div>
      <div class="bg-white px-2 py-2 fabric-list w-[278px]" style="display: none">

          <div class="row m-1 h-[174px] overflow-scroll">

          </div>

          <div class="d-flex justify-between mt-2"> 
            <button class="border-[#262831] uppercase border-[1px] rounded-[20px] text-[#262831] text-[13px] px-[12px] py-1"> Email </button>
            <button class="border-[#262831] uppercase border-[1px] rounded-[20px] text-[#262831] text-[13px] px-[12px] py-1"> Request </button>
            <button class="border-[#262831] uppercase border-[1px] rounded-[20px] text-[#262831] text-[13px] px-[12px] py-1"> Download </button>
          </div>

      </div>
    </div>

    <?php wp_head();?>
    

    <script>

      function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
      }

      function getCookie(cookieName)  {
          var name = cookieName + "=";
          var allCookieArray = document.cookie.split(';');
          for(var i=0; i<allCookieArray.length; i++)
          {
            var temp = allCookieArray[i].trim();
            if (temp.indexOf(name)==0)
            return temp.substring(name.length,temp.length);
       	  }
        	return "";
      }

      document.querySelector('.fixedbtn').addEventListener('click', (e) => {
        
        if($('.fixedbtn-wrap').hasClass('w-[321px]'))
        {
          $('.fixedbtn-wrap').removeClass('w-[321px]');
          $('.fixedbtn-wrap').addClass(' w-[46px]');
   
          $('.fixedbtn i').addClass('fa-arrow-right');
          $('.fixedbtn i').removeClass('fa-arrow-left');
          $('.fabric-list').hide();

        }else{
          $('.fixedbtn-wrap').addClass('w-[321px]');
          $('.fixedbtn-wrap').removeClass(' w-[46px]');
          
          $('.fixedbtn i').addClass('fa-arrow-left');
          $('.fixedbtn i').removeClass('fa-arrow-right');
          $('.fabric-list').show();
        }
      })  
    </script>