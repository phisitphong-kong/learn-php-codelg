<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	
</head>
<body>

<div id="container">
	<h1>Hello world</h1>

	<hr>
    <h1>html helper</h1>
    <p>OL()</p>
    <?php
    $list = array('a','b','c');
    echo ol($list);
    echo '<hr>';
    echo ul($list);
    ?>
    aaaaaaaaa
    <?php echo br(5);?>
    bbbbbb
    <hr>
    <p>heading()</p>
    <?php echo heading("Text",1);?>
    <?php echo heading("Text",2);?>
    <?php echo heading("Text",3);?>
    <?php echo heading("Text",4);?>
    <?php echo heading("Text",5);?>
    <?php echo heading("Text",6);?>
    <hr>
    <p>nbs()</p>
    testing&nbsp;progamming
    <?php echo "i am";
            echo nbs(10);
            echo "who"; ?>
</body>
</html>
