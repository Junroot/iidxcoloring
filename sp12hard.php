<?php
	function sp12hard($account, $filepath)
	{
		$img=ImageCreateFromPng('./image/image_sp_12_hard.png');
		$s1 = new Snoopy;
		$s1->fetch("http://iidx.me/" . $account . "/sp/level/12/?page=1&sort=Aversion&l=08");
		preg_match_all("/\<td class\=\"clear\"\>(.*?)\<\/td\>/",$s1->results,$c1);
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
			//120
			$i = 120;
			$x = 0;
			$y = 0;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//124
			$i = 124;
			$x = 1;
			$y = 0;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//127
			$i = 127;
			$x = 2;
			$y = 0;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//132
			$i = 132;
			$x = 3;
			$y = 0;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//139
			$i = 139;
			$x = 4;
			$y = 0;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//141
			$i = 141;
			$x = 0;
			$y = 1;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//147
			$i = 147;
			$x = 1;
			$y = 1;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//38
			$i = 38;
			$x = 0;
			$y = 2;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//41
			$i = 41;
			$x = 1;
			$y = 2;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//43
			$i = 43;
			$x = 2;
			$y = 2;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//19
			$i = 19;
			$x = 3;
			$y = 2;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//71
			$i = 71;
			$x = 0;
			$y = 3;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//98
			$i = 98;
			$x = 1;
			$y = 3;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//103
			$i = 103;
			$x = 2;
			$y = 3;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//105
			$i = 105;
			$x = 3;
			$y = 3;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//68
			$i = 68;
			$x = 4;
			$y = 3;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//88
			$i = 88;
			$x = 0;
			$y = 4;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//91
			$i = 91;
			$x = 1;
			$y = 4;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//133
			$i = 133;
			$x = 2;
			$y = 4;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//62
			$i = 62;
			$x = 3;
			$y = 4;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//145
			$i = 145;
			$x = 4;
			$y = 4;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//44
			$i = 44;
			$x = 0;
			$y = 5;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//70
			$i = 70;
			$x = 1;
			$y = 5;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//25
			$i = 25;
			$x = 2;
			$y = 5;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//61
			$i = 61;
			$x = 0;
			$y = 6;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//138
			$i = 138;
			$x = 1;
			$y = 6;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//23
			$i = 23;
			$x = 2;
			$y = 6;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//77
			$i = 77;
			$x = 0;
			$y = 7;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//142
			$i = 142;
			$x = 1;
			$y = 7;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//45
			$i = 45;
			$x = 0;
			$y = 8;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//134
			$i = 134;
			$x = 1;
			$y = 8;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//74
			$i = 74;
			$x = 2;
			$y = 8;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//32
			$i = 32;
			$x = 3;
			$y = 8;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//53
			$i = 53;
			$x = 4;
			$y = 8;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//63
			$i = 63;
			$x = 0;
			$y = 9;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//140
			$i = 140;
			$x = 1;
			$y = 9;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//108
			$i = 108;
			$x = 2;
			$y = 9;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//113
			$i = 113;
			$x = 3;
			$y = 9;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//15
			$i = 15;
			$x = 4;
			$y = 9;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//84
			$i = 84;
			$x = 0;
			$y = 10;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//93
			$i = 93;
			$x = 0;
			$y = 11;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//94
			$i = 94;
			$x = 1;
			$y = 11;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//34
			$i = 34;
			$x = 2;
			$y = 11;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//16
			$i = 16;
			$x = 3;
			$y = 11;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//54
			$i = 54;
			$x = 4;
			$y = 11;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//67
			$i = 67;
			$x = 0;
			$y = 12;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//118
			$i = 118;
			$x = 1;
			$y = 12;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//49
			$i = 49;
			$x = 0;
			$y = 13;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//50
			$i = 50;
			$x = 1;
			$y = 13;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//130
			$i = 130;
			$x = 2;
			$y = 13;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//101
			$i = 101;
			$x = 3;
			$y = 13;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//104
			$i = 104;
			$x = 4;
			$y = 13;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//174
			$i = 174;
			$x = 0;
			$y = 14;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//83
			$i = 83;
			$x = 1;
			$y = 14;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//85
			$i = 85;
			$x = 2;
			$y = 14;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//148
			$i = 148;
			$x = 3;
			$y = 14;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//110
			$i = 110;
			$x = 4;
			$y = 14;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//122
			$i = 122;
			$x = 0;
			$y = 15;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//89
			$i = 89;
			$x = 1;
			$y = 15;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//137
			$i = 137;
			$x = 2;
			$y = 15;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//107
			$i = 107;
			$x = 3;
			$y = 15;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//39
			$i = 39;
			$x = 0;
			$y = 16;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//123
			$i = 123;
			$x = 1;
			$y = 16;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//40
			$i = 40;
			$x = 2;
			$y = 16;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//59
			$i = 59;
			$x = 3;
			$y = 16;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//125
			$i = 125;
			$x = 4;
			$y = 16;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//90
			$i = 90;
			$x = 0;
			$y = 17;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//46
			$i = 46;
			$x = 1;
			$y = 17;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
  			//160
			$i = 160;
			$x = 2;
			$y = 17;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//129
			$i = 129;
			$x = 3;
			$y = 17;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//164
			$i = 164;
			$x = 4;
			$y = 17;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//97
			$i = 97;
			$x = 0;
			$y = 18;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//99
			$i = 99;
			$x = 1;
			$y = 18;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//76
			$i = 76;
			$x = 2;
			$y = 18;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//65
			$i = 65;
			$x = 3;
			$y = 18;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//102
			$i = 102;
			$x = 4;
			$y = 18;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//78
			$i = 78;
			$x = 0;
			$y = 19;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//111
			$i = 111;
			$x = 1;
			$y = 19;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//42
			$i = 42;
			$x = 2;
			$y = 19;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//146
			$i = 146;
			$x = 3;
			$y = 19;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//28
			$i = 28;
			$x = 0;
			$y = 20;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//112
			$i = 112;
			$x = 1;
			$y = 20;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//120
			$i = 120;
			$x = 0;
			$y = 21;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//150
			$i = 150;
			$x = 1;
			$y = 21;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//24
			$i = 24;
			$x = 2;
			$y = 21;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//1
			$i = 1;
			$x = 3;
			$y = 21;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//60
			$i = 60;
			$x = 4;
			$y = 21;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//48
			$i = 48;
			$x = 0;
			$y = 22;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//126
			$i = 126;
			$x = 1;
			$y = 22;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//73
			$i = 73;
			$x = 2;
			$y = 22;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//92
			$i = 92;
			$x = 3;
			$y = 22;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//51
			$i = 51;
			$x = 4;
			$y = 22;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//128
			$i = 128;
			$x = 0;
			$y = 23;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//135
			$i = 135;
			$x = 1;
			$y = 23;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//75
			$i = 75;
			$x = 2;
			$y = 23;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//9
			$i = 9;
			$x = 3;
			$y = 23;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//136
			$i = 136;
			$x = 4;
			$y = 23;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//18
			$i = 18;
			$x = 0;
			$y = 24;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//100
			$i = 100;
			$x = 1;
			$y = 24;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//82
			$i = 82;
			$x = 2;
			$y = 24;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//114
			$i = 114;
			$x = 3;
			$y = 24;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//86
			$i = 86;
			$x = 4;
			$y = 24;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//117
			$i = 117;
			$x = 0;
			$y = 25;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//116
			$i = 116;
			$x = 1;
			$y = 25;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//115
			$i = 115;
			$x = 2;
			$y = 25;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//143
			$i = 143;
			$x = 3;
			$y = 25;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//144
			$i = 144;
			$x = 4;
			$y = 25;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//119
			$i = 119;
			$x = 0;
			$y = 26;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//12
			$i = 12;
			$x = 1;
			$y = 26;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//87
			$i = 87;
			$x = 2;
			$y = 26;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//56
			$i = 56;
			$x = 3;
			$y = 26;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//11
			$i = 11;
			$x = 0;
			$y = 27;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//57
			$i = 57;
			$x = 1;
			$y = 27;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//58
			$i = 58;
			$x = 2;
			$y = 27;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//20
			$i = 20;
			$x = 3;
			$y = 27;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//26
			$i = 26;
			$x = 4;
			$y = 27;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//8
			$i = 8;
			$x = 0;
			$y = 28;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//95
			$i = 95;
			$x = 1;
			$y = 28;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//3
			$i = 3;
			$x = 2;
			$y = 28;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//55
			$i = 55;
			$x = 3;
			$y = 28;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//79
			$i = 79;
			$x = 4;
			$y = 28;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//80
			$i = 80;
			$x = 0;
			$y = 29;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//81
			$i = 81;
			$x = 1;
			$y = 29;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//106
			$i = 106;
			$x = 2;
			$y = 29;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//29
			$i = 29;
			$x = 3;
			$y = 29;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);	
			//37
			$i = 37;
			$x = 4;
			$y = 29;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//30
			$i = 30;
			$x = 0;
			$y = 30;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//47
			$i = 47;
			$x = 0;
			$y = 31;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//31
			$i = 31;
			$x = 1;
			$y = 31;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//6
			$i = 6;
			$x = 2;
			$y = 31;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//3
			$i = 3;
			$x = 3;
			$y = 31;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//4
			$i = 4;
			$x = 4;
			$y = 31;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//109
			$i = 109;
			$x = 0;
			$y = 32;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//72
			$i = 72;
			$x = 1;
			$y = 32;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//131
			$i = 131;
			$x = 2;
			$y = 32;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//27
			$i = 27;
			$x = 3;
			$y = 32;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//96
			$i = 96;
			$x = 4;
			$y = 32;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//5
			$i = 5;
			$x = 0;
			$y = 33;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//52
			$i = 52;
			$x = 1;
			$y = 33;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//170
			$i = 170;
			$x = 2;
			$y = 33;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//0
			$i = 0;
			$x = 3;
			$y = 33;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//69
			$i = 69;
			$x = 4;
			$y = 33;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//22
			$i = 22;
			$x = 0;
			$y = 34;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//7
			$i = 7;
			$x = 0;
			$y = 35;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//64
			$i = 64;
			$x = 1;
			$y = 35;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//17
			$i = 17;
			$x = 2;
			$y = 35;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//36
			$i = 36;
			$x = 3;
			$y = 35;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//10
			$i = 10;
			$x = 4;
			$y = 35;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//2
			$i = 2;
			$x = 0;
			$y = 36;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//14
			$i = 14;
			$x = 1;
			$y = 36;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//13
			$i = 13;
			$x = 2;
			$y = 36;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//35
			$i = 35;
			$x = 3;
			$y = 36;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//66
			$i = 66;
			$x = 4;
			$y = 36;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//21
			$i = 21;
			$x = 0;
			$y = 37;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//152
			$i = 152;
			$x = 0;
			$y = 38;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//157
			$i = 157;
			$x = 1;
			$y = 38;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//159
			$i = 159;
			$x = 2;
			$y = 38;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//163
			$i = 163;
			$x = 3;
			$y = 38;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//169
			$i = 169;
			$x = 4;
			$y = 38;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//175
			$i = 175;
			$x = 0;
			$y = 39;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//177
			$i = 177;
			$x = 1;
			$y = 39;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//181
			$i = 181;
			$x = 2;
			$y = 39;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);
			//180
			$i = 180;
			$x = 3;
			$y = 39;
			if ($c1[0][$i] == "FULL COMBO")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF66CC);
			else if ($c1[0][$i] == "EX-HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFFFF00);
			else if ($c1[0][$i] == "HARD CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0xFF0000);
			else if ($c1[0][$i] == "CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x00B0EF);
			else if ($c1[0][$i] == "EASY CLEAR")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x92D050);
			else if ($c1[0][$i] == "FAILED")
				ImagefilledRectangle($img,163*$x+233,22.6*$y+27,163*$x+233+14,22.6*$y+27+14,0x000000);



			ImagePng($img);
			ImageDestroy($img);
		}
		return true;
	}
?>