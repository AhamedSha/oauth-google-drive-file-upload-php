<?php
require "init.php";
if (!isset($_SESSION['user'])) {
    header("location: login.php");
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile Informations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mx-auto">
                <div class="card shadow my-5 p-3">
                    <div class="card-body">
                        <h5 class="card-title text-center">User Profile</h5>
                        <hr class="my-4">
                        <div class="mt-3 mb-3">
                            <label><b>First Name</b></label><br>
                            <label><?php echo $user->firstName ?></label><br><br>
                    
                            <label ><b>Last Name</b></label><br>
                            <label><?php echo $user->lastName ?></label><br><br>
                    
                            <label ><b>Email Address</b></label><br>
                            <label><?php echo $user->emailAddress ?></label><br><br>
                    
                            <label ><b>Headline</b></label><br>
                            <label><?php echo $user->headline ?></label><br><br>
                    
                            <a href="logout.php" class="btn btn-danger">Log out</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>