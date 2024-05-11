<?php
function requiredvalue($input){
    if(empty($input)){
        return true;
    }
    return false;
}
function minLengthvalue($input,$lenght){
    if(strlen($input)<$lenght){
        return true;
    }
    return false;
}
function maxLenghtvalue($input,$lenght){
    if(strlen($input)>$lenght){
        return true;
    }
    return false;

}
//email vaildation

function emailFilter($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
}








?>