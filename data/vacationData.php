<?php

function vacation_storeAction($datas){
    $request="INSERT INTO vacation VALUES(NULL, '".$datas['start']."', '".$datas['end']."', '".$datas['reason']."', '".$datas['comment']."',  '".$_SESSION['user']->getId()."', 0)";
    $results=Connection::exec($request);
    return $results;
}

        
