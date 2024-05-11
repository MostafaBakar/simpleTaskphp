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
    $user=file_get_contents('../data/user.csv');
    
    

    if(empty($Error)){
        if(chechFile($user)){
        
            $array_register=convetToArray($user);
           
          
            $index1=array_search($email,$array_register);
            $index2=array_search($password,$array_register);
        
            


            if($index1!==false&&$index2==!false){
            

                $newindex=$index1-1;
                $name=$array_register[$newindex];
                
                $users=['name'=>$name,'email'=>$email];
            
                sessionStore('auth',$users);
                redirect('../index.php');
                die();
        
                }
            }
        else{
                redirect('../Register.php');
                die();
            }
    }
       // $data=[$name,$email,sha1($password)];
        // $data_file=fopen('../data/user.csv','a+');
        // fputcsv($data_file,$data);
        // $registorUser=[ 'name'=>$name,'email'=>$email];
        // sessionStore('auth',$registorUser);
        // redirect('../index.php');
        // die();


    
    else{
        sessionStore('errors',$Error);
        redirect('../login.php');
        die();
    }
}
else{
    redirect('../login.php');
}
    

?>