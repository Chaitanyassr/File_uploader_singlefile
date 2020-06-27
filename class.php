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

//image extension only
function extimg($img){
   return $this->imgext = $img;
}


function action(){
   $this->file_size = $_FILES['file']['size'];
   $this->file_name = $_FILES['file']['name'];
   $this->file_tmp = $_FILES['file']['tmp_name'];
           if($this->file_size > $this->maxSize){
         echo "$this->file_name is too large";
        }elseif(! in_array(pathinfo($this->file_name, PATHINFO_EXTENSION), $this->extension)){
         echo "Please choose a file :accepted formate(txt, pdf, png, jpg)";
        }elseif( in_array(pathinfo($this->file_name, PATHINFO_EXTENSION), $this->imgext)){
                 $result = getimagesize($this->file_tmp);
                 if($result[0] > 200 && $result[1] > 200){echo "Please upload a smaller image with height and width both should be less than 200";}
                 else{ 
move_uploaded_file($this->file_tmp, $this->destination.$this->file_name);
         echo "$this->file_name uploaded sucessfully";
                 }
        }
        else{
         move_uploaded_file($this->file_tmp, $this->destination.$this->file_name);
         echo "$this->file_name uploaded sucessfully";
        }
}

}
?>