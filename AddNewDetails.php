<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Information</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <table style="width:1280px">
        <tr>
            <td style="width:920px; vertical-align: top">
            <?php
       $img = $_FILES["fImg"]["name"];
        $rand = rand();
        $imgU = $rand.$img;
        $path = "Images/".$imgU;
        move_uploaded_file($_FILES['fImg']['tmp_name'],$path);
        $indate = date('Y/m/d H:m:s');

        include('includeFiles/dbCon.php');
 
        $queryAdd = 'Insert into tblcareer (Title, DepId, Description, RevisionDate, Image, AddedDate) Values("'.$_POST["txtTitle"].'", "'.$_POST["DepType"].'", "'.$_POST["txtDes"].'","'.$_POST["txtRev"].'", "'. $path .'", "'. $indate .'")';
        //Check From Here  
        if (mysqli_query($dbCon, $queryAdd)) {
          echo '<h1>The Post Summary !!!</h1>';
          echo 'Your Post Has Been Successfully!';   
          $qTop ='select * from tblcareer Order By AddedDate DESC Limit 1';
          $rTop = $dbCon->query($qTop);
          if($rTop->num_rows > 0)
          while($row = $rTop->fetch_assoc()){
        echo'<br> Posted Id : '.$row["Id"];
        echo'<br> Posted Title : '.$row["Title"];
        echo'<br> Posted Dapartment : '.$row["DepId"];
        echo'<br> Posted description : '.$row["Description"];
        echo'<br> Posted RevisionDate : '.$row["RevisionDate"];
        echo'<br> Posted Image:<br><img src="'.$row["Image"].'"/><br>';
        }
        } 
        else 
          echo "Error: " . $queryAdd . "<br>" . mysqli_error($dbCon);
        echo 'Thank You!!!';
    $dbCon->close();
  ?>
                    </br>
                    <a href="Post.php" class="a">Add more</a>
            </td>
        </tr>
    </table>
</body>

</html>