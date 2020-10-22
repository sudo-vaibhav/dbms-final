<?php
    if(isset($_POST['jailor_add'])){
      require 'dbh.inc.php';
      //$jailor_id=$_POST['jailor_id']; //officer id not defined in the input yet
      $f_name=$_POST['f_name'];
      $l_name=$_POST['l_name'];
      $mob_number=$_POST['mob_number'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      $cfmpassword=$_POST['cfmpassword'];

      if(empty($f_name)||empty($l_name)||empty($mob_number)||empty($username)||empty($password)||empty($cfmpassword)){   
        header("Location: ../jailor.php?error=emptyfields");
        exit();
    } else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
      header("Location: ../jailor.php?error=invaliduid&uid=".$username);
       exit();
   } else if($password !== $cfmpassword){
    header("Location: ../jailor.php?error=passwordnotmatched&uid=".$username);
    exit();
  } else{
    $sql="SELECT Jailor_uname FROM jailor WHERE Jailor_uname=?";
    $stmt=mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../jailor.php?error=sqlerror");
        exit();
        } else{
          mysqli_stmt_bind_param($stmt,"s",$username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck= mysqli_stmt_num_rows($stmt);
                if($resultCheck>0){
                    header("Location: ../jailor.php?error=sameuserexistserror");
                    exit();
                }
                else{
                  $sql1="INSERT INTO jailor (Jailor_uname, Jailor_pwd, First_name, Last_name) VALUES (?,?,?,?) ";
                          $stmt1=mysqli_stmt_init($conn);
                          if(!mysqli_stmt_prepare($stmt1,$sql1)){
                              header("Location: ../jailor.php?error=sqlerror");
                              exit();
                          }else{
                              //hashing the password:
                              mysqli_stmt_bind_param($stmt1,"ssss",$username,$password,$f_name,$l_name);
                              mysqli_stmt_execute($stmt1);
                             // header("Location: ../fir.php?insert=success");
                              //exit();
          
                          }
                          //getting the jailor id of the officer just added:
                          $sql="SELECT Jailor_id FROM jailor ORDER BY Jailor_id DESC LIMIT 1 ";
                          $result=mysqli_query($conn,$sql);
                           $jailor_id=mysqli_fetch_row($result);

                          $sql2="INSERT INTO jailor_phone (Jailor_phone,Jailor_id) VALUES (?,?)";
                          $stmt2=mysqli_stmt_init($conn);
                          if(!mysqli_stmt_prepare($stmt2,$sql2)){
                              header("Location: ../jailor.php?error=sqlerror");
                              exit();
                          }else{
                              mysqli_stmt_bind_param($stmt2,"ii",$mob_number,$jailor_id[0]);
                              mysqli_stmt_execute($stmt2);
                              header("Location: ../successjailor.php?insert=success");
                              exit();
          
                          }
                  }
        } 
      }
 }else{
        header("Location: ../jailor.php?error=clickonsignupbtnerror");
        exit();

    }


