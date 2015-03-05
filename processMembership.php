<?php
session_start();
echo "<html><body>";

$sponsorLevel = array_key_exists('corporateSponsorLevel', $_POST) ? $_POST['corporateSponsorLevel'] : null;

print_r($_POST);
?>

