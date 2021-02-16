<?php

//**************************************************************//
//**                                                          **//
//**                        ?route=admin                      **//
//**                                                          **//
//**************************************************************//

//Nombre d'utilisateurs
function userRowCount(){
    $request = "SELECT COUNT(*) AS 'count' FROM user";
    return Connection::query($request)[0];
}

//Demandes en attente
function treatmentWaitingRowCount(){
    $request = "SELECT COUNT(*) AS 'count' FROM vacation WHERE status=0";
    return Connection::query($request)[0];
}

//Demandes au total
function treatmentAllRowCount(){
    $request = "SELECT COUNT(*) AS 'count' FROM vacation";
    return Connection::query($request)[0];
}

//**************************************************************//
//**                                                          **//
//**                 ?route=admin&action=users                **//
//**                                                          **//
//**************************************************************//

//Liste de tout les utilisateurs
function admin_user_getAll(){
    $request = "SELECT *, user.id AS 'uid' FROM user JOIN department ON user.department_id=department.id";
    return Connection::query($request);
}