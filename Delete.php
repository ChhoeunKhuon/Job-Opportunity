<?php
    include('includeFiles/dbCon.php');
    $sfId = $_GET["fdId"];
    $qwAll = 'DELETE FROM tblcareer WHERE id='.$sfId;
    $rwAll = $dbCon->query($qwAll);

    if (mysqli_query($dbCon, $qwAll)){
        echo '<div style="background-color:rgba(0,0,0,0.7); width:500px;text-align:center; height:300px; margin:5rem auto;border-radius:6px;">
        <h1 style="color: red;">A Row Has Been Deleted.</h1>
        <button><a href="Edit.php">Return</a></button><p style="color:white;font-size:20px;">លុបធ្វើអី</p></div>';
    }else{
        echo '<div style="background-color:rgba(0,0,0,0.7); width:500px;text-align:center; height:300px; margin:5rem auto;border-radius:6px;">
        <h1 style="color: red;">Error Haha</h1>
        <button><a href="Edit.php">Return</a></button><p style="color:white;font-size:20px;">លុបអត់ចេញហាហា</p></div>';
    }
?>