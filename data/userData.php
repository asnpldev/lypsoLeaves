<?php

function userData_findOneWithCredentials($userLogin, $userPwd){
     $request="SELECT id,login,firstname,lastname,department_id, permission_id,active,sx,admin FROM user WHERE login=? AND password=?";
     $requestParams=array($userLogin,sha1($userPwd));
     $result=Connection::safeQuery($request,$requestParams);
     if(isset($result[0])) {
         return $result[0];
     }else{
         return false;
     }
}

function SQL_initUserPermission($id){


    $sql = "SELECT permissions.power AS 'power' 
            FROM user JOIN permissions ON user.permission_id=permissions.id 
            WHERE user.id='".$id."'";
    return Connection::query($sql)[0]['power'];



}

function loadvac(){

    $request="SELECT * FROM vacation WHERE user_id='".$_SESSION['user']->getId()."' AND status=1";
    return Connection::query($request)[0];

}

//DEMANDES EN COURS (qui sont en attente donc status==0)
function user_findVacations(){
    $request="SELECT *, vacation.id AS 'vacid' FROM vacation JOIN user ON vacation.user_id=user.id JOIN department ON user.department_id=department.id WHERE user_id='".$_SESSION['user']->getId()."' AND status=0";
    return Connection::query($request);
}

//DEMANDES TRAITEE (soit status==1 ou status==2)
function user_findHistoryVacation(){
    $request="SELECT *, vacation.id AS 'vacid' FROM vacation JOIN user ON vacation.user_id=user.id JOIN department ON user.department_id=department.id WHERE user_id='".$_SESSION['user']->getId()."' AND status=1 OR status=2";
    return Connection::query($request);
}