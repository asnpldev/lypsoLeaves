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

//DEMANDES EN COURS (qui sont en attente donc status==0)
function user_findVacations(){
    $request="SELECT * FROM vacation JOIN user ON vacation.user_id=user.id JOIN department ON user.department_id=department.id WHERE user_id='".$_SESSION['user']->getId()."' AND status=0";
    return Connection::query($request);
}