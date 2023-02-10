<!-- this page outputs names from sql database -->
<?php
include 'config.php';
$query = 'SELECT * FROM tbl_users';
$result = mysqli_query($conn,$query);
$feedback = mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach($feedback as $name){
    if($name['roleid']=='3'){
        $isactive = ($name['isActive'] == 0)?'Active':"Unactive";
        $mentee_name =           '  <tr >
        <th scope="row">'.$name['id'].'</th>
        <td><button type="button" class="names btn btn-secondary btn-lg" data-toggle="modal" data-target="#myModal">'.$name['name'].'</button></td>
        <td>'.$isactive.'</td>
      </tr> ';
echo $mentee_name;
    }
   
}

?>
