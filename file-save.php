<?php

//var_dump($_FILES['photo']);


include ('file-upload-system.php');
echo imageUpload($_FILES['image'], "jpg", "png", "txt");


//echo $file_name;










?>