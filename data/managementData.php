<?php



function managementRequests_getAll(){
    //$request="SELECT * FROM vacation WHERE status=0";
    $request="SELECT * FROM vacation JOIN user ON vacation.user_id=user.id JOIN department ON user.department_id=department.id WHERE vacation.status=0";
    return Connection::query($request);
}