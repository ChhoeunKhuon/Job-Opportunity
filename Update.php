<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/Update.css">
<title>Untitled Document</title>
    <?php
        include('includeFiles/dbCon.php');
        $sfId = $_GET["fdId"];
        $qwAll = 'SELECT * FROM tblcareer WHERE id='.$sfId;
        $rwAll = $dbCon->query($qwAll);
        $row = $rwAll->fetch_assoc();
    ?>
</head>
<body>
<center>
    <table style="width:100%">
        <tr>
            <td colspan="2">
                <?php include('includeFiles/header.php'); ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width:1200px; vertical-align: top">
               <form name="frmUpdate" action="includeFiles/qurUpdatePro.php" method="post" enctype="multipart/form-data">
                <table style="width:920px; font-size:20pt;margin: 0rem auto;">
                    <tr>
                        <td colspan="2" style="padding: 5px">
                            <h2> Updating Data</h2>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="width:220px;padding: 5px">
                        <td style="width:700px;padding: 5px"><input type="text" name="txtId" hidden="true"  style="width:650px;  font-size:20pt" value=<?php echo $row["Id"]; ?> ></td>
                    </tr>
                    <tr>
                        <td style="width:220px;padding: 5px">Title Name :</td>
                        <td style="width:700px;padding: 5px"><input type="text" name="txtTitle" value=<?php echo $row["Title"]; ?> style="width:650px;  font-size:20pt"></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Dep Name :</td>
                        <td style="padding: 5px">
                          <?php
                            include('includeFiles/SelectTable.php');
                            if ($rtt->num_rows > 0)
                            {
                                echo '<select name="CatType" style="width: 150px">';
                                while($roft = $rtt->fetch_assoc())
                                echo ('"<option value="'.$roft["DepId"].'">'.$roft["Department"].'</option>"');
                                echo '</select>';
                            }
                            else 
                                echo "0 results";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Description :</td>
                        <td style="padding: 5px"><textarea rows="8" style="font-size:20pt; width:650px; height:300px; max-width: 650px; max-height: 300px;" name="txtDes" type="text" value=<?php echo $row["Description"]; ?>></textarea>
                    </tr>
                    <tr>
                        <td style="padding: 5px">RevisionDate :</td>
                        <td style="padding: 5px"><input type="date" name="txtRev" style="width:650px;  font-size:20pt" value=<?php echo $row["RevisionDate"]; ?>></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px"></td>
                        <td style="padding: 5px">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Submit" name="cmdSubmint" value="Submit" class="submit">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Reset" name="cmdReset" value="Cancel" class="cancel"> 
                        </td>
                    </tr>
                </table>
                </form>
            </td>
        </tr>
    </table>
    <tr>
            <td style="width:100%;">
              <?php include('includeFiles/footer.php') ?>
            </td>
        </tr>
</center>
</body>
</html>