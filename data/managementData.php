<?php



function managementRequests_getAll(){
    $request="SELECT *, vacation.id AS 'vacid' FROM vacation JOIN user ON vacation.user_id=user.id JOIN department ON user.department_id=department.id WHERE vacation.status=0 ORDER BY vacation.start ASC";
    return Connection::query($request);
}


function managementData_DeclineRequest($i_id){
    $request="UPDATE vacation SET status=2 WHERE id='".$i_id."'";
    return Connection::exec($request);

}


function managementData_AcceptRequest($i_id){
    $request="UPDATE vacation SET status=1 WHERE id='".$i_id."'";
    return Connection::exec($request);


}