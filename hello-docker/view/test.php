<?php
// Mecabを初期化します
$tagger = new MeCab\Tagger();

// 形態素解析を行います
$text = "今日はいい天気ですね。";
$result = $tagger->parse($text);

// 解析結果を表示します
echo $result;
?>

