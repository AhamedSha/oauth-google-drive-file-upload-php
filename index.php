<?php
    
    session_start();
    require_once 'service.php';
   
    // $url_array = explode('?', 'http://'.$_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    // $url = $url_array[0];

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
<!DOCTYPE html>
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
</html>