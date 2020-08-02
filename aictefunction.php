<?php
//array s is skills new trend in market
$arrays = array("a" => "Artificial Intelligence",
"Blockchain",
"Augmented Reality", "Virtual Reality",
"Cognitive Cloud Computing",
"Angular", "React",
"DevOps",
"Internet of Things (IoT)",
"Intelligent Apps" ,
"Big Data",
"RPA (Robotic Process Automation)","Applied Data Science","Statistcs","Calculus");
//array c is course list in aicte
$arrayc = array("b" => "Artificial Intelligence","3D Printing", "Data Mining and Business Intelligence",
	"Wireless Sensor Networks",
"Cognitive Cloud Computing",
"DevOps",
"Internet of Things (IoT)",
"Intelligent Apps" ,
"Big Data",
"Statistcs","Calculus");
 
// Comparing the values
$result = array_diff($arrays, $arrayc);
print_r($result);

//finfing the % of skills that are new trending and not present in aicte curriculum courses
$percentage = ((count($result))/(count($arrays))*100);

?>

