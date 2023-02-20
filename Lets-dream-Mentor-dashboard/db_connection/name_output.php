<!-- this page outputs names from sql database -->
<?php
// error_reporting(0);
// $root_folder = $_SERVER['DOCUMENT_ROOT'];
include 'config.php';
mysqli_query($conn, "DELETE FROM `recieve`  WHERE recieved = '' ");
$query = 'SELECT * FROM recieve ORDER BY id DESC LIMIT 1;';
$result = mysqli_query($conn, $query);

$feedback_display = mysqli_fetch_all($result, MYSQLI_ASSOC);


$mail = $feedback_display[0]['recieved'];

// $query_delete = 'TRUNCATE TABLE recieve' ;
// mysqli_query($conn,$query_delete);
require 'C:\xampp\htdocs\lets_dream\LOGIN_PAGE\login.php';
$query = 'SELECT * FROM mentee_table';
$result = mysqli_query($conn, $query);
$mentee_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
$query = 'SELECT * FROM mentor_table';
$result = mysqli_query($conn, $query);
$mentor_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
global $mentor_id;

foreach ($mentor_list as $mentor) {

  if ($mentor['mentor_mail'] == $mail) {
    $name = $mentor['mentor_name'];
    echo "<h2> Welcome $name </h2>";
    $mentor_id = $mentor['mentor_id'];
  }
}
foreach ($mentee_list as $name) {
  if ($mentor_id == $name['assigned_mentor_id']) {
    $isactive = ($name['isActive'] == 1) ? 'Active' : "Unactive";
    $mentee_name =           '  <tr >
        <th scope="row">' . $name['mentee_id'] . '</th>
        <td><button type="button" class="names btn btn-secondary btn-lg" data-toggle="modal" data-target="#myModal">' . $name['mentee_name'] . '</button></td>
        <td>' . $isactive . '</td>
      </tr> ';
    echo $mentee_name;
  }
}
?>