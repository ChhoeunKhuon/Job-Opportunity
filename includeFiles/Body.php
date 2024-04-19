<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="txtfirst">
        <div class="txt">
        <h1>Why Do You Need a Career Page?</h1>
        <p class="ptext">A careers page is a section of your website dedicated to showcasing your employer brand</p>
        <p class="text">and presenting active job openings. It can be a single landing page, a microsite, or a web page.</p>
        <button id="btnfind"><i class="fa fa-edit"> Apply For Job</i></button>
        </div>
        <div class="img">
            <img src="images/interview.jpg" alt="" id="img">
        </div>
    </div>
    <h1 style=" color: green; background-color: white; width: 100%; padding: 10px; text-align: center;box-shadow: 0 5px 15px rgba(0,0,0,0.25);">Requirement</h1>
    <table style=" width: 920px; margin: 1rem auto;">
    <td style="width:920px; vertical-align: top;text-align: center">
                <h2 style=" margin-top: 20px;">Sales</h2>
                <?php include('Department/sales.php'); ?>
                <hr>
                <h2>Marketing</h2>
                <?php include('Department/Maketing.php'); ?>
                <hr>
                <h2>Finace</h2>
                <?php include('Department/Finace.php'); ?>
                <hr>
                <h2>Purchasing </h2>
                <?php include('Department/Purchasing.php'); ?>
                <hr>
                <h2>Hr </h2>
                <?php include('Department/Hr.php'); ?>
                <hr>
                <h2>Administration </h2>
                <?php include('Department/Administration.php'); ?>
                <hr>
                <h2>IT </h2>
                <?php include('Department/IT.php'); ?>
                <hr>
                <h2>Production </h2>
                <?php include('Department/Production.php'); ?>
                <hr>
                <h2>Account Department </h2>
                <?php include('Department/AccountDepartment.php'); ?>
                <hr>
                <h2>Designing Dapartment </h2>
                <?php include('Department/DesigningDapartment.php'); ?>
                <hr>
            </td>
    </table>
</body>
</html>