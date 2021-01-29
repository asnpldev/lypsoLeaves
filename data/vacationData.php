<?php

function vacation_storeAction($datas){
    //$request="SELECT * FROM vacation WHERE status=0";
    $request="INSERT INTO vacation VALUES($datas[start])";
    return Connection::exec($request);
}