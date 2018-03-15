<?php
/**
 * 概要： サイトの更新がされている場合は、テキストファイルに吐き出す
 * このスクリプトをたたいたら、対象のサイトが更新しているか否かを出力する
 *
 * Date: 2018/02/11
 * Time: 23:44
 */

const UPDATE_DATE_TXT_PATH = __DIR__ . '/data/updateDate.txt';
//url取得
$url = 'http://gigazine.net/';

$html = file_get_contents($url);
$domDocument = new DOMDocument();
@$domDocument->loadHTML($html);
$xpath = new DOMXPath($domDocument);
$entries = $xpath->evaluate('//*[@id="section"]/div[2]/section[1]/div');

foreach ($entries as $entry) {
    $news = mb_convert_encoding($entry->textContent, "SJIS");
}

$endLine = getEndLine();
$news = str_replace(array("\r\n","\n","\r"), '', trim($news));

if ($news === $endLine){
    echo $url . 'は更新していません';
    exit;
}

//今の情報をfileに吐き出す
putFile($news);
echo $url . 'は更新しています';
exit;

/*
 * 更新情報をファイルから取得する
 *
 * @return string ファイルの最終行
 */
function getEndLine()
{
    $text = file_get_contents(UPDATE_DATE_TXT_PATH);
    return end(explode("\n", $text));
}

/*
 * 更新情報をファイルに吐き出す
 */
function putFile($news)
{
    file_put_contents(UPDATE_DATE_TXT_PATH, "\n{$news}", FILE_APPEND);
}


