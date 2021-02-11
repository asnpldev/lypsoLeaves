<?php

function userRowCount()
{

    $request = "SELECT COUNT(*) AS 'count' FROM user";
    return Connection::query($request)[0];
}

function treatmentWaitingRowCount()
{

    $request = "SELECT COUNT(*) AS 'count' FROM vacation WHERE status=0";
    return Connection::query($request)[0];
}


function treatmentAllRowCount()
{

    $request = "SELECT COUNT(*) AS 'count' FROM vacation";
    return Connection::query($request)[0];
}


function setResetAll()
{

    $request = "UPDATE vacation SET status=0 ";
    return Connection::exec($request);
}
