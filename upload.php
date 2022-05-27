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
            $fileDestination = 'root/' .$fileNameNew; # add fileDir

            // $image = new stdClass();
            // $image ->name = $fileNameNew;
            // $image ->ext = $fileActualExt;
            $image = array(
                'name' => $fileNameNew,
                'ext' => $fileActualExt,
                #'root' => $fileDir
            );
            // $imgJson = json_encode(array('data' => $image));
            // file_put_contents("db.json", $imgJson);
            
            if(filesize("db.json") == 0){
                $first_record = array($image);

                $data_to_save = $first_record;
            }else{
                $old_records = json_decode(file_get_contents("db.json"));

                array_push($old_records, $image);

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
    } else {
        echo "you cannot upload";
    }
}
?>