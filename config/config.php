<?php

// This page - Establishes connection to database 
$sn="localhost"; $un="root"; $pa=""; $dn="course";
$con = mysqli_connect($sn,$un,$pa,$dn);

if(mysqli_connect_errno())
{
    echo "Failed to connect: " , mysqli_connect_errno();
}

?>