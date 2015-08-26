<?php
	$gnum = rand(1, 31);
	$i = 1;
	while ($i <= 10) {
		$arr[$i] = $i;
		$i++;
	}
	
	while (true) {
		foreach ($arr as $key=>$value):
		// 可以看出，使用冒号代替大括号后，一个分支下可以有多条语句，这些语句都属于这一个分支
			if ($key > 7):
			// 使用 break 跳两层循环，条数死循环 while (true)
				break 2;
			elseif ($key == 5):
				echo "This is midnum ";
				echo $key."=>".$value."\n";
				continue;
			elseif ($key > 0):
				echo $key."=>".$value."\n";
			else:
			// 这个break 只跳出了foreach，
				break;				
			endif;
	
		endforeach;
	}

?>
