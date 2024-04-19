<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table style="width:100%">
<tr>
            <td style="width:920px; vertical-align: top;">
                <form name="frmAddNew" action=".php" method="post" enctype="multipart/form-data">
                <table style="width:920px;padding:5px; font-size:20pt;margin: 5rem auto;height:500px;border: none;border-radius:6px;background-color:white;box-shadow: 0 5px 15px rgba(0,0,0,0.25);" >
                    <tr>
                        <td colspan="2" style="padding: 5px">
                            <h2 style="text-align:center; color:green"> Sign In </h2>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="width:220px; padding: 5px">Email :</td>
                        <td style="width:700px; padding: 5px">
                            <input type="text" name="txtId" style="width:650px;  font-size:20pt">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px">Password :</td>
                        <td style="padding: 5px"><input type="password" name="txtTitle" style="width:650px;  font-size:20pt"></td>
                    </tr>
                    <tr><td></td>
                        <td style="padding: 5px"><a href="register.php" style=" text-decoration:none">Forgot Password?</a></td>
                    </tr>
                    <tr>
                        <td style="padding: 5px"></td>
                        <td style="padding: 5px">
                            <!-- &nbsp;&nbsp;&nbsp;&nbsp; -->
                            <input style="width:300px; padding:5px;background-color: green;color:white;border:none;border-radius:6px" type="Submit" id="submit" name="cmdSubmint" value="Sign In">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button style="width:300px;padding:5px;background-color: orange; border:none;border-radius:6px;"><a href="" style="text-decoration:none;color: white;">Sign Up</a></button> 
                        </td>
                    </tr>
                </table>
                </form>
            </td>
        </tr>
     </table>
     
</body>
</html>