<?php
    require 'header.php';
    if(isset($_SESSION['userUidOfficer'])){

    include_once 'includes/dbh.inc.php';
    //require'header.php';
    }else{
        header("Location: ./failure.php");
        exit();
    }
    ?>
  <form action="includes/prisoner_view.inc.php" method="post">
  <section class="text-gray-700 body-font relative">
    
    <div class="container text-center px-5 my-5 mx-auto">
    <div class="flex items-center justify-center bg-gray-50 pt-12 pb-1 px-4 sm:px-6 lg:px-8">
    
    <div class="mt-1 relative rounded-md shadow-sm">
            <input
              class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base form-input block w-full px-3 h-10"
              placeholder="Enter Section id" name="sec_id"
            />
            </div>
    <div class="mt-1 relative rounded-md shadow-sm">

            <button
            name="btn" type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
          >
            Submit
          </button>
          </div>
</div>
</div>
</section>
</form>
<?php
    //require 'header.php';
    //if(isset($_SESSION['userUidOfficer'])){
    $sql="SELECT * FROM prisoner ";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck > 0){?>
  <style>.foot{padding-top:55px;}</style>

  <section class="text-gray-700 body-font relative">
    
    <div class="container text-center px-5 my-5 mx-auto">
        <div class="flex items-center justify-center bg-gray-50 pt-12 pb-56 px-4 sm:px-6 lg:px-8">
       
        <table class="table-fixed">
            <thead>
              <tr>
                <th class="w-1/4 px-4 py-2">Prisoner ID</th>
                <th class="w-1/4 px-5 py-2">First Name</th>
                <th class="w-1/4 px-5 py-2">Last Name</th>
                <th class="w-1/4 px-5 py-2">Date In</th>
                <th class="w-1/4 px-5 py-2">DOB</th>
                <th class="w-1/4 px-5 py-2">Height</th>
                <th class="w-1/4 px-5 py-2">Date Out</th>
                <th class="w-1/4 px-5 py-2">Address</th>
                <th class="w-1/4 px-5 py-2">Section ID</th>


              </tr>
            </thead>
            <tbody>
        <?php
         while($row=mysqli_fetch_assoc($result)){ ?>
            
            
              <tr>
                <td class="border px-4 py-2"><?php echo"PRI".$row['Prisoner_id']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['First_name']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['Last_name']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['Date_in']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['DOB']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['Height']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['Date_out']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['Address']."<br>";?></td>
                <td class="border px-4 py-2"><?php echo$row['Section_id']."<br>";?></td>

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
