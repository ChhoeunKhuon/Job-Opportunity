<?php
  include ('includeFiles/dbCon.php');
  $qw = 'SELECT * FROM tblcareer where DepId=5 Order By AddedDate DESC Limit 3';
  $rw = $dbCon->query($qw);

  if ($rw->num_rows > 0)
  // output data of each row
  {
    echo '<table width="1080px" cellpadding="5px" cellspacing="5px">';
      echo '<tr>';
      while($row = $rw->fetch_assoc())
    {    
        echo '<td width="300px" style="vertical-align: middle; text-align: center;background-color:white; padding:10px; border-radius:6px;">';
        echo '<h3>'. $row["Title"] . '</h3>';
        echo '<p>Revision Date :' .$row["RevisionDate"] .'</p>';
        echo '<img src="'. $row["Image"] .'" width="280px" />';
        echo '<p>' .$row["Description"] .'</p>';
        echo '<p>Posted At :' .$row["AddedDate"] .'</p>';
        echo '<a style="color:green;" href="" >Apply Now</a>';
    }
       echo '</tr>';
    echo '</table>';
  }
  else 
      echo '0 results';
  $dbCon->close();  
?>