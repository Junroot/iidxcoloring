<?php
include 'Snoopy.class.php';
include 'sp10hard.php';
include 'sp11hard.php';
include 'sp12hard.php';

$filepath = './image/image_sp_10_hard.png';
if($_POST['level']=='10')
{
	if(isset($_POST['hard']))
	{
		$filepath = './image/image_sp_10_hard.png';
	}
	else
	{
		$filepath = './image/image_sp_10.png';
	}
}
else if($_POST['level']=='11')
{
	if(isset($_POST['hard']))
	{
		$filepath = './image/image_sp_11_hard.png';
	}
	else
	{
		$filepath = './image/image_sp_11.png';
	}
}
else if($_POST['level']=='12')
{
	if(isset($_POST['hard']))
	{
		$filepath = './image/image_sp_12_hard.png';
	}
	else
	{
		$filepath = './image/image_sp_12.png';
	}
}

if($_POST['level']=='10')
{
	sp10hard($account,$filepath);
	/*if(isset($_POST['hard']))
	{
		sp10hard($account);
	}
	else
	{
		sp10hard($account);
	}*/
}
else if($_POST['level']=='11')
{
	sp11hard($account,$filepath);
}
else if($_POST['level']=='12')
{
	sp12hard($account,$filepath);
}
?>