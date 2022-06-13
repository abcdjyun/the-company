<?php
include "../classes/User.php";

//collect the data
$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$username   = $_POST['username'];
$id = $_POST['id'];
//Create an obj
$user = new User;

//Callthe method
$user->update($id, $first_name, $last_name, $username);