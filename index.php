<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/93483deb2b.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
</head>
<style>
  .mosh img{
  width: 100%;
  height: 600px;
  border-radius: 10px;
}
</style>
<body>
    <div class="all">
      <nav class="navbar shadow navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand fs-3" href="#">Skilltex.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link "  href="passion.php">Find Passion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="work.php">How we works</a>
              </li>
              
            
            </ul>
            <form class="d-flex log align-items-center gap-4" role="search">
              <li class="nav-item">
                <a class="nav-link" href="sign.php">Signup</a>
              </li>  
              <button class="btn-12"><span> <a href="sign.php">Find Tool</a></span></button>
            </form>
          </div>
        </div>
      </nav>
        <section class="fir">
          <div class="row">
            <div class="col col-lg-3 col-md-4 col-12">
              <div class="sha">
                <h1 class="fs-md-3">Watch.</h1>
                <h1>Learn.</h1>
                <h1>Grow.</h1>
              </div>
              <div class="buts">
                <button class="ota shadow">Find your passion</button> 
              </div> 
               <a href="passion.php"><button class="daa shadow">Go</button></a>
            </div>
            <div class="col col-lg-5 col-md-8 col-12 girl">
              <img src="./image/Download premium psd _ image of Portrait of a cheerful black lady by McKinsey  about portrait, black girl, business people, black business woman, and happy people 2038128.jpeg" width="100%" alt="">
              <h5 class="text-white wri">Writing Course </h5>
              <p class="text-white top">100 Topics</p>
            </div>
            <div class="col col-lg-2  d-lg-block d-none gat ">
             <img src="./image/65cac19ed8d2d84a9a548b2cd89f6e96.jpg"  alt="">
             <div class="box"></div>
             <h5 class="rit text-white">Writing</h5>
            </div>
            <div class="col col-lg-2 d-lg-block d-none  gat">
              <img src="./image/9ec53e803dc5a3e48b0c1d8441f86a55.jpg" alt="">
              <div class="bax"></div>
             <h5 class="rat text-white">Business</h5>
            </div>
          </div>
        </section>

        <section class="two">
          <div class="row">
             <div class="text-center use"><h4>Unlimited access to 100+ instructors</h4></div>
             
             <div class="aces">
              <div class="ido" onclick="showContent('home')">All Categories</div>
              <div class="ido" onclick="showContent('services')">Business</div>
              <div class="ido" onclick="showContent('blog')">Lifestyle</div>
            
            </div>
            <div id="home" class="content">
               <div class="lar">
                  <div class="bal">
                  <img src="./image/2a7475f4bc0184b48103971b74a76c2d.jpg" alt="Home Image">
                  <h5 class="mt-3">Sales Marketing</h5>
                  <p>4 Months</p>
                  </div>
                  <div class="bru">
                  <img src="./image/580c0356d8b208ced9056e1700525c98.jpg" alt="Home Image">
                  <h5 class="mt-3">Design Art</h5>
                  <p>3 Months</p>
                  </div>
                  <div class="boo">
                  <img src="./image/fe3c5e6f79e08420d1a36c72e6111e80.jpg" alt="Home Image">
                  <h5 class="mt-3">Copywriting Pro</h5>
                  <p>1 Months</p>
                  </div>
                  <div class="phy">
                  <img src="./image/054386c94ff9765ec0b7eaea9a2bc85b.jpg" alt="Home Image">
                <h5 class="mt-3">Data Analytics</h5>
                <p>2 Months</p>
                  </div>
                </div>
            </div>
            
            <div id="services" class="content hidden">
              <div class="lar">
                <div class="bal">
                <img src="./image/pexels-photo-3153198.jpeg" alt="Home Image">
                <h5 class="mt-3">Sales Marketing</h5>
                <p>4 Months</p>
                </div>
                <div class="bru">
                <img src="./image/pexels-photo-6482340.webp" alt="Home Image">
                <h5 class="mt-3">Story Telling</h5>
                <p>3 Months</p>
                </div>
                <div class="boo">
                <img src="/image/2b205fbf188407a2c4a0a3743937fea1.jpg" alt="Home Image">
                <h5 class="mt-3">Copywriting Pro</h5>
                <p>1 Months</p>
                </div>
                <div class="phy">
                <img src="./image/009ec52cf5611034aadcf047e5ef6c57.jpg" alt="Home Image">
              <h5 class="mt-3">Data Analytics</h5>
              <p>2 Months</p>
                </div>
              </div>
            </div>
            
            
            <div id="blog" class="content hidden">
              <div class="lar">
                <div class="bal">
                <img src="image/f95f15ab7c6578f44c83f81371d42a7d.jpg" alt="Home Image">
                <h5 class="mt-3">Business Woman</h5>
                <p>4 Months</p>
                </div>
                <div class="bru">
                <img src="image/983e452644ebb81680c60de3f2128a9e.jpg" alt="Home Image">
                <h5 class="mt-3">Luxury Lifestyle</h5>
                <p>3 Months</p>
                </div>
                <div class="boo">
                <img src="image/06b29b34a86737c9515715792f5d5dbc.jpg" alt="Home Image">
                <h5 class="mt-3">Friendsgiving</h5>
                <p>1 Months</p>
                </div>
                <div class="phy">
                <img src="image/498bbbdbc89ee3431eb7088dc280a3a6.jpg" alt="Home Image">
              <h5 class="mt-3">Baddie Lifestyle</h5>
              <p>2 Months</p>
                </div>
              </div>
            </div>
          </div>
        </section>

      <section class="three">
          <div class="row">
            <div class="col col-lg-3 col-12">
              <div class="get">
                <h5>Get that skills you need for a job that is in demand</h5>
              </div>
              <div class="text d-flex gap-3 w-100 ">
                <div class="cir shadow d-flex align-items-center justify-content-center"><i class="fa-regular fa-lightbulb"></i></div>
                <div>
                  <h6>Leadership</h6>
                  <p>Fully participated in the success of the company</p>
                </div>
              </div>
                <div class="lin"></div>
              <div class="text d-flex gap-3 w-100 mt-3">
                <div class="cir shadow d-flex align-items-center justify-content-center"><i class="fa-solid fa-circle-info"></i></div>
                <div>
                  <h6>Responsibility</h6>
                  <p>Employees will always be my top priority</p>
                </div>
              </div>
                <div class="lin"></div>
              <div class="text d-flex gap-3 w-100 mt-3">
                <div class="cir shadow d-flex align-items-center justify-content-center"><i class="fa-solid fa-person-running"></i></div>
                <div>
                  <h6>Flexibility</h6>
                  <p>The ability to switch to an important skills</p>
                </div>
              </div>
            </div>
            <div class="col col-lg-9 col-12">
              <div class="mosh">
                <h6 class="">The modern labour market dictates it's own terms. Today, to be a competitive specialist requires more than professionals</h6>
                <div class="ten d-flex gap-3 align-items-center justify-content-center">
                  <div class="yea d-flex  align-items-center ">
                    <h4>10</h4>
                    <h5>YEARS OF EXPERIENCES</h5>
                  </div>

                  <div class="tyi d-flex gap-2 align-items-center">
                    <h4>250</h4>
                    <h5>TYPE OF COURSES</h5>
                  </div>
                 </div>
                <img src="image/Remote Work_ Handsome Black Freelancer Guy Working On Laptop At Home Office.jpg"  alt="">
              </div>
            </div>
          </div>
        </section> 


        <section class="four">
           <div class="text-center tee"><h5>What our customer say</h5></div>
          <div class="swiper mySwiper">
            <div class="swiper-wrapper mt-4">
              <div class="swiper-slide ">
                <div class="card ">
                  <h6>Skilltex. is a game-changer! A must-try for anyone serious about landing their dream job! Highly recommended!</h6>
                  <div class="bio mt-3 d-flex gap-2 ">
                    <img src="image/avatar-angela-gray.webp" alt="">
                    <div class="ina">
                      <h5>Angela Gray</h5>
                      <p>CEO</p>
                    </div>
                  </div>
                </div> 
        
              </div>
              <div class="swiper-slide">
                <div class="card ">
                  <h6>Skilltex. is a lifesaver! I appreciate the efficiency it's like having a personal job-search assistant</h6>
                  <div class="bio mt-3 d-flex gap-2 ">
                    <img src="image/avatar-nathan-peterson.webp" alt="">
                    <div class="ina">
                      <h5>Nathan Peterson</h5>
                      <p>Brand Strategist</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                  <div class="card shadow">
              <h6>Skilltex. is my go-to for job hunting.If you're serious about your career, look no further.</h6>
              <div class="bio mt-3 d-flex gap-2 ">
                <img src="image/avatar-jacob-thompson.webp" alt="">
                <div class="ina">
                  <h5>Jacop Thompson</h5>
                  <p>Product Manager</p>
                </div>
              </div>
                  </div>
              </div>
              <div class="swiper-slide">    
                <div class="card shadow">
                  <h6>I've found my job search oasis with Skilltex.! Effortless navigation. Say goodbye to job search stress!</h6>
                  <div class="bio mt-3 d-flex gap-2 ">
                    <img src="image/avatar-mark-webber.webp" alt="">
                    <div class="ina">
                      <h5>Mark Webber</h5>
                      <p>Designer</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card shadow">
                  <h6>Skilltex. is a game-changer for job seekers!  Found my dream job here, and the constant updates kept me in the loop.</h6>
                  <div class="bio mt-3 d-flex gap-2 ">
                    <img src="image/avatar-anna-kim.webp" alt="">
                    <div class="ina">
                      <h5>Anna Kim</h5>
                      <p>Manager</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card shadow">
                  <h6>Skilltex. is a simple , and easy applications make it a standout. I landed my ideal job faster than expected.</h6>
                  <div class="bio mt-3 d-flex gap-2 ">
                    <img src="image/avatar-kimberly-smith.webp" alt="">
                    <div class="ina">
                      <h5>Kimberly Smith</h5>
                      <p>Quality Analyst</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card shadow">
                  <h6>Skilltex. is a game-changer for job seekers! The layout and quick application process streamline the search. </h6>
                  <div class="bio mt-3 d-flex gap-2 ">
                    <img src="image/avatar-rizky-hasanuddin.webp" alt="">
                    <div class="ina">
                      <h5>Rizky Hasanuddin</h5>
                      <p>Social Manager</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card ">
                  <h6>Skilltex. is a lifesaver! I appreciate the efficiency it's like having a personal job-search assistant</h6>
                  <div class="bio mt-3 d-flex gap-2 ">
                    <img src="image/avatar-nathan-peterson.webp" alt="">
                    <div class="ina">
                      <h5>Nathan Peterson</h5>
                      <p>Brand Strategist</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card shadow">
                  <h6>Skilltex. is a game-changer for job seekers!  Found my dream job here, and the constant updates kept me in the loop.</h6>
                  <div class="bio mt-3 d-flex gap-2 ">
                    <img src="image/avatar-anna-kim.webp" alt="">
                    <div class="ina">
                      <h5>Anna Kim</h5>
                      <p>Manager</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </section> 


        <footer>
          <div class="row">
            <div class="col col-lg-4 col-12">
              <div class="nam">
                <h4 class="fs-3">Skilltex.</h4>
              </div>
            </div>

            <div class="col col-lg-4 col-12">
              <div class="d-flex justify-content-between shey">
                <div class=""> 
                  <h6>Find Passion</h6>
                  <h6 class="mt-4">Skills</h6>
                </div>
                <div>
                  <h6>Categories</h6>
                  <h6 class="mt-4">Customers</h6>
                </div>
              </div>
            </div>

            <div class="col col-lg-4">
              <div class="sat">
                <h6>Join the Community</h6>
                  <form action="" class="">
                    <div class="d-flex">
                      <input class="att" type="email" name="" id="" placeholder="Enter Your Email">
                      <button type="submit" class="homes shadow">Go</button>
                    </div>
                  </form>
              </div>
            </div>
          </div>
           <div class="d-flex justify-content-between mt-4 vid">
            <div class="d-flex gap-2 alr">
              <i class="fa-solid fa-face-smile"></i>
              <h6>2024 Skilltex. All right reserved</h6>
            </div>
            <div class="icons d-flex gap-3">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-whatsapp"></i>
              <i class="fa-brands fa-x-twitter"></i>
              <i class="fa-brands fa-linkedin-in"></i>
              <i class="fa-brands fa-instagram"></i>
            </div>
           </div>
        </footer>
    </div>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
<script>
  function showContent(contentId) {
    var contentDivs = document.querySelectorAll('.content');
    contentDivs.forEach(function(div) {
      div.classList.add('hidden');
    });
    var selectedContent = document.getElementById(contentId);
    selectedContent.classList.remove('hidden');
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
    },
  });
</script>
</body>
</html>