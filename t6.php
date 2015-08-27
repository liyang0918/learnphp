<?php
	/* POSIX扩展正则表达式 */
	function ly_ereg() {
		$ereg = '^[$][[:alpha:]_][[:alnum:]]*';
		@ereg($ereg, '$_name', $register);
		var_dump($register);
	}

	function ly_split() {
		$ereg = 'is';
		$str = 'This is a register book.';
		@$arr_str = spliti($ereg, $str);
		var_dump($arr_str);
	}
	
	/* PCRE兼容正则表达式函数 */
	function ly_preg_grep() {
		$preg = '/\d{3,4}-?\d{7,8}/';
		$arr = array('043212345678', '0431-7654321', '12345678');
		$preg_arr = preg_grep($preg, $arr);
		var_dump($preg_arr);
	}
	
	function ly_preg_match() {
		$str = 'This is an example!';
		$preg = '/\b\w{2}\b/';
		$num1 = preg_match($preg, $str, $arr1);
		echo $num1."\n";
		var_dump($arr1);
		$num2 = preg_match_all($preg, $str, $arr2);
		echo "\n".$num2."\n";
		var_dump($arr2);
	}
	
	function ly_preg_quote() {
		$str = '!、$、^、*、+、.、[、]、\\、/、b、<、>';
		$str2 = 'b';
		$match_one = preg_quote($str, $str2);
		echo $str."\n";
		echo $match_one;
	}
	
	$DoSth = "ly_preg_quote";
	$DoSth();
?>

