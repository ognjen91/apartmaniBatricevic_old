<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<!DOCTYPE html>

<html>
    
<head>
<title>VJEŽBA</title> 
<link href="bootstrap.min.css?<?=filemtime("bootstrap.min.css")?>" rel="stylesheet" type="text/css" />
<script src="jquery-3.2.1.min.js"></script>

    
<link href="outputCSS/adminStyle.css" rel="stylesheet" type="text/css" />

</head>
<body>
    
