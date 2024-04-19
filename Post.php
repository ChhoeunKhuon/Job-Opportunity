<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/Post.css">
<title>VisitCambodia</title>
</head>
<body>
    <table style="width:100%">
        <tr>
            <td colspan="2">
                <?php include('includeFiles/header.php'); ?>
            </td>
        </tr>
        <tr>
            <td style="width:920px; vertical-align: top;">
                <form name="frmAddNew" action="AddNewDetails.php" method="post" enctype="multipart/form-data">
                <table style="width:920px; font-size:20pt;margin: 0rem auto;" >
                    <tr>
                        <td colspan="2" style="padding: 5px">
                            <h2> Add New Information </h2>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="width:220px; padding: 5px">Career Id :</td>
                        <td style="width:700px; padding: 5px">
                            <input type="text" name="txtId" style="width:650px;  font-size:20pt">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Title Name :</td>
                        <td style="padding: 5px"><input type="text" name="txtTitle" style="width:650px;  font-size:20pt"></td>
                    </tr>
                    <tr>
                    <td style="padding: 5px">Dep Name :</td>
                        <td style="padding: 5px" >
                        <?php
                                include('includeFiles/SelectTable.php');
                                if($rtt->num_rows > 0) {
                                    echo'<select name="DepType" style="width:150px">';
                                    while($row = $rtt->fetch_assoc()) 
                                    echo('"<option value="'.$row["DepId"].'">'.$row["Department"].'</option>"');
                                    echo '</select>';
                                   } else {
                                    echo'0 resutls';
                                   }
                                ?>
                    </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">description :</td>
                        <td style="padding: 5px"><textarea rows="8" style="font-size:20pt; width:650px; height:300px; max-width: 650px; max-height: 300px;" name="txtDes" type="text"></textarea>
                    </tr>
                    <tr>
                        <td style="padding: 5px">RevisionDate :</td>
                        <td style="padding: 5px"><input type="date" name="txtRev" style="width:650px;  font-size:20pt"></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Choose Image :</td>
                        <td style="padding: 5px"><input type="file" name="fImg" style="font-size:20pt"></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px"></td>
                        <td style="padding: 5px">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Submit" id="submit" name="cmdSubmint" value="Submit">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Reset" id="reset" name="cmdReset" value="Cancel"> 
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
</body>
</html>