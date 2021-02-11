<?php

function userData_findOneWithCredentials($userLogin, $userPwd){
     $request="SELECT id,login,firstname,lastname,department_id,active,sx,admin FROM user WHERE login=? AND password=?";
     $requestParams=array($userLogin,sha1($userPwd));
     $result=Connection::safeQuery($request,$requestParams);
     if(isset($result[0])) {
         return $result[0];
     }else{
         return false;
     }
}



function loadConnexionHistory(){

    $request="SELECT * FROM logip WHERE user_id='".$_SESSION['user']->getId()."' ORDER BY log_date DESC";
    return Connection::query($request);


}


function saveIPIntoDB($i_ip, $city, $region, $country){


    $request="INSERT INTO logip VALUES(NULL, '".$_SESSION['user']->getId()."', '".$i_ip."', '".$city."', '".$region."', '".$country."', NOW())";
    $results=Connection::exec($request);
    return $results;


}


//DEMANDES EN COURS (qui sont en attente donc status==0)
function user_findVacations(){
    $request="SELECT * FROM vacation JOIN user ON vacation.user_id=user.id JOIN department ON user.department_id=department.id WHERE user_id='".$_SESSION['user']->getId()."' AND status=0";
    return Connection::query($request);
}