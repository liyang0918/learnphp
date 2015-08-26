<?php
	/* 字符串处理 */
	function echo_array(array $arr) {
		foreach ($arr as $key=>$value)
			echo $key."=>".$value."\n";
	}
	
	function ly_trim() {
		$str = " (: hello_world";
		$str1 = trim($str, " (:");
		echo '$str  :'.$str."\n";
		echo '$str1 :'.$str1."\n";
	}
	
	function ly_addslashes() {
		$str = "What's your name? I'm Liyang";
		$str1 = addslashes($str);
		echo '$str  :'.$str."\n";
		echo '$str1 :'.$str1."\n";
	}	
	
	function ly_substr() {
		$str = "abcdefghijklmnopqrstuvwxyz";
		$str1 = substr($str, -10, -8);
		echo '$str  :'.$str."\n";
		echo '$str1 :'.$str1."\n";
		echo 'str1 len :'.strlen($str1)."\n";
	}
	
	function ly_strstr() {
		$str = "abcdefghijklmnopqrstuvwxyzuvmnxjhsd";
		$str1 = stristr($str, 'uV');
		echo '$str  :'.$str."\n";
		echo '$str1 :'.$str1."\n";
		echo 'str1 len :'.strlen($str1)."\n";
	}
	
	function ly_replace() {
		$count = 0;
		$str = "Hello everybody, I'm Liyang.\n\t My site is www.Liyang.com.";
		$str1 = str_ireplace("liyang", 'Someone', $str, $count);
		echo '$str  :'.$str."\n";
		echo '$str1 :'.$str1."\n";
		echo '$count :'.$count."\n";
	}
	

	function ly_number_format() {
		$number = 123456789.0123;
		// 第2个参数表示精确到小数点后第2位，第3个参数表示小数点用 # 替代，第4个参数表示三位间隔符用 $ 替代
		$str1 = number_format($number, 2, "#", "$");
		echo '$number  :'.$number."\n";
		echo '$str1 :'.$str1."\n";
		if ($str1 == (int)$number) {
			echo "equal"."\n";
		} else {
			echo "no!!!"."\n";
		}
	}
	
	function ly_explode() {
		$str = 'ie=utf-8&f=3&rsv_bp=1&rsv_idx=1&tn=baidu&wd=php的get_defined_vars&oq=php';
		$arr = explode("=", $str);
		echo_array($arr);
	}
	
	function ly_implode() {
		$arr = array("www", "baidu", "com");
		$sep = ".";
		$url = implode($sep, $arr);
		echo '$url :'.$url."\n";
	}
	
	$DoSth = "ly_implode";
	$DoSth();
	
	
	
	
	
	
	
	
	
	
	
	
	
?>

