<?php

function vacation_storeAction($datas){
    $request="INSERT INTO vacation VALUES(NULL, '".$datas['start']."', '".$datas['end']."', '".$_SESSION['user']->getId()."', 0)";
    $results=Connection::exec($request);
    return $results;
}

//function vacationRequest_get(){
//    $request="SELECT start, end FROM `vacation` WHERE user_id='".$_SESSION['user']->getId()."' ";
//}
        
        
