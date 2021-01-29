<?php

function vacation_storeAction($datas){
    $request='INSERT INTO vacation VALUES(NULL, $datas[start], $datas[end], $datas[user_id], datas[status])';
    return Connection::exec($request);
}