<?php
    if(isset($_POST['fir_prisoner_add'])){
        require 'dbh.inc.php';
        $fir_no=$_POST['fir_no'];
        $date_fir=$_POST['date_fir'];
        $crime_done=$_POST['crime_done'];
        $officer_id=$_POST['officer_id'];
        $description=$_POST['description'];
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $date_in=$_POST['date_in'];
        $date_out=$_POST['date_out'];
        $dob=$_POST['dob'];
        $height=$_POST['height'];
        $addr=$_POST['addr'];
        $section_id=$_POST['section_id'];
        $status_inout='in';

        if(empty($fir_no)||empty($date_fir)||empty($crime_done)||empty($officer_id)||empty($description)||empty($f_name)||empty($l_name)||empty($date_in)||empty($date_out)||empty($dob)||empty($height)||empty($addr)||empty($section_id)){
              
            
            header("Location: ../fir.php?error=emptyfields");
            exit();
        }else{
                $sql1="INSERT INTO Fir(Fir_no,Description,Fir_date,Case_type,Officer_id) VALUES
                (?,?,?,?,?) ";
                $stmt1=mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt1,$sql1)){
                    header("Location: ../fir.php?error=sqlerror");
                    exit();
                }else{
                    
                    mysqli_stmt_bind_param($stmt1,"sssss",$fir_no,$description,$date_fir,$crime_done,$officer_id);
                    mysqli_stmt_execute($stmt1);
                   // header("Location: ../fir.php?insert=success");
                    //exit();

                }
                $sql2="INSERT INTO Prisoner(First_name,Last_name,Date_in,Dob,Height,Date_out,Address,Section_id,Status_inout) VALUES
                (?,?,?,?,?,?,?,?,?) ";
                $stmt2=mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt2,$sql2)){
                    header("Location: ../fir.php?error=sqlerror");
                    exit();
                }else{
                   
                    mysqli_stmt_bind_param($stmt2,"ssssissis",$f_name,$l_name,$date_in,$dob,$height,$date_out,$addr,$section_id,$status_inout);
                    mysqli_stmt_execute($stmt2);
                   // header("Location: ../successfir_prisoner.php?insert=success");
                    //exit();

                }
                //getting the prioner id from the latest entry in the prisoner table;
                $sql="SELECT Prisoner_id FROM Prisoner ORDER BY Prisoner_id DESC LIMIT 1 ";
                $result=mysqli_query($conn,$sql);
                //$resultCheck=mysqli_num_rows($result);
                //$row=mysqli_fetch_array($result);
                //print_r($row);
                //$res = array();
                //$res=$row[$resultCheck];
                //echo $resultCheck ."<br>";
                $res=mysqli_fetch_row($result);
                //echo $res[0]."<br>";
                //echo $fir_no ;
               // echo $res;
                //inserting firno and prisoner id into against table:
              
              $sql3="INSERT INTO Against(Fir_no,Prisoner_id) VALUES
                (?,?) ";
                $stmt3=mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt3,$sql3)){
                    header("Location: ../fir.php?error=sqlerror");
                    exit();
                }else{
                    
                    mysqli_stmt_bind_param($stmt3,"ii",$fir_no,$res[0]);
                    mysqli_stmt_execute($stmt3);
                    header("Location: ../successfir_prisoner.php?insert=success");
                    exit();

                }
                           


        }
    }