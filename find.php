<?php

include "connect.php";

$select = "SELECT * FROM `sign` ORDER BY id DESC";
$signin_details = mysqli_query($conn , $select );
$signin =  mysqli_fetch_assoc($signin_details);



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/93483deb2b.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="find.css">
</head>
<style>
    .cir img{
  width: 40px;
  height: 40px;
  object-fit: cover;
  border-radius: 50%;
}
</style>
<body>
    <div class="skeleton">
        <div class=" way icons d-flex justify-content-between py-2 px-4 fixed-bottom  d-lg-none d-md-none d-block">
            <div ><a href="dashboard.php"> <i class="fa-solid fa-house text-center fs-4"></i></a></div>
            <div><a href="find.php"><i class="fa-solid fa-money-bill-transfer fs-4"></i></a></div>
            <div><a href="job.php"><i class="fa-solid fa-gear fs-4 "></i></a></div>
            <div><a href="settings.php"><i class="fa-solid fa-heart fs-4"></i></a></div>
            <div><a href="sign.php"><i class="fa-solid fa-right-from-bracket fs-4"></i></a></div>
        </div>

        <div class=" g-0 row ">
            <div class="col-lg-2   direct d-lg-block d-md-block d-none">
                <div class="sidebar ">
                    <div class="container">
                    <div class="ican">
                        <h3 class="mt-3 px-4">Skilltex.</h3>
                        <div class="py-3 phi d-flex align-items-center justify-content-center">
                         <a href="dashboard.php">
                         <div class="icon d-flex gap-2   p-2 pap rounded-2 justify-content-center align-items-center">
                         <i class="fa-solid fa-house text-center "></i>
                         <h5 class="m-0 p-0">Dashboard</h3>
                         </div>
                         </a>
                         
 
                        </div>

                         <div class="py-2 phi phe d-flex align-items-center justify-content-center">
                            <a href="find.php">
                                <div class="d-flex   rounded-2 gap-2 pap justify-content-center align-item-center">
                                <i class="fa-solid fa-money-bill-transfer "></i>
                                <h5 class="m-0 p-0">Find_Passion</h3>
                                </div>
                             </a>
                         </div>

                         <div class="py-2 phi phe d-flex align-items-center justify-content-center">
                            <a href="job.php">
                                <div class="d-flex   rounded-2 gap-2 pap justify-content-center align-item-center">
                                <i class="fa-solid fa-money-bill-transfer "></i>
                                <h5 class="m-0 p-0">Job Offer</h3>
                                </div>
                             </a>
                         </div>
                         

                         <div class="py-2 phi phe d-flex align-items-center justify-content-center">
                            <a href="settings.php">
                                <div class="d-flex  rounded-2 gap-2 pap justify-content-center align-item-center">
                                <i class="fa-solid fa-gear "></i>
                                <h5 class="m-0 p-0">Settings</h3>
                                </div>
                             </a>
                         </div>
                          
                         
                          <div class="add">
                            <div class=" phi py-5 phe d-flex align-items-center justify-content-center">  
                             <a href="sign.php">
                                <div class="d-flex  p-2 rounded-2 pap gap-2 justify-content-center align-item-center">
                         <i class="fa-solid fa-right-from-bracket "></i>
                         <h5 class="m-0 p-0">Logout</h3>
                         </div>
                         </a>
                         </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-10  justify-content-right col-12 main">
                <div class="body">
                    <nav class=" pat">
                        <div class="contain">
                            <div class="d-flex align-items-center justify-content-end gap-2 ate">
                                <h6>Hi, <?php echo $signin['name']?></h6>
                                <div class="cir"><img src="upload/<?php echo $signin['picture']?>" alt=""></div> 
                            </div>

                            <div class="notification-icon d-flex align-items-center justify-content-end" onclick="window.location.href='notification.php'">
                            <span class="notification-dot" id="notificationDot"></span>
                                <i class="fa-solid fa-bell"></i>
                            </div>
                        </div>
                    </nav> 
                    <div class="main-body">
                        <div class="row kin ">
                            <div class="col col-lg-8 col-12">
                                <div class=" rounded-2 p-3 d-flex yan ">
                                    <div class="py-3">
                                        <h5>Hello Latifat!</h5>
                                        <p class="mt-1">It's good to see you again</p>
                                    </div>
                                    <!-- <div class="pla  m-5">
                                        <img src="image/RN_Tintas-removebg-preview.png" alt="">
                                    </div>  -->
                                </div>

                                <section class="two ">
                                    <div class="row">
                                    <h5 class="mb-2 are">Courses</h5>
                                       <div class="aces">
                                        <div class="ido" onclick="showContent('home')">All Courses</div>
                                        <div class="ido" onclick="showContent('services')">Top Rated </div>
                                      
                                      </div>
                                      <div id="home" class="content">
                                        <div class="courses-section mt-3">
                                            <div class="course-box d-flex justify-content-between  rounded-2 align-items-center" id="figma-course">
                                                <img src="image/56676773cb4f0c00d7d47c6a84b9407c.jpg" alt="Figma Logo" width="50">
                                                  <div>
                                                    <h6 class="">Learn Figma</h6>
                                                    <p>By:Omodasola ige</p>
                                                  </div>
                                                 <h6><i class="fa-regular fa-clock"></i> 1hr 30min</h6 >
                                                  <div class="hel">
                                                    <a href="https://www.figma.com/downloads/" target="_blank" class="text-white">View Course</a>
                                                  </div>
                                            </div>
                                    
                                            <div class="course-box d-flex mt-4 justify-content-between  rounded-2 align-items-center" id="w3school">
                                                <img src="image/0f2e7b6d624b8dcc58cc25c6416cd993_1_-removebg-preview.png" alt="w3school Logo" width="50">
                                                  <div>
                                                    <h6 class="">Learn with W3school</h6>
                                                    <p>By:Omodasola ige</p>
                                                  </div>
                                                 <h6><i class="fa-regular fa-clock"></i> 1hr 30min</h6 >
                                                  <div class="hel">
                                                    <a href="https://www.w3schools.com/" target="_blank" class="text-white">View Course</a>
                                                  </div>
                                            </div>

                                            <div class="course-box d-flex mt-4 justify-content-between  rounded-2 align-items-center" id="photoshop">
                                                <img src="image/cf16ace5c3a058f850e0fd18e592a70a-removebg-preview.png" alt="photoshop Logo" width="50">
                                                  <div>
                                                    <h6 class="">Learn Photo shop</h6>
                                                    <p>By:Omodasola ige</p>
                                                  </div>
                                                 <h6><i class="fa-regular fa-clock"></i> 1hr 30min</h6 >
                                                  <div class="hel">
                                                    <a href="https://www.adobe.com/ng/products/photoshop/landpa.html?gclid=Cj0KCQiAxOauBhCaARIsAEbUSQSUD9wsEmIwI_rAqLxD1nH2JLhzr-qz3WPuf58Pr135gsZMPvWOGKkaAjjlEALw_wcB&mv=search&mv=search&mv2=paidsearch&sdid=2XBSBWBF&ef_id=Cj0KCQiAxOauBhCaARIsAEbUSQSUD9wsEmIwI_rAqLxD1nH2JLhzr-qz3WPuf58Pr135gsZMPvWOGKkaAjjlEALw_wcB:G:s&s_kwcid=AL!3085!3!602604000938!e!!g!!photoshop!12704499767!119837632319&gad_source=1 target=" target=" _blank" class="text-white">View Course</a>
                                                  </div>
                                            </div>

                                            <div class="course-box d-flex mt-4 justify-content-between  rounded-2 align-items-center" id="premium">
                                                <img src="image/3253b3e5d5953a0feff2c1e6abbe7379-removebg-preview.png" alt="photoshop Logo" width="50">
                                                  <div>
                                                    <h6 class="">Learn at Simplilearn</h6>
                                                    <p>By:Omodasola ige</p>
                                                  </div>
                                                 <h6><i class="fa-regular fa-clock"></i> 1hr 30min</h6 >
                                                  <div class="hel">
                                                    <a href="https://www.simplilearn.com/=" target=" _blank" class="text-white">View Course</a>
                                                  </div>
                                            </div>
                                        </div>
                                      </div>
                                      
                                      <div id="services" class="content hidden">
                                            <div class="courses-section">
                                                <div class="course-box d-flex mt-4 justify-content-between  rounded-2 align-items-center" id="udemy">
                                                    <img src="image/download.png" alt="udemy Logo" width="50">
                                                      <div>
                                                        <h6 class="">Learn with Udemy</h6>
                                                        <p>By:Omodasola ige</p>
                                                      </div>
                                                     <h6><i class="fa-regular fa-clock"></i> 1hr 30min</h6 >
                                                      <div class="hel">
                                                        <a href="https://www.udemy.com/?deal_code=&utm_term=Homepage&utm_content=Textlink&utm_campaign=Rakuten-default&ranMID=39197&ranEAID=UGrHaPSUfM0&ranSiteID=UGrHaPSUfM0-Aat3gXTTy_aB.sDXdGir7Q&LSNPUBID=UGrHaPSUfM0&utm_source=aff-campaign&utm_medium=udemyads" target="_blank" class="text-white">View Course</a>
                                                      </div>
                                                    </div>
        
                                                    <div class="course-box d-flex mt-4 justify-content-between  rounded-2 align-items-center" id="coursera">
                                                    <img src="image/3871a2297f67e9ea985aabf0ebfd5919-removebg-preview.png" alt="coursera Logo" width="50">
                                                      <div>
                                                        <h6 class="">Learn with Coursera</h6>
                                                        <p>By:Omodasola ige</p>
                                                      </div>
                                                     <h6><i class="fa-regular fa-clock"></i> 1hr 30min</h6 >
                                                      <div class="hel">
                                                        <a href="https://me.codejika.org/rocket/C1/P0/T0?gad_source=1&gclid=Cj0KCQiAxOauBhCaARIsAEbUSQSOnW-jX0kZNdsq-iLpJ0pAzUTys6Gx7IMigSq6TQ-OR0SzKCpVzs4aAu0lEALw_wcB" target="_blank" class="text-white">View Course</a>
                                                      </div>
                                                    </div>

                                                    <div class="course-box d-flex mt-4 justify-content-between  rounded-2 align-items-center" id="adobe">
                                                        <img src="image/999d89248504e461d6028163d4f03027-removebg-preview.png" alt="Adobe Logo" width="50">
                                                          <div>
                                                            <h6 class="">Learn Adobe Ilustrator</h6>
                                                            <p>By:Omodasola ige</p>
                                                          </div>
                                                         <h6><i class="fa-regular fa-clock"></i> 1hr 30min</h6 >
                                                          <div class="hel">
                                                            <a href="https://www.adobe.com/ng/products/illustrator/campaign/pricing.html?gclid=Cj0KCQiAxOauBhCaARIsAEbUSQRheVreXDfaEbIarTs-tHm-cMp4VyEHEUMr78WwYZb46gGjf4pXu3IaAooREALw_wcB&mv=search&mv=search&mv2=paidsearch&sdid=GMCWY69B&ef_id=Cj0KCQiAxOauBhCaARIsAEbUSQRheVreXDfaEbIarTs-tHm-cMp4VyEHEUMr78WwYZb46gGjf4pXu3IaAooREALw_wcB:G:s&s_kwcid=AL!3085!3!602484355107!e!!g!!adobe%20illustrator!12704499521!129143927268&gad_source=1" target="_blank" class="text-white">View Course</a>
                                                          </div>
                                                        </div>
                                            </div>
                                      </div>
                                      

                                      
                                    </div>
                                  </section>
                            
                            </div>
                            <div class="col col-lg-3 col-12 mb-5">
                                <div>
                                    <div class="counter-section rounded-2 d-flex align-items-center gap-3 justify-content-center">
                                         <h1><span id="courseCounter">0</span></h3>
                                         <p class="mt-1">Courses in progress</p>
                                    </div>

                                    <div class="lea rounded-2">
                                      <div class="chart-section">
                                        <h5>Your Statistics</h5>
                                        <canvas id="courseChart" width="400" height="200"></canvas>
                                    </div>
                                    </div>

                                    <div class="yeah rounded-2">
                                        <div class="">
                                            <div>
                                                <img src="image/b45e2fb4dcf90920d1a527439afa2f96-removebg-preview (1).png" alt="">
                                            </div>
                                            <div>
                                                <h5>Learn even more!</h5>
                                                <p>Unlock premium features only for $50.88  per month</p>
                                                <div class="hela">
                                                    <a href="https://www.youtube.com/" target="_blank" class="text-white">View Course</a>
                                                  </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>




