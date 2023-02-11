<!-- redirect the user based on mentor and mentee credentials linked with db -->
<?php
session_start();
include '../Lets-dream-Mentor-dashboard/db_connection/config.php';
$query = 'SELECT * FROM tbl_users';
$result = mysqli_query($conn,$query);
$feedback = mysqli_fetch_all($result,MYSQLI_ASSOC);

$email=$_POST["email"];//receiving name field value in $name variable  
$password=$_POST["password"];//receiving password field value in $password variable  

// status creation
<?php
  if(isset($_SESSION['status'])){
?>
<div class="alert alert-success">
  <h5><?=$_SESSION['status']; ?></h5>
</div>
<?php
  unset($_SESSION['status']); 
}
?>
<!--  -->
  
foreach($feedback as $user){
    
    echo '<br>';

    if($user["roleid"]==3){
        if($user["email"] == $email){
            if($user["password"] == $password){
                echo "User Logged In";
                header("Location: ../Lets-dream-Mentee-dashboard/index.html");
            }else{
                $_SESSION['status'] = "Password is wrong";
            }
        }
    }elseif($user["roleid"]==2){
        if($user["email"] == $email){
            if($user["password"] == $password){
                echo "User Logged In";
                header("Location: ../Lets-dream-Mentor-dashboard/index.php");
            }else{
                $_SESSION['status'] = "Password is wrong";
            }
        }
    }
    
}
