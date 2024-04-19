<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/data.css">
    <title>Data</title>
</head>
<body>
  <h1>All Post</h1>
<?php
  include ('dbCon.php');
  $qw = 'SELECT * FROM tblcareer Order By AddedDate DESC';
  $rw = $dbCon->query($qw);

  if ($rw->num_rows > 0)
  // output data of each row
  {
    echo '<table width="800px" cellpadding="5px" cellspacing="5px" style="margin:2rem auto; background-color:white; border-radius:6px;">';
    while($row = $rw->fetch_assoc())
    {    
        echo '<tr style=" height: auto;">';
        echo '<td width="900px" style="vertical-align: middle; text-align: center;  height: 500px; border: 1px solid red;">';
        echo '<h1 style=" color: red;">Job Opportunity</h1>';
        echo '<p style="margin-top:1rem;">Title :'. $row["Title"] .'</p>';
        echo '<p>Revision Date :'. $row["RevisionDate"] .'</p>';
        echo '<img style="margin-top:1rem; border-radius: 5px; box-shadow: 0 5px 15px rgba(0,0,0,0.25);" src="'. $row["Image"] .'" width="500px" /></a>';
        echo '<p>'. $row["Description"] .'</p>';
        echo '<p>Posted At :'. $row["AddedDate"] .'</p>';
        echo '<a style="color:green;" href="" >Apply Now</a>';
        echo '</td>';
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