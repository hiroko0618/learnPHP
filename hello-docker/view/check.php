<?php
	require_once 'convert.php';

	function isAlpha ($keyword) {
		
		if (ctype_alpha($keyword)) {
			return '日本語で入力してください。';
		} else {
			$result = convertToRomaji($keyword);
			return $result;		
		}
	}
?>
