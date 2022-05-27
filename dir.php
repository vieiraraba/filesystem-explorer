<?php
    #$folderName = $_POST['folder'];

    if(getcwd() != 'root/'){
    chdir('root/');
    $folder = mkdir('Files', 0777, true);
        if($folder){
            echo "Created successfully";
        }else{
            echo "Already created";
        }
    echo 'ok';
    }else{
        echo "couldn't create it";
    }
