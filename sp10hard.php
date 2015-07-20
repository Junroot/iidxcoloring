<?php
	function sp10hard($account, $filepath)
	{
		$img=ImageCreateFromPng('./image/image_sp_10_hard.png');
		$s1 = new Snoopy;
		$s2 = new Snoopy;
		$s3 = new Snoopy;
		$s1->fetch("http://iidx.me/" . $account . "/sp/level/10/?page=1&sort=Aversion&l=08");
		$s2->fetch("http://iidx.me/" . $account . "/sp/level/10/?page=2&sort=Aversion&l=08");
		$s3->fetch("http://iidx.me/" . $account . "/sp/level/10/?page=3&sort=Aversion&l=08");
		preg_match_all("/\<td class\=\"clear\"\>(.*?)\<\/td\>/",$s1->results,$c1);
		preg_match_all("/\<td class\=\"clear\"\>(.*?)\<\/td\>/",$s2->results,$c2);
		preg_match_all("/\<td class\=\"clear\"\>(.*?)\<\/td\>/",$s3->results,$c3);
		if (count($c1[0]) == 0)
		{
			?>
			<form method="post" action="index.php" name="pass">
				<input type = "hidden" name="login" value = "f">
			</form>
			<script language = "javascript">document.pass.submit();</script>
			<?php
		}
		else
		{
			header('Content-Type: application/octet-stream');
			header("Content-Transfer-Encoding: Binary"); 
			header("Content-disposition: attachment; filename=\"" . basename($filepath) . "\"");
			for($count=0;$count<200;$count++)
			{
				$c1[0][$count] = strip_tags($c1[0][$count]);
			}
			for($count=0;$count<200;$count++)
			{
				$c2[0][$count] = strip_tags($c2[0][$count]);
			}
			for($count=0;$count<23;$count++)
			{
				$c3[0][$count] = strip_tags($c3[0][$count]);
			}
			//0
			$i = 0;
			$x = 5;
			$y = 41;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//1
			$i = 1;
			$x = 0;
			$y = 4;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//2
			$i = 2;
			$x = 1;
			$y = 17;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//3
			$i = 3;
			$x = 5;
			$y = 8;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//4
			$i = 4;
			$x = 4;
			$y = 53;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//5
			$i = 5;
			$x = 5;
			$y = 22;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//6
			$i = 6;
			$x = 1;
			$y = 1;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//7
			$i = 7;
			$x = 0;
			$y = 8;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//8
			$i = 8;
			$x = 3;
			$y = 65;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//9
			$i = 9;
			$x = 0;
			$y = 66;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//10
			$i = 10;
			$x = 0;
			$y = 20;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//11
			$i = 11;
			$x = 3;
			$y = 24;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//12
			$i = 12;
			$x = 5;
			$y = 50;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//13
			$i = 13;
			$x = 4;
			$y = 29;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//14
			$i = 14;
			$x = 1;
			$y = 4;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//15
			$i = 15;
			$x = 5;
			$y = 1;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//16
			$i = 16;
			$x = 0;
			$y = 61;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//17
			$i = 17;
			$x = 0;
			$y = 43;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//18
			$i = 18;
			$x = 0;
			$y = 13;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//19
			$i = 19;
			$x = 5;
			$y = 33;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//20
			$i = 20;
			$x = 3;
			$y = 58;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//21
			$i = 21;
			$x = 3;
			$y = 22;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//22
			$i = 22;
			$x = 5;
			$y = 57;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//23
			$i = 23;
			$x = 3;
			$y = 16;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//24
			$i = 24;
			$x = 5;
			$y = 39;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//25
			$i = 25;
			$x = 4;
			$y = 20;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//26
			$i = 26;
			$x = 0;
			$y = 32;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//27
			$i = 27;
			$x = 0;
			$y = 5;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//28
			$i = 28;
			$x = 5;
			$y = 20;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//29
			$i = 29;
			$x = 1;
			$y = 66;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//30
			$i = 30;
			$x = 4;
			$y = 32;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//31
			$i = 31;
			$x = 2;
			$y = 45;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//32
			$i = 32;
			$x = 1;
			$y = 60;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//33
			$i = 33;
			$x = 0;
			$y = 38;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//34
			$i = 34;
			$x = 0;
			$y = 62;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//35
			$i = 35;
			$x = 5;
			$y = 36;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//36
			$i = 36;
			$x = 0;
			$y = 50;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//37
			$i = 37;
			$x = 4;
			$y = 30;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//38
			$i = 38;
			$x = 5;
			$y = 59;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//39
			$i = 39;
			$x = 3;
			$y = 10;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//40
			$i = 40;
			$x = 5;
			$y = 16;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//41
			$i = 41;
			$x = 5;
			$y = 23;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//42
			$i = 42;
			$x = 0;
			$y = 24;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//43
			$i = 43;
			$x = 3;
			$y = 19;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//44
			$i = 44;
			$x = 5;
			$y = 0;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//45
			$i = 45;
			$x = 2;
			$y = 51;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//46
			$i = 46;
			$x = 2;
			$y = 35;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//47
			$i = 47;
			$x = 1;
			$y = 2;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//48
			$i = 48;
			$x = 2;
			$y = 24;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//49
			$i = 49;
			$x = 4;
			$y = 41;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//50
			$i = 50;
			$x = 1;
			$y = 18;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//51
			$i = 51;
			$x = 0;
			$y = 59;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//52
			$i = 52;
			$x = 4;
			$y = 16;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//53
			$i = 53;
			$x = 2;
			$y = 60;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//54
			$i = 54;
			$x = 2;
			$y = 6;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//55
			$i = 55;
			$x = 4;
			$y = 7;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//56
			$i = 56;
			$x = 2;
			$y = 13;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//57
			$i = 57;
			$x = 2;
			$y = 5;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//58
			$i = 58;
			$x = 1;
			$y = 46;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//59
			$i = 59;
			$x = 5;
			$y = 30;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//60
			$i = 60;
			$x = 3;
			$y = 13;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//61
			$i = 61;
			$x = 2;
			$y = 33;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//62
			$i = 62;
			$x = 1;
			$y = 51;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//63
			$i = 63;
			$x = 4;
			$y = 56;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//64
			$i = 64;
			$x = 1;
			$y = 25;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//65
			$i = 65;
			$x = 0;
			$y = 16;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//66
			$i = 66;
			$x = 5;
			$y = 62;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//67
			$i = 67;
			$x = 1;
			$y = 38;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//68
			$i = 68;
			$x = 1;
			$y = 56;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//69
			$i = 69;
			$x = 2;
			$y = 7;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//70
			$i = 70;
			$x = 4;
			$y = 0;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//71
			$i = 71;
			$x = 0;
			$y = 35;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//72
			$i = 72;
			$x = 2;
			$y = 66;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//73
			$i = 73;
			$x = 5;
			$y = 28;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//74
			$i = 74;
			$x = 0;
			$y = 0;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//75
			$i = 75;
			$x = 0;
			$y = 58;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//76
			$i = 76;
			$x = 1;
			$y = 26;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//77
			$i = 77;
			$x = 2;
			$y = 21;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//78
			$i = 78;
			$x = 4;
			$y = 36;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//79
			$i = 79;
			$x = 3;
			$y = 27;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//80
			$i = 80;
			$x = 2;
			$y = 26;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//81
			$i = 81;
			$x = 2;
			$y = 11;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//82
			$i = 82;
			$x = 2;
			$y = 40;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//83
			$i = 83;
			$x = 0;
			$y = 10;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//84
			$i = 84;
			$x = 3;
			$y = 38;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//85
			$i = 85;
			$x = 3;
			$y = 59;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//86
			$i = 86;
			$x = 3;
			$y = 30;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//87
			$i = 87;
			$x = 1;
			$y = 65;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//88
			$i = 88;
			$x = 0;
			$y = 51;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//89
			$i = 89;
			$x = 2;
			$y = 58;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//90
			$i = 90;
			$x = 1;
			$y = 28;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//91
			$i = 91;
			$x = 0;
			$y = 17;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//92
			$i = 92;
			$x = 3;
			$y = 33;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//93
			$i = 93;
			$x = 3;
			$y = 18;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//94
			$i = 94;
			$x = 0;
			$y = 22;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//95
			$i = 95;
			$x = 0;
			$y = 25;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//96
			$i = 96;
			$x = 5;
			$y = 26;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//97
			$i = 97;
			$x = 3;
			$y = 57;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//98
			$i = 98;
			$x = 0;
			$y = 47;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//99
			$i = 99;
			$x = 3;
			$y = 49;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//100
			$i = 100;
			$x = 2;
			$y = 32;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//101
			$i = 101;
			$x = 0;
			$y = 36;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//102
			$i = 102;
			$x = 3;
			$y = 64;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//103
			$i = 103;
			$x = 1;
			$y = 11;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//104
			$i = 104;
			$x = 0;
			$y = 7;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//105
			$i = 105;
			$x = 0;
			$y = 12;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//106
			$i = 106;
			$x = 0;
			$y = 9;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//107
			$i = 107;
			$x = 0;
			$y = 65;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//108
			$i = 108;
			$x = 5;
			$y = 53;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//109
			$i = 109;
			$x = 0;
			$y = 63;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//110
			$i = 110;
			$x = 2;
			$y = 18;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//111
			$i = 111;
			$x = 1;
			$y = 58;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//112
			$i = 112;
			$x = 2;
			$y = 59;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//113
			$i = 113;
			$x = 3;
			$y = 26;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//114
			$i = 114;
			$x = 1;
			$y = 63;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//115
			$i = 115;
			$x = 1;
			$y = 10;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//116
			$i = 116;
			$x = 0;
			$y = 26;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//117
			$i = 117;
			$x = 1;
			$y = 53;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//118
			$i = 118;
			$x = 4;
			$y = 59;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//119
			$i = 119;
			$x = 1;
			$y = 50;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//120
			$i = 120;
			$x = 4;
			$y = 9;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//121
			$i = 121;
			$x = 0;
			$y = 15;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//122
			$i = 122;
			$x = 5;
			$y = 4;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//123
			$i = 123;
			$x = 4;
			$y = 35;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//124
			$i = 124;
			$x = 3;
			$y = 66;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//125
			$i = 125;
			$x = 1;
			$y = 47;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//126
			$i = 126;
			$x = 4;
			$y = 49;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//127
			$i = 127;
			$x = 5;
			$y = 15;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//128
			$i = 128;
			$x = 0;
			$y = 60;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//129
			$i = 129;
			$x = 1;
			$y = 21;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//130
			$i = 130;
			$x = 0;
			$y = 14;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//131
			$i = 131;
			$x = 0;
			$y = 54;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//132
			$i = 132;
			$x = 1;
			$y = 59;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//133
			$i = 133;
			$x = 5;
			$y = 49;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//134
			$i = 134;
			$x = 1;
			$y = 62;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//135
			$i = 135;
			$x = 0;
			$y = 28;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//136
			$i = 136;
			$x = 1;
			$y = 44;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//137
			$i = 137;
			$x = 4;
			$y = 60;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//138
			$i = 138;
			$x = 5;
			$y = 12;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//139
			$i = 139;
			$x = 2;
			$y = 53;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//140
			$i = 140;
			$x = 0;
			$y = 39;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//141
			$i = 141;
			$x = 3;
			$y = 42;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//142
			$i = 142;
			$x = 4;
			$y = 18;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//143
			$i = 143;
			$x = 4;
			$y = 44;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//144
			$i = 144;
			$x = 2;
			$y = 61;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//145
			$i = 145;
			$x = 1;
			$y = 0;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//146
			$i = 146;
			$x = 0;
			$y = 44;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//147
			$i = 147;
			$x = 3;
			$y = 39;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//148
			$i = 148;
			$x = 2;
			$y = 25;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//149
			$i = 149;
			$x = 4;
			$y = 62;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//150
			$i = 150;
			$x = 0;
			$y = 48;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//151
			$i = 151;
			$x = 1;
			$y = 48;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//152
			$i = 152;
			$x = 5;
			$y = 65;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//153
			$i = 153;
			$x = 0;
			$y = 19;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//154
			$i = 154;
			$x = 2;
			$y = 17;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//155
			$i = 155;
			$x = 3;
			$y = 40;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//156
			$i = 156;
			$x = 1;
			$y = 13;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//157
			$i = 157;
			$x = 3;
			$y = 56;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//158
			$i = 158;
			$x = 2;
			$y = 14;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//159
			$i = 159;
			$x = 2;
			$y = 10;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//160
			$i = 160;
			$x = 5;
			$y = 38;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//161
			$i = 161;
			$x = 0;
			$y = 46;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//162
			$i = 162;
			$x = 2;
			$y = 9;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//163
			$i = 163;
			$x = 5;
			$y = 48;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//164
			$i = 164;
			$x = 5;
			$y = 21;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//165
			$i = 165;
			$x = 5;
			$y = 56;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//166
			$i = 166;
			$x = 3;
			$y = 46;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//167
			$i = 167;
			$x = 0;
			$y = 6;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//168
			$i = 168;
			$x = 0;
			$y = 34;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//169
			$i = 169;
			$x = 1;
			$y = 61;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//170
			$i = 170;
			$x = 4;
			$y = 24;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//171
			$i = 171;
			$x = 0;
			$y = 41;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//172
			$i = 172;
			$x = 4;
			$y = 15;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//173
			$i = 173;
			$x = 4;
			$y = 8;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//174
			$i = 174;
			$x = 4;
			$y = 55;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//175
			$i = 175;
			$x = 2;
			$y = 0;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//176
			$i = 176;
			$x = 4;
			$y = 39;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//177
			$i = 177;
			$x = 5;
			$y = 51;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//178
			$i = 178;
			$x = 3;
			$y = 45;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//179
			$i = 179;
			$x = 0;
			$y = 64;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//180
			$i = 180;
			$x = 4;
			$y = 27;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//181
			$i = 181;
			$x = 1;
			$y = 42;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//182
			$i = 182;
			$x = 2;
			$y = 4;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//183
			$i = 183;
			$x = 3;
			$y = 5;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//184
			$i = 184;
			$x = 4;
			$y = 45;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//185
			$i = 185;
			$x = 5;
			$y = 24;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//186
			$i = 186;
			$x = 3;
			$y = 11;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//187
			$i = 187;
			$x = 0;
			$y = 49;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//188
			$i = 188;
			$x = 1;
			$y = 20;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//189
			$i = 189;
			$x = 3;
			$y = 50;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//190
			$i = 190;
			$x = 4;
			$y = 11;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//191
			$i = 191;
			$x = 1;
			$y = 29;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//192
			$i = 192;
			$x = 4;
			$y = 2;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//193
			$i = 193;
			$x = 5;
			$y = 9;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//194
			$i = 194;
			$x = 2;
			$y = 34;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//195
			$i = 195;
			$x = 2;
			$y = 43;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//196
			$i = 196;
			$x = 0;
			$y = 18;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//197
			$i = 197;
			$x = 4;
			$y = 61;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//198
			$i = 198;
			$x = 0;
			$y = 23;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//199
			$i = 199;
			$x = 3;
			$y = 0;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//200
			$i = 0;
			$x = 0;
			$y = 56;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//201
			$i = 1;
			$x = 0;
			$y = 53;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//202
			$i = 2;
			$x = 1;
			$y = 23;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//203
			$i = 3;
			$x = 2;
			$y = 19;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//204
			$i = 4;
			$x = 1;
			$y = 64;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//205
			$i = 5;
			$x = 1;
			$y = 40;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//206
			$i = 6;
			$x = 2;
			$y = 54;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//207
			$i = 7;
			$x = 1;
			$y = 16;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//208
			$i = 8;
			$x = 3;
			$y = 7;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//209
			$i = 9;
			$x = 1;
			$y = 30;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//210
			$i = 10;
			$x = 5;
			$y = 34;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//211
			$i = 11;
			$x = 2;
			$y = 30;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//212
			$i = 12;
			$x = 0;
			$y = 55;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//213
			$i = 13;
			$x = 4;
			$y = 48;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//214
			$i = 14;
			$x = 3;
			$y = 4;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//215
			$i = 15;
			$x = 2;
			$y = 49;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//216
			$i = 16;
			$x = 2;
			$y = 44;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//217
			$i = 17;
			$x = 0;
			$y = 31;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//218
			$i = 18;
			$x = 3;
			$y = 31;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//219
			$i = 19;
			$x = 4;
			$y = 4;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//220
			$i = 20;
			$x = 1;
			$y = 22;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//221
			$i = 21;
			$x = 5;
			$y = 14;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//222
			$i = 22;
			$x = 1;
			$y = 24;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//223
			$i = 23;
			$x = 4;
			$y = 51;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//224
			$i = 24;
			$x = 5;
			$y = 44;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//225
			$i = 25;
			$x = 5;
			$y = 11;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//226
			$i = 26;
			$x = 1;
			$y = 45;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//227
			$i = 27;
			$x = 5;
			$y = 47;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//228
			$i = 28;
			$x = 5;
			$y = 61;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//229
			$i = 29;
			$x = 2;
			$y = 12;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//230
			$i = 30;
			$x = 0;
			$y = 40;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//231
			$i = 31;
			$x = 2;
			$y = 56;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//232
			$i = 32;
			$x = 1;
			$y = 54;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//233
			$i = 33;
			$x = 5;
			$y = 27;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//234
			$i = 34;
			$x = 4;
			$y = 23;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//235
			$i = 35;
			$x = 3;
			$y = 54;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//236
			$i = 36;
			$x = 2;
			$y = 1;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//237
			$i = 37;
			$x = 5;
			$y = 60;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//238
			$i = 38;
			$x = 4;
			$y = 40;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//239
			$i = 39;
			$x = 2;
			$y = 65;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//240
			$i = 40;
			$x = 4;
			$y = 6;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//241
			$i = 41;
			$x = 4;
			$y = 14;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//242
			$i = 42;
			$x = 3;
			$y = 62;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//243
			$i = 43;
			$x = 5;
			$y = 19;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//244
			$i = 44;
			$x = 5;
			$y = 31;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//245
			$i = 45;
			$x = 2;
			$y = 20;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//246
			$i = 46;
			$x = 0;
			$y = 57;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//247
			$i = 47;
			$x = 4;
			$y = 46;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//248
			$i = 48;
			$x = 2;
			$y = 57;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//249
			$i = 49;
			$x = 2;
			$y = 2;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//250
			$i = 50;
			$x = 4;
			$y = 50;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//251
			$i = 51;
			$x = 0;
			$y = 27;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//252
			$i = 52;
			$x = 3;
			$y = 8;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//253
			$i = 53;
			$x = 2;
			$y = 39;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//254
			$i = 54;
			$x = 2;
			$y = 47;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//255
			$i = 55;
			$x = 4;
			$y = 47;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//256
			$i = 56;
			$x = 3;
			$y = 1;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//257
			$i = 57;
			$x = 1;
			$y = 5;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//258
			$i = 58;
			$x = 0;
			$y = 1;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//259
			$i = 59;
			$x = 2;
			$y = 38;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//260
			$i = 60;
			$x = 0;
			$y = 42;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//261
			$i = 61;
			$x = 3;
			$y = 60;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//262
			$i = 62;
			$x = 3;
			$y = 12;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//263
			$i = 63;
			$x = 0;
			$y = 33;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//264
			$i = 64;
			$x = 0;
			$y = 30;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//265
			$i = 65;
			$x = 1;
			$y = 14;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//266
			$i = 66;
			$x = 2;
			$y = 62;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//267
			$i = 67;
			$x = 5;
			$y = 54;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//268
			$i = 68;
			$x = 1;
			$y = 8;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//269
			$i = 69;
			$x = 2;
			$y = 64;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//270
			$i = 70;
			$x = 1;
			$y = 55;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//271
			$i = 71;
			$x = 4;
			$y = 38;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//272
			$i = 72;
			$x = 3;
			$y = 21;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//273
			$i = 73;
			$x = 3;
			$y = 14;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//274
			$i = 74;
			$x = 4;
			$y = 19;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//275
			$i = 75;
			$x = 2;
			$y = 28;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//276
			$i = 76;
			$x = 2;
			$y = 50;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//277
			$i = 77;
			$x = 4;
			$y = 31;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//278
			$i = 78;
			$x = 2;
			$y = 46;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//279
			$i = 79;
			$x = 0;
			$y = 2;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//280
			$i = 80;
			$x = 4;
			$y = 33;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//281
			$i = 81;
			$x = 2;
			$y = 22;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//282
			$i = 82;
			$x = 5;
			$y = 35;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//283
			$i = 83;
			$x = 4;
			$y = 13;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//284
			$i = 84;
			$x = 5;
			$y = 42;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//285
			$i = 85;
			$x = 3;
			$y = 15;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//286
			$i = 86;
			$x = 3;
			$y = 32;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//287
			$i = 87;
			$x = 5;
			$y = 6;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//288
			$i = 88;
			$x = 3;
			$y = 34;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//289
			$i = 89;
			$x = 2;
			$y = 27;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//290
			$i = 90;
			$x = 4;
			$y = 34;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//291
			$i = 91;
			$x = 5;
			$y = 55;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//292
			$i = 92;
			$x = 1;
			$y = 12;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//293
			$i = 93;
			$x = 1;
			$y = 7;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//294
			$i = 94;
			$x = 3;
			$y = 29;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//295
			$i = 95;
			$x = 2;
			$y = 23;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//296
			$i = 96;
			$x = 0;
			$y = 11;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//297
			$i = 97;
			$x = 5;
			$y = 32;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//298
			$i = 98;
			$x = 3;
			$y = 23;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//299
			$i = 99;
			$x = 5;
			$y = 29;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//300
			$i = 100;
			$x = 1;
			$y = 33;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//301
			$i = 101;
			$x = 4;
			$y = 12;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//302
			$i = 102;
			$x = 3;
			$y = 6;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//303
			$i = 103;
			$x = 2;
			$y = 48;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//304
			$i = 104;
			$x = 3;
			$y = 48;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//305
			$i = 105;
			$x = 4;
			$y = 54;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//306
			$i = 106;
			$x = 5;
			$y = 7;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//307
			$i = 107;
			$x = 1;
			$y = 19;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//308
			$i = 108;
			$x = 2;
			$y = 55;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//309
			$i = 109;
			$x = 0;
			$y = 37;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//310
			$i = 110;
			$x = 2;
			$y = 8;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//311
			$i = 111;
			$x = 1;
			$y = 31;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//312
			$i = 112;
			$x = 4;
			$y = 1;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//313
			$i = 113;
			$x = 4;
			$y = 5;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//314
			$i = 114;
			$x = 4;
			$y = 21;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//315
			$i = 115;
			$x = 1;
			$y = 35;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//316
			$i = 116;
			$x = 2;
			$y = 31;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//317
			$i = 117;
			$x = 3;
			$y = 44;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//318
			$i = 118;
			$x = 1;
			$y = 49;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//319
			$i = 119;
			$x = 3;
			$y = 55;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//320
			$i = 120;
			$x = 3;
			$y = 51;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//321
			$i = 121;
			$x = 4;
			$y = 28;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//322
			$i = 122;
			$x = 4;
			$y = 26;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//323
			$i = 123;
			$x = 3;
			$y = 20;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//324
			$i = 124;
			$x = 3;
			$y = 35;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//325
			$i = 125;
			$x = 3;
			$y = 53;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//326
			$i = 126;
			$x = 1;
			$y = 34;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//327
			$i = 127;
			$x = 3;
			$y = 2;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//328
			$i = 128;
			$x = 5;
			$y = 2;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//329
			$i = 129;
			$x = 5;
			$y = 46;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//330
			$i = 130;
			$x = 1;
			$y = 32;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//331
			$i = 131;
			$x = 1;
			$y = 15;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//332
			$i = 132;
			$x = 1;
			$y = 39;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//333
			$i = 133;
			$x = 5;
			$y = 40;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//334
			$i = 134;
			$x = 1;
			$y = 41;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//335
			$i = 135;
			$x = 5;
			$y = 13;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//336
			$i = 136;
			$x = 4;
			$y = 57;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//337
			$i = 137;
			$x = 1;
			$y = 43;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//338
			$i = 138;
			$x = 2;
			$y = 16;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//339
			$i = 139;
			$x = 1;
			$y = 36;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//340
			$i = 140;
			$x = 2;
			$y = 36;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//341
			$i = 141;
			$x = 4;
			$y = 64;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//342
			$i = 142;
			$x = 3;
			$y = 61;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//343
			$i = 143;
			$x = 4;
			$y = 22;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//344
			$i = 144;
			$x = 2;
			$y = 29;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//345
			$i = 145;
			$x = 5;
			$y = 18;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//346
			$i = 146;
			$x = 4;
			$y = 58;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//347
			$i = 147;
			$x = 0;
			$y = 21;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//348
			$i = 148;
			$x = 2;
			$y = 67;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//349
			$i = 149;
			$x = 1;
			$y = 6;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//350
			$i = 150;
			$x = 3;
			$y = 17;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//351
			$i = 151;
			$x = 2;
			$y = 68;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//352
			$i = 152;
			$x = 0;
			$y = 67;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//353
			$i = 153;
			$x = 3;
			$y = 67;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//354
			$i = 154;
			$x = 1;
			$y = 57;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//355
			$i = 155;
			$x = 2;
			$y = 69;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//356
			$i = 156;
			$x = 1;
			$y = 68;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//357
			$i = 157;
			$x = 4;
			$y = 69;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//358
			$i = 158;
			$x = 5;
			$y = 45;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//359
			$i = 159;
			$x = 3;
			$y = 68;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//360
			$i = 160;
			$x = 1;
			$y = 9;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//361
			$i = 161;
			$x = 2;
			$y = 42;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//362
			$i = 162;
			$x = 4;
			$y = 65;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//363
			$i = 163;
			$x = 5;
			$y = 5;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//364
			$i = 164;
			$x = 3;
			$y = 28;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//365
			$i = 165;
			$x = 3;
			$y = 9;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//366
			$i = 166;
			$x = 0;
			$y = 68;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//367
			$i = 167;
			$x = 1;
			$y = 67;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//368
			$i = 168;
			$x = 0;
			$y = 29;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//369
			$i = 169;
			$x = 5;
			$y = 67;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//370
			$i = 170;
			$x = 2;
			$y = 15;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//371
			$i = 171;
			$x = 3;
			$y = 47;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//372
			$i = 172;
			$x = 0;
			$y = 69;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//373
			$i = 173;
			$x = 1;
			$y = 69;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//374
			$i = 174;
			$x = 2;
			$y = 41;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//375
			$i = 175;
			$x = 5;
			$y = 64;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//376
			$i = 176;
			$x = 3;
			$y = 69;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//377
			$i = 177;
			$x = 4;
			$y = 68;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//378
			$i = 178;
			$x = 4;
			$y = 67;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//379
			$i = 179;
			$x = 1;
			$y = 27;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//380
			$i = 180;
			$x = 3;
			$y = 41;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//381
			$i = 181;
			$x = 0;
			$y = 45;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//382
			$i = 182;
			$x = 3;
			$y = 36;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//383
			$i = 183;
			$x = 2;
			$y = 70;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//384
			$i = 184;
			$x = 0;
			$y = 52;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//386
			$i = 186;
			$x = 5;
			$y = 72;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//387
			$i = 187;
			$x = 3;
			$y = 73;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//389
			$i = 189;
			$x = 2;
			$y = 73;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//390
			$i = 190;
			$x = 0;
			$y = 74;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//391
			$i = 191;
			$x = 3;
			$y = 70;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//392
			$i = 192;
			$x = 1;
			$y = 72;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//393
			$i = 193;
			$x = 4;
			$y = 73;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//394
			$i = 194;
			$x = 0;
			$y = 73;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//395
			$i = 195;
			$x = 0;
			$y = 70;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//397
			$i = 197;
			$x = 2;
			$y = 72;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//398
			$i = 198;
			$x = 1;
			$y = 74;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//399
			$i = 199;
			$x = 4;
			$y = 72;
			if ($c2[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c2[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c2[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c2[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c2[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c2[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//400
			$i = 0;
			$x = 4;
			$y = 70;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//401
			$i = 1;
			$x = 0;
			$y = 3;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//402
			$i = 2;
			$x = 5;
			$y = 70;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//404
			$i = 4;
			$x = 0;
			$y = 71;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//405
			$i = 5;
			$x = 1;
			$y = 70;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//406
			$i = 6;
			$x = 1;
			$y = 71;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//407
			$i = 7;
			$x = 3;
			$y = 72;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//410
			$i = 10;
			$x = 1;
			$y = 73;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//411
			$i = 11;
			$x = 2;
			$y = 63;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//413
			$i = 13;
			$x = 2;
			$y = 71;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//414
			$i = 14;
			$x = 3;
			$y = 71;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//415
			$i = 15;
			$x = 4;
			$y = 71;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//416
			$i = 16;
			$x = 5;
			$y = 73;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//418
			$i = 18;
			$x = 5;
			$y = 71;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			//421
			$i = 21;
			$x = 0;
			$y = 72;
			if ($c3[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF66CC);
			else if ($c3[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFFFF00);
			else if ($c3[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0xFF0000);
			else if ($c3[0][$i] == "CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x00B0EF);
			else if ($c3[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x92D050);
			else if ($c3[0][$i] == "FAILED")
				ImagefilledRectangle($img,131*$x+167,20*$y+59,131*$x+167+18,20*$y+59+18,0x000000);
			ImagePng($img);
			ImageDestroy($img);
		}
		return true;
	}
?>