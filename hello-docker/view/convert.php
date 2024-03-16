<?php
function convertToRomaji ($keyword, $keyLen) {

	$getRomaji = array (
		'あ' => 'a',  'い' => 'i',   'う' => 'u',  'え' => 'e',  'お' => 'o',
		'か' => 'ka', 'き' => 'ki',  'く' => 'ku', 'け' => 'ke', 'こ' => 'ko',
		'が' => 'ga', 'ぎ' => 'gi',  'ぐ' => 'gu', 'げ' => 'ge', 'ご' => 'go',
		'さ' => 'sa', 'し' => 'shi', 'す' => 'su', 'せ' => 'se', 'そ' => 'so',
		'ざ' => 'za', 'じ' => 'zi',  'ず' => 'zu', 'ぜ' => 'ze', 'ぞ' => 'zo',
		'た' => 'ta', 'ち' => 'chi', 'つ' => 'tsu','て' => 'te', 'と' => 'to',
		'だ' => 'da', 'ぢ' => 'di',  'づ' => 'du', 'で' => 'de', 'ど' => 'do',
		'な' => 'na', 'に' => 'ni',  'ぬ' => 'nu', 'ね' => 'ne', 'の' => 'no',
		'は' => 'ha', 'ひ' => 'hi',  'ふ' => 'fu', 'へ' => 'he', 'ほ' => 'ho',
		'ば' => 'ba', 'び' => 'bi',  'ぶ' => 'bu', 'べ' => 'be', 'ぼ' => 'bo',
		'ぱ' => 'pa', 'ぴ' => 'pi',  'ぷ' => 'pu', 'ぺ' => 'pe', 'ぽ' => 'po',
		'ま' => 'ma', 'み' => 'mi',  'む' => 'mu', 'め' => 'me', 'も' => 'mo',
		'や' => 'ya', 'い' => 'yu',  'よ' => 'yo',
		'ゃ' => 'ya', 'ゅ' => 'yu',  'ょ' => 'yo',
		'ら' => 'ra', 'り' => 'ri',  'る' => 'ru', 'れ' => 're', 'ろ' => 'ro',
		'わ' => 'wa', 'を' => 'wo',  'ん' => 'n'
	);

	if (0 < $keyLen) {
		for ($i=0; $i < $keyLen; $i++) {
			$sliceKey = mb_substr($keyword, $i, $i);
			array_key_exists($sliceKey, $getRomaji);
			$newKey .= $getRomaji[$sliceKey];
			$result .= $newKey;
			
		}
		return $result;
	}
}
?>
