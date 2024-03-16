<!DOCTYPE html>
<html lang="ja">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/layout.css">
	</head>
	<body>
		<div id="form-area">
			<form action="index.php" method="post">
				<div>
					<input type="text" name="keyword" id="input-word"
					   placeholder="あなたの好きな言葉を入力してください">
					</input>
					<input type="submit" value="生成！" id="btn"></input><br />
				</div>
				<div class="password">
					<label for="pass-length">パスワードの長さ</label>
					<input type="number" name="pass-length" id="pass-length"
					value=8 min=2 max=30>
				</div>
			</form>
		</div>

			<hr>
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$keyword = $_POST["keyword"];
					$number  = $_POST["pass-length"];

					$pass = convertToRomaji($keyword);

					echo "<p>$pass</p>";
				}

				function convertToRomaji ($keyword) {
					$keyLen = mb_strlen($keyword);

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
					} else {
						return $result = '文字が入力されていません。';
					}
				}
			?>
	</body>
</html>
