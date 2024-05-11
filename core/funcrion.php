<?php

function redirect($path){
     return header("location:$path");

}
function chechFile($file){
     if(!empty($file)){
          return true;
     }
        return false;
     
}
function convetToArray($file){
     $array=explode(',',$file);
     return $array;
}


?>