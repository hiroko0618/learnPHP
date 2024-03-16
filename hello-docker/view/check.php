<?php
	require_once 'convert.php';

	function isAlpha ($keyword) {
		
		$keyLen = mb_strlen($keyword);

		if (ctype_alpha($keyword)) {
			return '日本語で入力してください。';
		} else if (0 >= $keyLen) {
			return $result = '文字が入力されていません。';
		} else {
			$result = convertToRomaji($keyword, $keyLen);
			return $result;		
		}
	}
?>
