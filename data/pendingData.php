<?php


//SELECT * FROM `vacation` WHERE NOW() BETWEEN start AND end
//SELECT * FROM `vacation` WHERE NOW() BETWEEN start AND end AND user_id=$id


function actualConges()
{

    $request = "SELECT * FROM vacation WHERE NOW() BETWEEN start AND end AND user_id='".$_SESSION['user']->getId()."' AND status=1";
    return Connection::query($request);
}

