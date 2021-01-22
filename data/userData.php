<?php

function userData_findOneWithCredentials($userLogin,$userPwd){
    $request="SELECT * FROM user WHERE login=? AND password=?";
    $requestParams=array($userLogin,$userPwd);
    
    $result=Connection::safeQuery($request,$requestParams);
    return $result;
}

