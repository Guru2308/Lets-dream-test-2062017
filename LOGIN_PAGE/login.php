<!-- redirect the user based on mentor and mentee credentials linked with db -->
<?php
include '../Lets-dream-Mentor-dashboard/db_connection/config.php';
$query = 'SELECT * FROM tbl_users';
$result = mysqli_query($conn,$query);
$feedback = mysqli_fetch_all($result,MYSQLI_ASSOC);

$email=$_POST["email"];//receiving name field value in $name variable  
$password=$_POST["password"];//receiving password field value in $password variable  
  
foreach($feedback as $user){
    
    echo '<br>';

    if($user["roleid"]==3){
        if($user["email"] == $email){
            if($user["password"] == $password){
                echo "User Logged In";
                header("Location: ../Lets-dream-Mentee-dashboard/index.html");
            }else{
                echo "Password is wrong";
            }
        }
    }elseif($user["roleid"]==2){
        if($user["email"] == $email){
            if($user["password"] == $password){
                echo "User Logged In";
                header("Location: ../Lets-dream-Mentor-dashboard/index.php");
            }else{
                echo "Password is wrong";
            }
        }
    }
    
}