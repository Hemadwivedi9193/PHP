<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo "<table>";
//echo "<tr><th>USER_ID</th>  <th>PASSWORD</th>";
//echo 'USER_ID :  '; echo $_POST['userid'];
//echo "<br/>";
//echo 'PASSWORD :   '; echo $_POST['password'];
$host = "localhost";
$root = "root";
$password1 = "";
$db = "login";
$link = mysqli_connect($host,$root,$password1,$db);
$userid = $_POST['userid'];
$password = $_POST['password'];
$query = "select * from cdac";
//$p = "select password from cdac where userid=$password";
$result = mysqli_query($link, $query);

    while($row = mysqli_fetch_assoc($result)){
        if($row['userid']==$userid && $row['password'] == $password){
           
                session_start();
                $_SESSION["userid"] = $userid;
                echo "login successfully<br/><br/>";
                echo "hello\t ".$_SESSION['userid'];
                echo "<form action = 'page3.php' method = 'POST'>";
               // echo "<label>Hello".$_session['userid'];
                echo"<input type = 'submit' value = 'logout' name = 'out'/>";
                 echo "</form>";  
         
        }
       
        } 
        
//     if($row['userid']!=$userid && $row['password']!= $password){
//         echo "user does not exist";
//     }



    

?>