<script>
    function updateNotificationDot() {
        const dot = document.getElementById('notificationDot');
        const unreadNotifications = 2;
        if (unreadNotifications > 0) {
            dot.style.display = 'block';
        } else {
            dot.style.display = 'none';
        }
    }
    function notificationsRead() {
        updateNotificationDot(); 
    }

    updateNotificationDot();
</script>


<script>
    let courseCounter = 0;

    document.getElementById('figma-course').addEventListener('click', function() {
        courseCounter++;
        document.getElementById('courseCounter').innerText = courseCounter;
        updateChart();
    });

    document.getElementById('w3school').addEventListener('click', function() {
        courseCounter++;
        document.getElementById('courseCounter').innerText = courseCounter;
    });

    document.getElementById('photoshop').addEventListener('click', function() {
        courseCounter++;
        document.getElementById('courseCounter').innerText = courseCounter;
    });

    document.getElementById('udemy').addEventListener('click', function() {
        courseCounter++;
        document.getElementById('courseCounter').innerText = courseCounter;
    });

    document.getElementById('coursera').addEventListener('click', function() {
        courseCounter++;
        document.getElementById('courseCounter').innerText = courseCounter;
    });

    document.getElementById('adobe').addEventListener('click', function() {
        courseCounter++;
        document.getElementById('courseCounter').innerText = courseCounter;
    });

    document.getElementById('premium').addEventListener('click', function() {
        courseCounter++;
        document.getElementById('courseCounter').innerText = courseCounter;
    });

    function updateChart() {
        const ctx = document.getElementById('courseChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Courses Clicked'],
                datasets: [{
                    label: 'Total Clicks',
                    data: [courseCounter],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
</script>

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>