<?php
session_start();
if(!(isSet($_SESSION)))
{
	$_SESSION["count"]=0;
}
else
{
	$_SESSION["count"]++;
}
echo "<b>".$_SESSION["count"]."</b>";
?>