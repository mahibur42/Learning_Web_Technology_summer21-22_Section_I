<?php

require_once('..\Model\db.php');
require_once('..\Model\usermodel.php');


      if(isset($_POST["submit"])){
          $check = getimagesize($_FILES["image"]["tmp_name"]);
          if($check !== false){
              $image = $_FILES['image']['tmp_name'];
              $imgContent = addslashes(file_get_contents($image));

            $db = getConnection();

            $dataTime = date("Y-m-d H:i:s");
            $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
            if($insert){
                echo "File uploaded successfully.";
            }else{
                echo "File upload failed, please try again.";
            } 
        }else{
            echo "Please select an image file to upload.";
        }
    }
    ?>