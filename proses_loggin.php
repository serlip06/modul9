<?php
session_start();
if(isset($HTTP_SESSION_VARS["session_status"]))
{
    echo("<pre>");
    echo("user name : <br>".$HTTP_SESSION_VARS["session_user"]."</b></br>");
    echo("Click <a href=\"loggout.php\">Loggout</a> untuk keluar !");
    echo("</pre>");
}else
{
    header("location: loggin.php");
    exit;
}
?>