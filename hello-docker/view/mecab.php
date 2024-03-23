<?php

function mecabParse ($keyword) {
	var_dump($keyword);
	$output = shell_exec('echo "' .$keyword . '" | mecab');
	var_dump($output);
	return $output;	
}

?>
