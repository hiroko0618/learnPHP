<?php

function convertToRomaji ($keyword, $keyLen, $passLen) {

	$getRomaji = [
		'あ' => 'a',  'い' => 'i',   'う' => 'u',  'え' => 'e',  'お' => 'o',
		'か' => 'ka', 'き' => 'ki',  'く' => 'ku', 'け' => 'ke', 'こ' => 'ko',
		'さ' => 'sa', 'し' => 'shi', 'す' => 'su', 'せ' => 'se', 'そ' => 'so',
		'た' => 'ta', 'ち' => 'chi', 'つ' => 'tsu','て' => 'te', 'と' => 'to',
		'な' => 'na', 'に' => 'ni',  'ぬ' => 'nu', 'ね' => 'ne', 'の' => 'no',
		'は' => 'ha', 'ひ' => 'hi',  'ふ' => 'fu', 'へ' => 'he', 'ほ' => 'ho',
		'ま' => 'ma', 'み' => 'mi',  'む' => 'mu', 'め' => 'me', 'も' => 'mo',
		'や' => 'ya', 'ゆ' => 'yu',  'よ' => 'yo',
		'ら' => 'ra', 'り' => 'ri',  'る' => 'ru', 'れ' => 're', 'ろ' => 'ro',
		'わ' => 'wa', 'ゐ' => 'i',   'ゑ' => 'e',  'を' => 'o',
		'が' => 'ga', 'ぎ' => 'gi',  'ぐ' => 'gu', 'げ' => 'ge', 'ご' => 'go',
		'ざ' => 'za', 'じ' => 'ji',  'ず' => 'zu', 'ぜ' => 'ze', 'ぞ' => 'zo',
		'だ' => 'da', 'ぢ' => 'di',  'づ' => 'du', 'で' => 'de', 'ど' => 'do',
		'ば' => 'ba', 'び' => 'bi',  'ぶ' => 'bu', 'べ' => 'be', 'ぼ' => 'bo',
		'ぱ' => 'pa', 'ぴ' => 'pi',  'ぷ' => 'pu', 'ぺ' => 'pe', 'ぽ' => 'po',
		'きゃ' => 'kya', 'きゅ' => 'kyu', 'きょ' => 'kyo',
        	'しゃ' => 'sha', 'しゅ' => 'shu', 'しょ' => 'sho',
        	'ちゃ' => 'cha', 'ちゅ' => 'chu', 'ちょ' => 'cho',
        	'にゃ' => 'nya', 'にゅ' => 'nyu', 'にょ' => 'nyo',
        	'ひゃ' => 'hya', 'ひゅ' => 'hyu', 'ひょ' => 'hyo',
        	'みゃ' => 'mta', 'みゅ' => 'myu', 'みゅ' => 'myo',
        	'りゃ' => 'rya', 'りゅ' => 'ryu', 'りょ' => 'ryo',
        	'ぎゃ' => 'gya', 'ぎゅ' => 'gyu', 'ぎょ' => 'gyo',
        	'じゃ' => 'ja',  'じゅ' => 'ju',  'じょ' => 'jo',
        	'びゃ' => 'bya', 'びゅ' => 'byu', 'びょ' => 'byo',
        	'ぴゃ' => 'pya', 'ぴゅ' => 'pyu', 'ぴょ' => 'pyo',
	];

	if (0 < $keyLen) {
		$result = '';

		for ($i=0; $i < $keyLen; $i++) {
			$sliceKey = mb_substr($keyword, $i, 1);

			if (array_key_exists($sliceKey, $getRomaji)) {
				$newKey .= $getRomaji[$sliceKey];
				$result .= $newKey;

				$newKey = '';
			} else {
				$result .= $sliceKey;
			}
		}
		return $result;
	}
}
?>
