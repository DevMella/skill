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
    <link rel="stylesheet" href="not.css">
</head>
<style>
    .cir img{
  width: 40px;
  height: 40px;
  object-fit: cover;
  border-radius: 50%;
}
.ate {
    margin-right: 0px !important;
    margin-top: -10px !important;    
}
</style>
<body>
    <div class="skeleton">
        <div class=" way icons d-flex justify-content-between py-2 px-4 fixed-bottom  d-lg-none d-md-none d-block">
            <div ><a href="dashboard.php"> <i class="fa-solid fa-house text-center fs-4"></i></a></div>
            <div><a href="find.php"><i class="fa-solid fa-money-bill-transfer fs-4"></i></a></div>
            <div><a href="job.php"><i class="fa-solid fa-gear fs-4 "></i></a></div>
            <div><a href="transaction.php"><i class="fa-solid fa-heart fs-4"></i></a></div>
            <div><a href="login.php"><i class="fa-solid fa-right-from-bracket fs-4"></i></a></div>
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
                         <h6 class="m-0 p-0">Dashboard</h6>
                         </div>
                         </a>
                         
 
                        </div>

                         <div class="py-2 phi phe d-flex align-items-center justify-content-center">
                            <a href="find.php">
                                <div class="d-flex   rounded-2 gap-2 pap justify-content-center align-item-center">
                                <i class="fa-solid fa-money-bill-transfer "></i>
                                <h6 class="m-0 p-0">Find_Passion</h6>
                                </div>
                             </a>
                         </div>

                         <div class="py-2 phi phe d-flex align-items-center justify-content-center">
                            <a href="job.php">
                                <div class="d-flex   rounded-2 gap-2 pap justify-content-center align-item-center">
                                <i class="fa-solid fa-money-bill-transfer "></i>
                                <h6 class="m-0 p-0">Job Offer</h6>
                                </div>
                             </a>
                            </div>
                         

                         <div class="py-2 phi phe d-flex align-items-center justify-content-center">
                            <a href="settings.php">
                                <div class="d-flex  rounded-2 gap-2 pap justify-content-center align-item-center">
                                <i class="fa-solid fa-gear "></i>
                                <h6 class="m-0 p-0">Settings</h6>
                                </div>
                             </a>
                         </div>
                          
                         
                          <div class="add">
                            <div class=" phi py-5 phe d-flex align-items-center justify-content-center">  
                             <a href="sign.php">
                                <div class="d-flex  p-2 rounded-2 pap gap-2 justify-content-center align-item-center">
                         <i class="fa-solid fa-right-from-bracket "></i>
                         <h6 class="m-0 p-0">Logout</h6>
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
                <div class="contain pt-3 px-3 d-flex justify-content-end gap-4 align-items-center">
                    <div class="d-flex align-items-center  justify-content-end gap-2 ate">
                        <h6>Hi,<?php echo $signin['name']?></h6>
                        <div class="cir"><img src="upload/<?php echo $signin['picture']?>" alt=""></div> 
                    </div>
    
                    <div class="notification-icon d-flex align-items-center justify-content-end" onclick="window.location.href='notification.php'">
                    <span class="notification-dot" id="notificationDot"></span>
                        <i class="fa-solid fa-bell"></i>
                    </div>
                </div>
            </nav> 
 
                    <div class="main-body">
                        <div>
                            <div class="notification-container">
                                <div class="d-flex align-items-center justify-content-between you">
                                    <div class="notification-heading d-flex gap-2">
                                        Notifications
                                        <div class="unread-count d-flex align-items-center justify-content-center" id="unreadCount">2</div>
                                    </div>
                                    <div class="mark-as-read" onclick="markAllAsRead()">Mark all as read</div>
                                </div>
                                <div class="notification unread mt-4" onclick="toggleNotificationDetails(this, 2)">
                                    <div class="notification-content">
                                        <img src="image/avatar-jacob-thompson.webp" alt="User Avatar" width="30" height="30" style="margin-right: 10px;">
                                        <span>Berry's FX </span>  commented on your post
                                    </div>
                                    <span class="notification-status"></span>
                                    <div class="notification-details">
                                        <p>Berry's FX commented on your post "Greenlight to be satisfied"</p>
                                    </div>
                                </div>

                                <div class="notification unread mt-4" onclick="toggleNotificationDetails(this, 2)">
                                    <div class="notification-content">
                                        <img src="image/avatar-anna-kim.webp" alt="User Avatar" width="30" height="30" style="margin-right: 10px;">
                                        <span>Dev_manie.💪XPLUS</span> followed you
                                    </div>
                                    <span class="notification-status"></span>
                                    <div class="notification-details">
                                        <p>Dev_manie.💪XPLUS is now following you on X</p>
                                    </div>
                                </div>

                                <div class="notification unread mt-4" onclick="toggleNotificationDetails(this, 2)">
                                    <div class="notification-content">
                                        <img src="image/avatar-angela-gray.webp" alt="User Avatar" width="30" height="30" style="margin-right: 10px;">
                                        <span>Bernessa</span> liked your picture!
                                    </div>
                                    <span class="notification-status"></span>
                                    <div class="notification-details">
                                        <p>Bernessa liked your picture few minutes ago</p>
                                    </div>
                                </div>

                                <div class="notification mt-4" onclick="toggleNotificationDetails(this, 1)">
                                    <div class="notification-content">
                                        <img src="image/avatar-kimberly-smith.webp" alt="User Avatar" width="30" height="30" style="margin-right: 10px;">
                                        <span>Only1_mella</span> just shared a new video!
                                    </div>
                                    <span class="notification-status"></span>
                                    <div class="notification-details">
                                        <p>Only1_mella just shared a new video on her page</p>
                                    </div>
                                </div>

                                <div class="notification mt-4" onclick="toggleNotificationDetails(this, 1)">
                                    <div class="notification-content">
                                        <img src="image/avatar-rizky-hasanuddin.webp" width="30" height="30" style="margin-right: 10px;">
                                        <span>Judith.2443</span> shared a new testimony
                                    </div>
                                    <span class="notification-status"></span>
                                    <div class="notification-details">
                                        <p>Judith.2443 shared a new testimony on his new role at Google.</p>
                                    </div>
                                </div>

                                <div class="notification mt-4" onclick="toggleNotificationDetails(this, 1)">
                                    <div class="notification-content">
                                        <img src="image/avatar-nathan-peterson.webp" alt="User Avatar" width="30" height="30" style="margin-right: 10px;">
                                        <span>Adassa </span> share new hints for job hunt
                                    </div>
                                    <span class="notification-status"></span>
                                    <div class="notification-details">
                                        <p>Adassa shared a new hints about job hunt for job seekers</p>
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
    let openNotification = null;

    function markAllAsRead() {
        const unreadNotifications = document.querySelectorAll('.notification.unread');
        unreadNotifications.forEach(notification => {
            notification.classList.remove('unread');
            const notificationId = notification.dataset.id;
            markNotificationAsRead(notificationId);
        });
        updateUnreadCount(); 
    }

    function toggleNotificationDetails(notification, id) {
        const details = notification.querySelector('.notification-details');
        const status = notification.querySelector('.notification-status');

        if (openNotification && openNotification !== notification) {
            openNotification.querySelector('.notification-details').style.display = 'none';
            openNotification.querySelector('.notification-status').innerText = '';
            openNotification.classList.remove('unread');
        }

        details.style.display = details.style.display === 'block' ? 'none' : 'block';
        status.innerText = details.style.display === 'block' ? '' : '';

        if (notification.classList.contains('unread')) {
            notification.classList.remove('unread');
            markNotificationAsRead(id);
            updateUnreadCount(); 
        }

        openNotification = details.style.display === 'block' ? notification : null;
    }

    function updateUnreadCount() {
        const unreadCountElement = document.getElementById('unreadCount');
        const unreadNotifications = document.querySelectorAll('.notification.unread').length;
        unreadCountElement.innerText = unreadNotifications;
    }

    function markNotificationAsRead(id) {
        localStorage.setItem(`notification_${id}`, 'read');
    }

    updateUnreadCount();
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