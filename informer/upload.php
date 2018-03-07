<?php

include("db_config.php");

if($db)
{
    $title=$_POST['title'];
    $image=$_POST['image'];

    $upload_path="image/$title.jpg";

    $sql="insert into imageinfo(title,path) values('$title','$upload_path');";


    if(mysqli_query($db, $sql))
    {
        file_put_contents($upload_path, base64_decode($image));
        echo json_encode(array('response'=>"image uploaded successfully...."));
    }

    else
    {
        echo json_encode(array('response'=>"image upload failed...."));
    }



    mysqli_close($db);

}




?>