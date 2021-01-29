<?php



function managementRequests_getAll(){
    $request="SELECT * FROM vacation WHERE status=0";
    return Connection::query($request);
}