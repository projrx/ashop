
<?php include 'include/connect.php'; ?>
<?php
               
   if (isset($_POST['login'])) {
               if (empty($_POST['username']) || empty($_POST['password'])) {
               echo "Username or Password is empty";
               }
               else
               {
               $username=$_POST['username'];
               $password=$_POST['password'];
               $username3 = stripslashes($username);
               $username2 = str_replace("<", "", $username3);
               $username1 = str_replace(">", "", $username2);
               $username = str_replace("'", "", $username1);
               $password3 = stripslashes($password);
               $password2 = str_replace("<", "", $password3);
               $password1 = str_replace(">", "", $password2);
               $password = str_replace("'", "", $password1);



               $query = mysqli_query($con,"SELECT * from users where password='$password' AND username='$username'")or die(mysqli_error($con));
               $rows = mysqli_num_rows($query);

               if ($rows == 1) {

               session_start();
               
               

               if($username=='admin'){

                  $_SESSION['admin']=$username; // Initializing Session

                    header("location:admin757/home");
               }
              else{

                  $rowsx =mysqli_query($con,"SELECT * from users where password='$password' AND username='$username' " ) or die(mysqli_error($con));
                  $n=0;

                  while($rowx=mysqli_fetch_array($rowsx)){

                    $uname = $rowx['name']; 
                    $id = $rowx['id']; 
               }
                  $_SESSION['username']=$username; // Initializing Session

                  $_SESSION['uname']=$uname; // Initializing Session
                  $_SESSION['userid']=$id; // Initializing Session



               header("location:myaccount.php"); // Redirecting To Other Page
                
               }

               } else {

               header("location:login.php?error=1"); // Redirecting To Other Page


               }
               }
               }

               ?>

