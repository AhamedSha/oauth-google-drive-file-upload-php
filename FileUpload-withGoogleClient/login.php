<?php
   

    if(isset($_SESSION['accessToken'])){
        header('Location: index.php');
        exit();
    }
  
    require_once "service.php";
    $loginURL = $client->createAuthUrl();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Google Drive File Uploading</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mx-auto">
                <div class="card shadow my-5 p-3">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login</h5>
                        <hr class="my-4">
                        <div class="mt-3 mb-3">
                            <form>
                                <input type="email" placeholder="email" name="email" class="form-control" /><br>
                                <input type="password" placeholder="password" name="password" class="form-control"  /><br>
                                <input type="button" value="Login" class="btn btn-primary form-control"/><br>
                                <input type="button" value="Login with Google" onclick="window.location ='<?php echo $loginURL ?>';" class="btn btn-danger form-control"/><br>
                            </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>