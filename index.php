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
        $Uplaod->setDir('files/');
        

      
      if(isset($_FILES['file'])){




       $Uplaod->action('file');


 
       }
?>
<!-- php code above -->