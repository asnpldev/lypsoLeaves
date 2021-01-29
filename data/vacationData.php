<?php

function vacation_storeAction($datas){
    $request="INSERT INTO `vacation` VALUES(NULL, '".$datas['start']."', '".$datas['end']."', '".$datas['user_id']."', 0)";
    $results=Connection::exec($request);
    return $results;
}