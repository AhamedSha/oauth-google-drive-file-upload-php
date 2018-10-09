<?php
    require_once "init.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in with LinkedIn</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body >
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mx-auto">
                <div class="card shadow my-5 p-3">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login</h5>
                        <hr class="my-4">
                        <div class="mt-3 mb-3 col-md-offset-3">
                            <div>
                                <form>
                                    <input type="email" placeholder="email" name="email" class="form-control" /><br>
                                    <input type="password" placeholder="password" name="password" class="form-control"  /><br>
                                    <input type="button" value="Login" class="btn btn-danger form-control"/><br>
                                   
                                </form>
                            </div><br/>
                            <div>
                            <a class="btn btn-primary form-control" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>">Sign in with LinkedIn</a>
                            </div>                     
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
   
</body>
</html>