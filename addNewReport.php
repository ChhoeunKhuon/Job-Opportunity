<?php
       $img = $_FILES["fImg"]["name"];
        $rand = rand();
        $imgU = $rand.$img;
        $path = "Images/".$imgU;
        move_uploaded_file($_FILES['fImg']['tmp_name'],$path);
        $indate = date('Y/m/d H:m:s');

        include('includeFiles/dbCon.php');
 
        $queryAdd = 'Insert into tblreport (Subject, Description, Image, ReportDate) Values("'.$_POST["txtTitle"].'", "'.$_POST["txtDes"].'", "'. $path .'", "'. $indate .'")';
        //Check From Here  
        if (mysqli_query($dbCon, $queryAdd)) {
          echo '<h1>Submitted !!!</h1>';
          echo 'Your Data :';   
          $qTop ='select * from tblreport Order By ReportDate DESC Limit 1';
          $rTop = $dbCon->query($qTop);
          if($rTop->num_rows > 0)
          while($row = $rTop->fetch_assoc()){
        echo'<br> Report Id : '.$row["Id"];
        echo'<br> Subject : '.$row["Subject"];
        echo'<br> Description : '.$row["Description"];
        echo'<br> Image:<br><img src="'.$row["Image"].'"/><br>';
        }
        } 
        else 
          echo "Error: " . $queryAdd . "<br>" . mysqli_error($dbCon);
        echo 'Thank You!!!';
    $dbCon->close();
  ?>