<?php
include "connect.php";
session_start();
$email = $_SESSION['email'];
$select = mysqli_query($conn,"SELECT * FROM `sign` WHERE `email` = '$email'");
$signin = mysqli_fetch_assoc($select);

$message = '';
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $picture = $_FILES['picture']['name'];
    $tmp_picture = $_FILES['picture']['tmp_name'];

    $update = mysqli_query($conn,"UPDATE `sign` SET `name`='$name',`password`='$password',`picture`= '$picture' WHERE `email` = '$email'");
    // $sent = mysqli_fetch_assoc($update);

    if($update){
        header("location: dashboard.php");
    }else{
        echo "Error";
    }
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/93483deb2b.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="set.css">  
</head>
<style>
    .cir img{
  width: 40px;
  height: 40px;
  object-fit: cover;
  border-radius: 50%;
}
.give,.cha{
    width: 100%;
    height: 45px;
    background-color: black;
    color: white;
}
form input{
    width: 100%;
    height: 55px;
    border: 2px solid black;
    padding: 20px !important; 
}
.fine input{
    padding: 7px !important;
}
.shad img{
    width: 100%;
    height: 500px;
    object-fit: cover;
    border-radius: 10px;
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
                        <div class="contain">
                         <div class="d-flex text-center
                         align-items-center py-2 gap-2">
                         <i class="fa-solid fa-gear fs-3 text-center "></i>
                            <h4 class="mt-2">SETTINGS</h4>
                         </div>
                            
                           <div class="pami my-4">
                                <div class="row g-4">
                                    <div class="col col-lg-4 col-md-4 col-12">
                                        <div class="rounded-4 p-3 shad">
                                          <div class="text-center "><img src="upload/<?php echo $signin['picture']?>" alt=""></div>
                                          <div>
                        
                                          </div>
                                        </div>
                                         
                                    
                                    </div>

                                    <div class="col col-lg-8 col-md-8 col-12">
                                        <div class="lead rounded-4 shad p-3">
                                            <h4>Edit User Details</h3>
                                            <div>
                                                <form action="" class="fine" method="post" enctype="multipart/form-data">
                                                    <div class="mt-3">
                                                        <label for="name">Name:</label> <br>
                                                        <input type="text" name="name" placeholder="<?php echo $signin['name']?>" class="rounded-2 p-1">
                                                    </div>

                                                    <div class="mt-3">
                                                        <label for="email">Email Address:</label> <br>
                                                        <input type="email" name="email" value="<?php echo $signin['email']?> " readonly class="rounded-2 p-1">
                                                    </div>

                                                    <div class="mt-3">
                                                        <label for="email">Password:</label> <br>
                                                        <input type="password" name="password" placeholder="<?php echo $signin['password']?>" class="rounded-2 p-1">
                                                    </div>

                                                    <div class="mt-3">                
                                                         <label for="picture">Profile picture:</label> <br>
                                                        <input type="file" name = "picture" id = "picture" class="rounded-2 p-1">
                                                       <center></center>
                                                    </div> 

                                                    <div>
                                                        <button class="btn sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN give rounded-5 mt-5" name="update">Update Profile</button>
                                                    </div>
                                                </form>
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
</body>
</html>