<?php

function userData_findOneWithCredentials($userLogin, $userPwd){
     $request="SELECT id,login,firstname,lastname,department_id,active,sx FROM user WHERE login=? AND password=?";
     $requestParams=array($userLogin,sha1($userPwd));
     $result=Connection::safeQuery($request,$requestParams);
     if(isset($result[0])) {
         return $result[0];
     }else{
         return false;
     }
}

function user_findVacations(){
    $request="SELECT * FROM vacation WHERE user_id='".$_SESSION['user']->getId()."'";
    return Connection::query($request);
}