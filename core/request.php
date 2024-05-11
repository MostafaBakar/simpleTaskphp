<?php
function getRequestMethod(){
    return$_SERVER['REQUEST_METHOD'];
}
function postMethod(){
    if(getRequestMethod()=='POST'){
        return true;
    }
    return false;
}

function clearUserInput($value){
    return trim(htmlentities(htmlspecialchars($value)));

}




?>