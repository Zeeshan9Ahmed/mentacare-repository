<?php
    function imageValidateAndUpload($image){
        $target_dir = "uploads/";
        $image_name = $image["fileToUpload"]["name"];
        $target_file = $target_dir . basename($image_name);
        if(empty($image_name)){
            return "Profile Image is Required";
        }
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            return "Sorry, your file is too large.";
            
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            return "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            
        }
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            return ['image' => $image_name];
        } else {
            return "Sorry, there was an error uploading your file.";
        }
    }

