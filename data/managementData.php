<?php



function managementRequests_getAll(){
    $request="SELECT *, vacation.id AS 'vacid' FROM vacation JOIN user ON vacation.user_id=user.id JOIN department ON user.department_id=department.id WHERE vacation.status=0 ORDER BY vacation.id DESC";
    return Connection::query($request);
}

function managementRequests_getSearch($sb){
    $request="SELECT *, vacation.id AS 'vacid' FROM vacation JOIN user ON vacation.user_id=user.id JOIN department ON user.department_id=department.id WHERE vacation.status=0 AND firstname='".$sb."' OR lastname='".$sb."' AND status=0 ORDER BY vacation.id DESC";
    return Connection::query($request);
}



function managementData_DeclineRequest($i_id){
    $request="UPDATE vacation SET status=2 WHERE id='".$i_id."'";
    return Connection::exec($request);

}


function managementData_CancelRequest($i_id){
    $request="UPDATE vacation SET status=0 WHERE id='".$i_id."'";
    return Connection::exec($request);


}



function managementData_AcceptRequest($i_id){
    $request="UPDATE vacation SET status=1 WHERE id='".$i_id."'";
    return Connection::exec($request);


}


function managementData_overviewRequest($i_id){

    $request="SELECT *, vacation.id AS 'vacid' FROM vacation JOIN user ON vacation.user_id=user.id JOIN department ON user.department_id=department.id WHERE vacation.id='".$i_id."'";
    return Connection::query($request);

}

