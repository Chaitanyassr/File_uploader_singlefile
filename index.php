<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
 <?php include 'class.php';?> 
</head>
   <body>
    <div class="container">
      <form action="index.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="file" multiple="multiple" />
         <input type="submit" name="submit" class="button"/>
      </form>
      </div>
   </body>
</html> 

<!-- php code below -->
<?php 
//obj creation
        $Uplaod = new FileManager;
        // instantiating and obj creation
        $Uplaod->setMaxSize(1);
        $Uplaod->setExtension(array("txt", "pdf", "png", "jpg"));
        $Uplaod->setDir(tempnam('files/', 'upload0'));
        
        //for checking the image size 20px by 20px : Plese put image extension only
        $Uplaod->extimg(array("png", "jpg"));
      
      if(isset($_FILES['file'])){




       $Uplaod->action($file);


 
       }
?>
<!-- php code above -->