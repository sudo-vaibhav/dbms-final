<?php
    if(isset($_POST['add_prisoner'])){
        require 'dbh.inc.php';
        $pid=$_POST['add_pid'];
        $firno=$_POST['add_firno'];
        echo $pid."<br>";
        echo $firno."<br>";
        if(empty($pid)||empty($firno)){
            header("Location: ../fir_update.php?error=emptyfields");
            exit();
        }else{
            $sql="INSERT INTO against (Fir_no,Prisoner_id)VALUES(?,?)";
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../fir_update.php?error=sqlerror");
                exit();
            }else{
                mysqli_stmt_bind_param($stmt,"ii",$firno,$pid);
                mysqli_stmt_execute($stmt);
                header("Location: ../fir_update.php?error=success");
                exit();
            }

        }


    }
    /*
    elseif(isset($_POST['remove_prisoner'])){
        require 'dbh.inc.php';
        $rpid=$_POST['remove_pid'];
        $rfirno=$_POST['remove_firno'];
        echo $rpid."<br>";
        echo $rfirno."<br>";
        if(empty($rpid)||empty($rfirno)){
            header("Location: ../fir_update.php?error=emptyfields");
            exit();
        }else{
            $sql="DELETE * FROM against WHERE Fir_no=? AND Prisoner_id=?";
            $stmt=mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../fir_update.php?error=sqlerror");
                exit();
            }else{
                mysqli_stmt_bind_param($stmt,"ii",$rfirno,$rpid);
                mysqli_stmt_execute($stmt);
                header("Location: ../fir_update.php?error=successr");
                exit();
            }



        }

    }*/
    else{
        header("Location: ../failure.php");
        exit();
    }