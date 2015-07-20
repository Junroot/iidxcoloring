<?php
include 'Snoopy.class.php';
include 'sp10hard.php';

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

//$s1 = new Snoopy;
//$s1->fetch("http://iidx.me/" . $account . "/sp/level/10/?page=1&sort=Aversion&l=08");
//preg_match_all("/\<td class\=\"clear\"\>(.*?)\<\/td\>/",$s1->results,$c1);


sp10hard($account,$filepath);
if($_POST['level']=='10')
{
	if(isset($_POST['hard']))
	{
		sp10hard($account);
	}
	else
	{
		sp10hard($account);
	}
}
?>