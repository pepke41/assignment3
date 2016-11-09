<?php

include 'ParentClass.php';
include 'ChildClass.php';

$currentDate = new ParentClass("September", "29");
$nextHoliday = new ChildClass("October", "31", "Halloween");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
	<link href="https://fonts.googleapis.com/css?family=Creepster" rel="stylesheet">
</head>
<body>

<h1>Let's get excited about the Holidays</h1>

<p><? echo $currentDate ?></p>
<p>Wow today is my birthday! But it's not a "real" holiday so let's see what's closest.</p>

<p><? echo $nextHoliday ?></p>

<p id="halloween">Oh awesome I love Halloween, let's get spooky!</p>

<h2>Some time passed...</h2>
<?= $currentDate->setMonth("November");
		$currentDate->setDate("1");
		$nextHoliday->setMonth("December");
		$nextHoliday->setDate("25");
		$nextHoliday->setName("Christmas");
?>

<p><? echo $currentDate ?> <br>Oh awesome! What's the next holiday?</p>
<p><? echo $nextHoliday ?> <br>I love Christmas!!</p>
<img src="img/tree.png" alt="Christmas Tree">

<h4>WAIT A SECOND</h4>
<p>No no no no, this happens _every_ year <br>You guys forgot Thanksgiving... AGAIN</p>
<?= $nextHoliday->setMonth("November");
		$nextHoliday->setDate("24");
		$nextHoliday->setName("Thanksgiving");
?>
<p><span class="date"><b><? echo $nextHoliday ?></b></span><br> OKAY we fixed it</p>
<p>I'm sorry all powerful turkey god. The moral of this story is that
	Thanksgiving is an important holiday, where we're all allowed to eat way too
	much and not get judged for it. Happy Thanksgiving everyone, check back November
	25, when we can actually start getting ready for Christmas</p>

</body>
</html>
