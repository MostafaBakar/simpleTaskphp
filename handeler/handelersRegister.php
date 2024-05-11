<?php
session_start();
include_once '../core/session.php';
include_once '../core/request.php';
include_once '../core/validation.php';
include_once '../core/funcrion.php';
$Error=[];
$minLengthName=3;
$maxLengthName=200;
$minLengthPassword=6;
$maxLengthPassword=20;
if(postMethod()){
    foreach($_POST as $key=>$value){
        $$key=clearUserInput($value);
    }
    if(requiredvalue($name)){
        $Error[]="required Name";

    }
    elseif(minLengthvalue($name,$minLengthName)){
        $Error[]= "must be name bigger than 3character ya stay";
    }
    elseif(maxLenghtvalue($name,$maxLengthName)){
        $Error[]= "must be name smaller than about 20 character ya habiby ";
    }
    if(requiredvalue($email)){
        $Error[]="required emai;";
    }
    elseif(emailFilter($email)){
        $Error[]= "not player property email ya habiby";

    }
    if(requiredvalue($password)){
        $Error[]="required password";

    }
    elseif(minLengthvalue($password,$minLengthPassword)){
        $Error[]= "password must be  bigger than 6 character ya oscty";
    }
    elseif(maxLenghtvalue($password,$maxLengthPassword)){
        $Error[]= " password must be  smaller than about 20 character ya habiby ";
    }
    if(empty($Error)){
        $data=[ $name, $email,$password];
        $data_file=fopen('../data/user.csv','a+');
        fputcsv($data_file,$data);
        $registorUser=[ 'name'=>$name,'email'=>$email];
        sessionStore('auth',$registorUser);
        redirect('../index.php');
        die();


    }
    else{
        sessionStore('errors',$Error);
        redirect('../Register.php');
        die();
    }
         

    
    
}

else{
    header('location:../Register.php');
}






?>