<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['fileToUpload'];
    $fileName = $_FILES['fileToUpload']['name'];
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
    $fileSize = $_FILES['fileToUpload']['size'];
    $fileError = $_FILES['fileToUpload']['error'];
    $fileType = $_FILES['fileToUpload']['type'];

    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));

    $allowed = array('jpg', 'pdf', 'png', 'doc', 'csv', 'jpeg', 'txt', 'ppt', 'odt', 'zip', 'rar', 'exe', 'svg', 'mp3', 'mp4');

    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            $fileNameNew=uniqid('',true).".".$fileActualExt;
            $fileDestination = 'root/' .$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
        } else {
            echo "There was an error uploading your file!";
        }
    } else {
        echo "you cannot upload";
    }
}
?>