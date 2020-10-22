<?php
    require 'header.php';
    if(isset($_SESSION['userUidOfficer'])){

    include_once 'includes/dbh.inc.php';
    //require'header.php';
    }else{
        header("Location: ./failure.php");
        exit();
    }

    //require 'header.php';
    //if(isset($_SESSION['userUidOfficer'])){
    $sql="SELECT S.Section_id,S.Section_name,S.Jailor_id,P.Prisoner_id  FROM section as S 
    INNER JOIN  prisoner as P ON S.Section_id=P.Section_id";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
/*
    $sql2="SELECT * FROM officer_phone;";
    $result2=mysqli_query($conn,$sql);
    $resultCheck2=mysqli_num_rows($result2);
*/
    if($resultCheck  > 0){?>
  <style>.foot{padding-top:55px;}</style>

  <section class="text-gray-700 body-font relative">
  <h1 class="text-3xl text-center">
            Sections present in the prison
        </h1> 
    <div class="container text-center px-5 my-5 mx-auto">
        <div class="flex items-center justify-center bg-gray-50 pt-12 pb-56 px-4 sm:px-6 lg:px-8">
       
        <table class="table-fixed">
            <thead>
              <tr>
                <th class="w-1/6 px-7 py-2">Section ID</th>
                <th class="w-1/6 px-7 py-2">Section Name</th>
                <th class="w-1/6 px-7 py-2">Jailor ID</th>
                <th class="w-1/6 px-7 py-2">Prisoner ID</th>


              </tr>
            </thead>
            <tbody>
        <?php
         while($row=mysqli_fetch_assoc($result)){ ?>
            
            
              <tr>
                <td class="border px-4 py-2"><?php echo"SEC".$row['Section_id']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['Section_name']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo"JAI".$row['Jailor_id']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo"PRI".$row['Prisoner_id']."<br>";?></td>
              </tr>
             
       


        <?php }?>
        </tbody>
        </table>



    <?php }
   ?>
   
    </div>
    

  </div>
  
    
</section>
<?
   $sql="SELECT S.Section_id,S.Section_name,S.Jailor_id,count(P.Prisoner_id) C  FROM section as S 
    INNER JOIN  prisoner as P ON S.Section_id=P.Section_id";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
/*
    $sql2="SELECT * FROM officer_phone;";
    $result2=mysqli_query($conn,$sql);
    $resultCheck2=mysqli_num_rows($result2);
*/
    if($resultCheck  > 0){?>
  <style>.foot{padding-top:55px;}</style>

  <!--<section class="text-gray-700 body-font relative">
  <h1 class="text-3xl text-center">
            Number of prisoners present in each section
        </h1> 
    <div class="container text-center px-5 my-5 mx-auto">
        <div class="flex items-center justify-center bg-gray-50 pt-12 pb-56 px-4 sm:px-6 lg:px-8">
       
        <table class="table-fixed">
            <thead>
              <tr>
                <th class="w-1/6 px-7 py-2">Section ID</th>
                <th class="w-1/6 px-7 py-2">Section Name</th>
                <th class="w-1/6 px-7 py-2">Jailor ID</th>
                <th class="w-1/6 px-7 py-2">Number of Prisoners</th>


              </tr>
            </thead>
            <tbody>
        <?php
         while($row=mysqli_fetch_assoc($result)){ //print_r($row) ?>
            
            
              <tr>
                <td class="border px-4 py-2"><?php echo"SEC".$row['Section_id']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['Section_name']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo"JAI".$row['Jailor_id']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['C']."<br>";?></td>
              </tr>
             
       


        <?php }?>
        </tbody>
        </table>



    <?php }
   ?>-->

<footer class="foot">
<?php
 require'footer.php';?>
</foooter>
