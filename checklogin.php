<?php
/**
 * Created by PhpStorm.
 * User: Armando Roque
 * Date: 4/04/15
 * Time: 16:32
 */

require_once("config.php");

$user = "";
$password = "";

if(isset($_POST['user']))
    $user = $_POST['user'];
if(isset($_POST['password']))
    $password = $_POST['password'];

$con = mysqli_connect($SVR,$USR,$PW,$DB);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}




/*if (!$items =  mysqli_query($con,"SELECT *  FROM usuarios ORDER BY RAND() LIMIT 1"))
{
    echo("Error description: " . mysqli_error($con));
}else
    while ($gal = mysqli_fetch_array($items)){}*/


?>