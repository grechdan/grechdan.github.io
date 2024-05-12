<?php

$to 		= 'daniil.grechanyy@gmail.com';
$headers	= 'FROM: "'.$email.'"';

//All form values
$name 		= $_POST['name'];
$name 		= $_POST['phone'];
$email 		= $_POST['email'];
$subject 	= $_POST['subject'];
$msg 		= $_POST['msg'];
$output 	= "Name: ".$name."\nPhone: ".$name."\nEmail: ".$email."\nSubject: ".$subject."\n\nMessage: ".$msg;

$send		= mail($to, $name, $output, $headers);