<?php
    
    require_once 'service.php';

    if(!isset($_SESSION['accessToken'])){
        header('Location: login.php');
        exit();
    }

if (!empty($_POST)) {

    $files = $_FILES['uploadedfile']['name'];

    $client->setAccessToken($_SESSION['accessToken']);
    $service = new Google_DriveService($client);
    $fileMetadata = new Google_DriveFile(array(
        'name' => $_FILES['uploadedfile']['name']));

    $fileMetadata->setTitle($_FILES['uploadedfile']['name']);
    $content = file_get_contents($_FILES['uploadedfile']['tmp_name']);
    $file = $service->files->insert($fileMetadata, array(
        'data' => $content,
        'mimeType' => $_FILES['uploadedfile']['type'],
        'uploadType' => 'multipart',
        'fields' => 'id'));
    
        echo 'Done';

    // header('location:'.$url);
    // exit;
        
    }
?>
<!-- <!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Google Drive File Uploading</title>
    </head>
    <body>

        <form method="post" action="?" enctype="multipart/form-data">
        <label for="uploadedfile">Filename:</label>
        <input type="file" name="uploadedfile" id="uploadedfile" />
            <input type="submit" value="Submit" name="submit">
            <input type="button" value="Logout" onclick="window.location ='Location: logout.php'" class="btn btn-danger form-control"/><br>
        </form>
    
    </body>
</html> -->
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
            <div class="col-md-6 col-offset-3" align="center">
                <form method="post" action="?" enctype="multipart/form-data">
                    <label for="uploadedfile" class="form-control">Filename:</label>
                    <input type="file" name="uploadedfile" id="uploadedfile" class="form-control" /><br/>
                    <input type="submit" value="Submit" name="submit" class="form-control btn btn-primary"><br/>
                    <input type="button" value="Logout" onclick="window.location ='Location: logout.php'" class="btn btn-danger form-control"/><br>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>