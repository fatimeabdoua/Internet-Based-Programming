<?php

$server_name="localhost";

$username="root";

$password="";

$database_name="database123";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
//For inserting the values to mysql database 
    $sql_query = "INSERT INTO students (id,full_name,gender,email)
    VALUES ('$id','$full_name','$gender','$email')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "students inserted successfully !";
    }
    else
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }  {
	  
    mysqli_close($conn);
}
?>


