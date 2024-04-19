<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/list.css">
  <title>List</title>
</head>
<body>
  <script src="deleteCf.js" defer></script>

<?php
  include ('dbCon.php');
  $qwAll = 'SELECT * FROM tbldep td INNER JOIN tblcareer tc ON td.DepId=tc.DepId ORDER BY AddedDate ASC';
  $rwAll = $dbCon->query($qwAll);
  if ($rwAll-> num_rows > 0)
  // output data of each row
  {
    echo '<table width="100%" cellpadding="5px" cellspacing="5px" style="margin-top: 2rem;">';
      echo '<tr style="border-color: cadetblue; border: medium">';
        echo '<b><th class="font"> Id </th>';
        echo '<th class="font"> Title </th>';
        echo '<th class="font"> Department </th>';
        echo '<th class="font"> Description </th>';
        echo '<th class="font"> RevisionDate </th>';
        echo '<th class="font"> AddedDate </th>';
        echo '<th class="font"> Image </th>';
        echo '<th colspan="3"  class="font"> Editing </th> </b>';
       echo '</tr>';
    while($row = $rwAll->fetch_assoc())
    {  
      echo '<tr style="border-bottom: medium #04D5EF solid; border-top: medium #04D5EF solid">';
        echo '<td style="vertical-align: top; padding:5px">'. $row["Id"] .'</td> ';
        echo '<td style="vertical-align: top; padding:5px">'. $row["Title"] .'</td> ';
        echo '<td style="vertical-align: top; padding:5px">'. $row["Department"] .'</td> ';       
        echo '<td style="vertical-align: top; padding:5px">'. $row["Description"] .'</td> ';        
        echo '<td style="vertical-align: top; padding:5px">'. $row["RevisionDate"] .'</td> ';       
        echo '<td style="vertical-align: top; padding:5px">'. $row["AddedDate"] .'</td> ';     
        
        echo '<td style="vertical-align: top; padding:5px; text-align: center"> <img class="imgx" src="'. $row["Image"] .'" width="150px" /></td> ';
        echo('<td style="text-align: center; vertical-align: top" > <a class="btnedit" href="Update.php?fdId='.$row["Id"] . '">Edit Info</a></td>');
        echo('<td style="text-align: center; vertical-align: top" > <a class="btneditimg" href="UpdateImage.php?fdId='.$row["Id"] . '">Edit Image</a></td>');
        echo('<td style="text-align: center; vertical-align: top"> <a class="btndel" href="Delete.php?fdId='.$row["Id"] . '">Delete</a></td>');
        echo '</tr>';
    }
    echo '</table>';
  }
  else 
      echo '0 results';

  $dbCon->close();  
?>
  
  </body>
</html>