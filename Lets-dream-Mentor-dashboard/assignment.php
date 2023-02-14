<?php
    if(isset($_POST['submit']))
    {
        $title = $_POST['title'];
        $deadline = $_POST['deadline'];
        $description = $_POST['description'];
        // $file = $_POST['file'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_admin";

    //curl file
    // $cmd = shell_exec('curl --upload-file $file https://transfer.sh/hello.txt ');
    // $url_name = "https://instagram.com";

    // $ch_session = curl_init();

    // curl_setopt($ch_session, CURLOPT_RETURNTRANSFER, 1);

    // curl_setopt($ch_session, CURLOPT_URL, $url_name);

    // $result_url = curl_exec($ch_session);

    // echo $result_url;

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO assignment(title, deadline, description, file) VALUES ('$title','$deadline','$description','') ";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }else{
        echo "nope";
    }
  
    // close connection
    mysqli_close($con);

?>