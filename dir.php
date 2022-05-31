<?php
if($_POST){
    $folderName = $_POST['folderName'];

    $newFolder = "./root/".$folderName;

    echo $newFolder;

    if(!is_dir($newFolder)){
        mkdir($newFolder, 0777, true);
    }

    header('location: index.php');
}
