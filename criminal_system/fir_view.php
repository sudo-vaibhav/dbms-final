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
    $sql="SELECT F.Fir_no,F.Description,F.Fir_date,F.Case_Type,F.Officer_id , A.Prisoner_id FROM Fir as F INNER JOIN Against as A ON F.Fir_no=A.Fir_no ;";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck > 0){?>
  <style>.foot{padding-top:55px;}</style>

  <section class="text-gray-700 body-font relative">
  <h1 class="text-3xl text-center">
            Details of FIR against prisoners 
        </h1> 
    <div class="container text-center px-5 my-5 mx-auto">
        <div class="flex items-center justify-center bg-gray-50 pt-12 pb-56 px-4 sm:px-6 lg:px-8">
       
        <table class="table-fixed">
            <thead>
              <tr>
                <th class="w-1/6 px-6 py-2">FIR Number</th>
                
                <th class="w-1/6 px-6 py-2">Description</th>
                <th class="w-1/6 px-6 py-2">Date of FIR</th>

                <th class="w-1/6 px-6 py-2">Case Type</th>

                <th class="w-1/6 px-6 py-2">Officer ID</th>
                <th class="w-1/6 px-6 py-2">Prisoner ID</th>


              </tr>
            </thead>
            <tbody>
        <?php
         while($row=mysqli_fetch_assoc($result)){ ?>
            
            
              <tr>
                <td class="border px-4 py-2"><?php echo$row['Fir_no']."<br>";?></td>
               
                <td class="border px-4 py-2"><?php echo$row['Description']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['Fir_date']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['Case_Type']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo"OFF".$row['Officer_id']."<br>";?></td>
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


<footer class="foot">
<?php
 require'footer.php';?>
</foooter>
