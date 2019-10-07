<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$host = "localhost";
//$root = "root";
//$password = "";
//$db = "login";
//$link = mysqli_connect($host,$root,$password,$db);
//$userid = $_POST['userid'];
//$password = $_POST['password'];
//$query = "insert into cdac values('$userid','$password')";
//mysqli_query($link,$query);

//$_session['userid'] = $userid;
//echo "bye".$_session['userid'];
//session_destroy();
//echo "Successfully logout";
//$query2 = "select * from cdac";
//$result = mysqli_query($link,$query2);
//while($row = mysqli_fetch_assoc($result))
//{
//    //print_r($row);
//    $name=$row['userid'];
//    $pass =  $row['password'];
//    echo $name;
//    echo $pass;
//    echo "<br/>";
//}





session_start();
if(isset($_SESSION['userid']))
{
     echo $_SESSION['userid'],"\t\tis Successfully logged out.";
   session_destroy();
 
}
else
{
  echo"session not started";
}
?>