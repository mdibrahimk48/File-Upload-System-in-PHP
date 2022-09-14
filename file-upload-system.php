<?php

function imageUpload($file_from_name, $jpg, $png, $txt){


    $file_name = $file_from_name['name'];
    $file_extension = explode(".", $file_name);
    
    $file_type = $file_extension[1];
    if($file_type == "jpg" || $file_type == "png" || $file_type == "txt"){

        $file_tmp = $file_from_name['tmp_name'];
        $file_destination = 'upload/'.$file_name;
        move_uploaded_file ($file_tmp, $file_destination);

        return "File upload done";
    }
    else{
        return "Sorry does not match file extension.";
    }

}

?>