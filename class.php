<?php
// testing code below
echo "load_test";
// tesing code above

class FileManager{

 protected $maxSize;
 protected $extension;
 protected $destination;
 protected $file_size;
 protected $file_name;
 protected $file_tmp;
 protected $imgext;

  


//size
 function setMaxSize($sizeMB){
   return $this->maxSize = $sizeMB * (1024 * 1024);
 }

//check extension
 function setExtension($option){
  return $this->extension = $option;
 }

//path
function setDir($path){
   return $this->destination = $path;
}




function action($file){

    $this->file_size = $_FILES[$file]['size'];
    $this->file_name = $_FILES[$file]['name'];
    $this->file_tmp = $_FILES[$file]['tmp_name'];
    if($this->file_size > $this->maxSize) {
      return 201; // size larger that assigned size
    } else if(!in_array(pathinfo($this->file_name, PATHINFO_EXTENSION), $this->extension)) {
      return 202; // file extension not supported
    } else {

      move_uploaded_file($this->file_tmp, $this->destination . RAND_TIMESTAMP . $this->file_name);
      return RAND_TIMESTAMP . $this->file_name;
    }
}
//define this code below in your php config file
   //  define('RAND_TIMESTAMP', round(microtime(true)) . '.' . end($temp));
}
?>

