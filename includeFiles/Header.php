<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Header.css">
    <title>Header</title>
</head>
<style>
    .user-logo{
        padding: 5px;
        margin-right: 10px;
        font-size: 25px;
    }
    .user-logo a{
        text-decoration: none;
    }
</style>
<body>
<nav class="navbar">
        <div class="img">
            <img src="images/career.png" alt="" class="logo">
        </div>
        <ul class="wrapper">
            <li class="list"><a href="Home.php">Home</a></li>
            <li class="list"><a href="#">Post</a>
        <ul class="dropdown">
            <li class="lista"><a href="Post.php">Post Your Required</a></li>
            <li class="lista"><a href="Edit.php">Edit Your Post</a></li>
        </ul>
        </li>
        <li class="list"><a href="Posted.php">View All</a></li>
            <li class="list"><a href="AboutUs.php">About Us</a></li>
        </ul>
        <div class="user-details">
            <br>
            <p class="user-logo"><a href="loginForm.php" class="fa fa-user-circle"></a></p>
        </div>
    </nav>
</body>
</html>