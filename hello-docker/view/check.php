<?php
	require_once 'convert.php';

	function isAlpha ($keyword, $passLen) {
		
		$keyLen = mb_strlen($keyword);

		if (0 >= $keyLen) {
			return $result = '文字が入力されていません。';
		} else {
			$result = convertToRomaji($keyword, $keyLen, $passLen);
			return $result;
		}
	}
?>
