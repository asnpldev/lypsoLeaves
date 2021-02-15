<?php


//SELECT * FROM `vacation` WHERE NOW() BETWEEN start AND end
//SELECT * FROM `vacation` WHERE NOW() BETWEEN start AND end AND user_id=$id


function actualConges()
{

    $request = "SELECT * FROM vacation WHERE NOW() BETWEEN start AND end AND user_id='".$_SESSION['user']->getId()."' AND status=1";
    return Connection::query($request);
}


function imCheckingVacation($dateStart, $dateEnd){

    $request = "SELECT * FROM vacation JOIN user ON vacation.user_id=user.id JOIN department ON user.department_id=department.id WHERE start BETWEEN '".$dateStart."' AND '".$dateEnd."' AND end BETWEEN '".$dateStart."' AND '".$dateEnd."'";
    return Connection::query($request);

}
