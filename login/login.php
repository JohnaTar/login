<?php
include ('connect.php');
session_start();
if (isset($_POST['username'])) {
   $username =$_POST['username'];
   $password =$_POST['password'];

   $sql = 'SELECT * FROM consoultant WHERE accountname  ="'.$username.'" AND pw ="'.$password.'" ';
   $result = mysqli_query($conn,$sql);


   if (mysqli_num_rows($result)==1) {
              $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                  $_SESSION['ses_id'];
                  $_SESSION['name'] = $row['name'];

                if ($row['division'] ==11 OR $row['division']==6 OR $row['division']==8 OR $row['division']==12 OR $row['division']==3) {
                  $_SESSION['status'] = 2;

                }else{
                  $_SESSION['status'] = 1;

                }

                   Header("Location: Attendence/pages/tables.php");

   }else{
     echo "<script>";
                     echo "alert(\" Username หรือ  Password ไม่ถูกต้อง\");";
                     echo "window.history.back()";
      echo "</script>";

   }
}





?>
