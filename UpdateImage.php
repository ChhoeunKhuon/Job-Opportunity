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
            <td colspan="1">
                <?php include('includeFiles/header.php'); ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width:900px; vertical-align: top">
               <form name="frmUpdate" action="includeFiles/qurUpdateImage.php" method="post" enctype="multipart/form-data">
                <table style="width: 900px; font-size:20pt;margin: 1rem auto;">
                    <tr>
                        <td style="width:100%;">
                            <h3 > Updating New Image </h3>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="width:920px;padding: 5px"><input type="text" name="txtId" hidden="true"  style="width:650px;  font-size:20pt" value=<?php echo $row["Id"]; ?> ></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">
                            <font size="+2">
                          <?php echo $row["Title"]; ?> 
                            </font></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">
                            <img name="imgCur" src="<?php echo $row["Image"]; ?>" /> 
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px"><input type="file" name="imgUpdate" style="width:650px;  font-size:20pt"></td>
                    </tr>
                    
                    
                    <tr>
                        <td style="padding: 5px">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Submit" name="cmdSubmit" value="Submit" class="submit">
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