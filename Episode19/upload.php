<?php 

if (isset($_POST["uploadBtn"])) {

    //Access file uploaded
    

    $fileName = $_FILES["fileToUpload"]["name"];
    $tmpName = $_FILES["fileToUpload"]["tmp_name"];
    $fileSize = $_FILES["fileToUpload"]["size"];
    $fileType = $_FILES["fileToUpload"]["type"];
    
    
    //Upload file 

    if ($fileSize > 0) {
        
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory.$fileName;

        if (move_uploaded_file($tmpName, $targetFile)) 
        {
            echo "File uploaded successfully!";
            
        }else
        {
            echo "Your file was not uploaded!";
        }


    }
    


    
}

?>