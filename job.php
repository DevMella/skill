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
    <link rel="stylesheet" href="job.css">
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
    <div class=" way icons d-flex justify-content-between py-2 px-4 fixed-bottom  d-lg-none d-md-none d-block w-100">
            <div ><a href="dashboard.php"> <i class="fa-solid fa-house text-center fs-4"></i></a></div>
            <div><a href="find.php"><i class="fa-solid fa-money-bill-transfer fs-4"></i></a></div>
            <div><a href="settings.php"><i class="fa-solid fa-gear fs-4 "></i></a></div>
            <div><a href="settings.php"><i class="fa-solid fa-heart fs-4"></i></a></div>
            <div><a href="sign.php"><i class="fa-solid fa-right-from-bracket fs-4"></i></a></div>
    </div>
    <div class="all">
        <div class="sidebar d-lg-block d-md-block d-none">
            <div class="contain">
                <div class="ican">
                    <h3 class="mt-3 px-4">Skilltex.</h3>
                    <div class="add ">
                        <div class="py-2 phi">
                            <a href="dashboard.php">
                            <div class="icon d-flex gap-2  p-2 pap rounded-2 justify-content-center align-items-center">
                            <i class="fa-solid fa-house text-center "></i>
                            <h6 class="m-0 p-0 mt-1">Dashboard</h6>
                            </div>
                            </a>
                            
       
                           </div>
       
                            <div class=" phi phe">
                               <a href="find.php">
                                   <div class="d-flex icon rounded-2 gap-2 pap justify-content-center align-item-center p-3">
                                   <i class="fa-solid fa-money-bill-transfer "></i>
                                   <h6 class="m-0 p-0">Find_Passion</h6>
                                   </div>
                                </a>
                            </div>
       
                            <div class="py-2 phi phe">
                               <a href="job.php">
                                   <div class="d-flex icon p-3  rounded-2 gap-2 pap justify-content-center align-item-center">
                                   <i class="fa-solid fa-money-bill-transfer "></i>
                                   <h6 class="m-0 p-0">Job Offer</h6>
                                   </div>
                                </a>
                            </div>
                            
       
                            <div class=" phi phe">
                               <a href="settings.php">
                                   <div class="d-flex icon p-3 rounded-2 gap-2 pap justify-content-center align-item-center">
                                   <i class="fa-solid fa-gear "></i>
                                   <h6 class="m-0 p-0">Settings</h6>
                                   </div>
                                </a>
                            </div>
                             
                            
                            <div class="noo">
                                <div class="py-5 phi phe ">  
                                    <a href="sign.php">
                                    <div class="d-flex icon p-3 rounded-2 pap gap-2 justify-content-center align-item-center">
                                    <i class="fa-solid fa-right-from-bracket "></i>
                                    <h6 class="m-0 p-0">Logout</h3>
                                    </div>
                                    </a>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <nav class=" pat">
                <div class="contain pt-3 px-3 d-flex justify-content-end gap-4 align-items-center">
                    <div class="d-flex align-items-center  justify-content-end gap-2 ate">
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
                <div class="row rat">
                    <div class="d-flex justify-content-between wat align-items-center">
                        <h4 class="wee ">Available Jobs</h2>
                        <button class="btn-12" id="showMoreBtn" onclick="showMore()"><span>Dicover More</span></button>
                    </div>

                    <div class="box-container" id="container"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  const boxes = [];
  const contents = [
    { text: "Product Design ",text1:"Australia, Engineering", image: "image/ff629c02385f2f3a199b7e0b3065d077.jpg", icon: "fa-regular fa-heart", bat:"Internship", icons:"fa-regular fa-star", text2:"$4242" },
    { text: "Product Mackup", image: "image/950464fcbb88221fba2d72bd8e997118.jpg", icon: "fa-regular fa-heart",bat:"Contract", icons:"fa-regular fa-star",text1:"Australia, Construction" ,text2:"$4242" },
    { text: "Web Maintenance", image: "image/adb613e9a24585ae33e096dd56fa6841.jpg", icon: "fa-regular fa-heart",bat:"Full Time", icons:"fa-regular fa-star",text1:"Australia, Construction" ,text2:"$4242" },
    { text: "Front_End Developer", image: "image/9acd5af82b37d839727889176068a2ef-removebg-preview.png", icon: "fa-regular fa-heart",bat:"Hybrid", icons:"fa-regular fa-star",text1:"Lagos, Web Development" ,text2:"$4242" },
    { text: "Full_Stack Developer", image: "image/6db931827443a7455a4b805fe5829820.jpg", icon: "fa-regular fa-heart",bat:"Remote", icons:"fa-regular fa-star",text1:"Lagos, Web Development" ,text2:"$4242" },
    { text: "Graphics Designer", image: "image/950464fcbb88221fba2d72bd8e997118.jpg", icon: "fa-regular fa-heart",bat:"Contract", icons:"fa-regular fa-star",text1:"Australia, Designing" ,text2:"$4242" },
    { text: "Product Mackup", image: "image/950464fcbb88221fba2d72bd8e997118.jpg", icon: "fa-regular fa-heart",bat:"Contract", icons:"fa-regular fa-star",text1:"Australia, Construction" ,text2:"$4242" },
    { text: "UI/UX Personnel", image: "image/2ed73c8da5aa7b3f2bf704f162aded9b-removebg-preview.png", icon: "fa-regular fa-heart",bat:"Internship", icons:"fa-regular fa-star",text1:"Abuja, Designing" ,text2:"$4242" },
    { text: "Brand Strategist", image: "image/ff629c02385f2f3a199b7e0b3065d077.jpg", icon: "fa-regular fa-heart",bat:"Internship", icons:"fa-regular fa-star",text1:"Port Harcort, Management" ,text2:"$4242" },
    { text: "Project Lead", image: "image/9acd5af82b37d839727889176068a2ef-removebg-preview.png", icon: "fa-regular fa-heart",bat:"Hybrid", icons:"fa-regular fa-star",text1:"Australia, Management" ,text2:"$4242" },
    { text: "Maintenance Officer", image: "image/adb613e9a24585ae33e096dd56fa6841.jpg", icon: "fa-regular fa-heart",bat:"Full Time", icons:"fa-regular fa-star",text1:"Aja, Maintenace" ,text2:"$4242" },
    { text: "Product Mackup", image: "image/ff629c02385f2f3a199b7e0b3065d077.jpg", icon: "fa-regular fa-heart",bat:"Contract", icons:"fa-regular fa-star",text1:"Australia, Construction" ,text2:"$4242" },
  ];

  function createBox(content, isLastBox) {
    const bex = document.createElement('div');
    bex.className = 'bex';
    

    const buttone = document.createElement('button');
    buttone.textContent = content.bat;
    buttone.className = 'buttone';
    bex.appendChild(buttone);
    
    const img = document.createElement('img');
    img.src = content.image;
    bex.appendChild(img);

    const text = document.createElement('p');
    text.textContent = content.text;
    bex.appendChild(text);

    const text1 = document.createElement('h6');
    text1.textContent = content.text1;
    bex.appendChild(text1);

    const icons = document.createElement('h4');
    icons.className = `fa-regular ${content.icons} icons`;
    bex.appendChild(icons);
    const iconss = document.createElement('h4');
    iconss.className = `fa-regular ${content.icons} icons`;
    bex.appendChild(iconss);
    const iconsss = document.createElement('h4');
    iconsss.className = `fa-regular ${content.icons} icons`;
    bex.appendChild(iconsss);
    const iconssse = document.createElement('h4');
    iconssse.className = `fa-regular ${content.icons} icons`;
    bex.appendChild(iconssse);
    const iconsse = document.createElement('h4');
    iconsse.className = `fa-regular ${content.icons} icons`;
    bex.appendChild(iconsse);
    
    const text2 = document.createElement('h5');
    text2.textContent = content.text2;
    bex.appendChild(text2);


      const buttons = document.createElement('a');
      buttons.textContent = 'Register';
      buttons.href = 'https://www.fiverr.com/';
      buttons.target = '_blank'
      buttons.className = 'buttons';
      bex.appendChild(buttons);

    return bex;
  }
  for (let i = 0; i < 4; i++) {
    const box = createBox(contents[i]);
    boxes.push(box);
    document.getElementById('container').appendChild(box);
    box.style.display = 'block';
  }


  let currentIndex = 4;

  function showMore() {
    document.getElementById('container').innerHTML = '';


    for (let i = currentIndex; i < currentIndex + 4; i++) {
      const indexToShow = i % contents.length;
      const box = createBox(contents[indexToShow]);
      boxes.push(box);
      document.getElementById('container').appendChild(box);
      box.style.display = 'block';
    }

    currentIndex += 4;

    if (currentIndex >= contents.length) {
      currentIndex = 0;
    }
  }
</script>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>