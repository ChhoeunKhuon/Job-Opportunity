<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aboutus.css">
    <title>Document</title>
</head>
<body>
    <div class="abus" style="">
        <h1 class="txt">Need Help?</h1>
        <p class="txt1" style="margin-top: 10px;">Need to get in touch with us?
        <p class="txt1">Either fill out the form with your inquiry or find the department email you'd like to contact below</p>
        <a href="" style="margin-top: 10px;">Career@gmail.com</a>
    </div>
    <table style="margin: 1rem auto; width: 920px;">
    <tr>
            <td style="width:920px; vertical-align: top;">
                <form name="frmAddNew" action="addNewReport.php" method="post" enctype="multipart/form-data">
                <table style="width:920px; font-size:20pt;" >
                    <tr>
                        <td colspan="2" style="padding: 5px">
                            <h2 style="text-align: center; color: red;"> Report Now </h2>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="width:220px; padding: 5px">Report Id :</td>
                        <td style="width:700px; padding: 5px">
                            <input type="text" name="txtId" style="width:650px;  font-size:20pt">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Subject :</td>
                        <td style="padding: 5px"><input type="text" name="txtTitle" style="width:650px;  font-size:20pt"></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Description :</td>
                        <td style="padding: 5px"><textarea rows="8" style="font-size:20pt; width:650px; height:300px; max-width: 650px; max-height: 300px;" name="txtDes" type="text"></textarea>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Choose Image :</td>
                        <td style="padding: 5px"><input type="file" name="fImg" style="font-size:20pt"></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px"></td>
                        <td style="padding: 5px">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Submit" id="submit" name="cmdSubmint" value="Submit" class="submit">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="Reset" id="reset" name="cmdReset" value="Cancel" class="cancel"> 
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