<?php
        $img = $_FILES["imgUpdate"]["name"];
        $rand = rand();
        $imgU = $rand.$img;
        $path = "Images/".$imgU;
        $path1 = "../Images/".$imgU;
        move_uploaded_file($_FILES['imgUpdate']['tmp_name'], $path1);

           include('dbCon.php');
            $sfId = $_POST["txtId"];
            $queryUpdate = 'Update tblcareer SET 
            Image = "'.$path. '"WHERE Id="'.$sfId.'"';

            if (mysqli_query($dbCon, $queryUpdate)) {
                $dbCon->close();
                header("location:../Edit.php");
            } 
            else 
                echo "Error: " . $queryUpdate . "<br>" . mysqli_error($dbCon);

            echo '<br/><br> Thank You!!!';
    $dbCon->close();
  ?>