<?php
$root = "./root/";
$path = $root.$_FILES['fileToUpload']['name'];

if (isset($_POST['submit'])) {
    $file = $_FILES['fileToUpload'];
    $fileName = $_FILES['fileToUpload']['name'];
    $fileSize = $_FILES['fileToUpload']['size'];
    $fileType = $_FILES['fileToUpload']['type'];
    $fileError = $_FILES['fileToUpload']['error'];
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
    
    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $dateCreated = date("F d Y H:i:s.", filectime($fileTmpName));
    $dateModified = date("F d Y H:i:s.", filemtime($fileTmpName));

    if ($fileError === 0){
        $fileDestination = $path;

        echo __DIR__;

        $file = array(
            'name' => $fileName,
            'ext' => $fileActualExt,
            'root' => $fileDestination,
            'size' => $fileSize,
            'created' => $dateCreated,
            'modified' => $dateModified
        );
        
        if(filesize("db.json") == 0){
            $first_record = array($file);

            $data_to_save = $first_record;
        }else{
            $old_records = json_decode(file_get_contents("db.json"));

            array_push($old_records, $file);

            $data_to_save = $old_records;
        }

        if(!file_put_contents("db.json", json_encode($data_to_save, JSON_PRETTY_PRINT))){
            $error = "Error storing file, try again";
        }else{
            $success = "File is stored successfully";
        }

        move_uploaded_file($fileTmpName, $fileDestination);
        header('location: index.php');
    } else {
        echo "There was an error uploading your file!";
    }

    
}